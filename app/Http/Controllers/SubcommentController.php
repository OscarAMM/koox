<?php

namespace App\Http\Controllers;

use App\Comment;

use Auth;
use App\File;
use Carbon\Carbon;
use App\Forum;
use App\Subcomment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubcommentController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }


    public function store(Request $request, $id) {
        $comment = Comment::findOrFail($id);
        $user_id = Auth::user()->id;
        $subcomment = new Subcomment();
        $subcomment->subcomment = $request->comment;
        $subcomment->post_date = Carbon::now();
        $subcomment->user_id = $user_id;
        $subcomment->comment_id = $comment->id;
        $file = $request->file('file');
        if ($file) {
            //File request
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $file_path = $file->getPathName();
            //File store at folder specified ('files')
            $path = $file->storeAs('files', $fileName);
            //File's path and name to save into db
            $file_model = new File();
            $file_model->name = $fileName;
            $file_model->path = $file_path;
            $file_model->save();
            //Comment save
            $subcomment->save();
            //Attachment comment-file
            $subcomment->files()->attach(File::where('id', $file_model->id)->first());
            //Attachment forum-file [to search files into forum]
        } else {
            $subcomment->save();
            //Forum-comment attachment [Basic]
        }
        return back()->with('success', 'Se ha realizado con éxito el comentario. Cuenta con 24 horas para eliminar el comentario.');
    }


    public function delete($id) {
        $subcomment = Subcomment::findOrFail($id);
        $files = $subcomment->files;
        foreach ($files as $file) {
            if ($subcomment->hasFile($file->id)) {
                $subcomment->files()->detach();
                Storage::delete('/files/' . $file->name);
            }
        }
        $subcomment->delete();
        return back()->with('success', 'Se ha eliminado el comentario');
    }
}
