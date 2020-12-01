<?php

namespace App\Http\Controllers;

use Auth;
use App\File;
use Carbon\Carbon;
use App\Forum;
use App\Comment;
use App\Subcomment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    public function store(Request $request, $id) {


        $forum = Forum::findOrFail($id);
        $user_id = Auth::user()->id;
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->post_date = Carbon::now();
        $comment->user_id = $user_id;
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
            $comment->save();
            //Attachment comment-file
            $comment->files()->attach(File::where('id', $file_model->id)->first());
            //Attachment forum-file [to search files into forum]
            $comment->forums()->attach(Forum::where('id', $forum->id)->first());
        } else {
            $comment->save();
            //Forum-comment attachment [Basic]
            $comment->forums()->attach(Forum::where('id', $forum->id)->first());
        }
        return back()->with('success', 'Se ha realizado con éxito el comentario. Cuenta con 24 horas para eliminar el comentario.');
    }
    public function delete($id) {

        $comment = Comment::findOrFail($id);

        $files = $comment->files;
        foreach ($files as $file) {
            if ($comment->hasFile($file->id)) {
                $comment->files()->detach();
                Storage::delete('/files/' . $file->name);
            }
        }
        $comment->forums()->detach();
        Subcomment::where('comment_id', $comment->id)->delete();
        $comment->delete();
        return back()->with('success', 'Se ha eliminado el comentario');
    }
}
