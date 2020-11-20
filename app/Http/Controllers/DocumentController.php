<?php

namespace App\Http\Controllers;

use Auth;
use App\File;
use App\User;
use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DocumentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function index(){
        $documents = Document::all();
        return view('documents.index', compact('documents'));
       
           }
    public function store(Request $request)
    {
        $request->validate([
            'title_document'=>'required',
            'file'=>'required'
           
        ]);
        
       
        $user_id = Auth::user()->id;
        $document = new Document();
        $document->title_document = $request->title_document;
        $document->users_id = $user_id;
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
            $document->save();
            //Attachment comment-file
                    
      
            $document->files()->attach(File::where('id', $file_model->id)->first());

        } else {
            $document->save();
                        
        }
        return back()->with('success', 'Documento Guardado');

}
public function delete($id)
{
    $document = Document::findOrFail($id);
    $files = $document->files;
    foreach ($files as $file) {
        if ($document->hasFile($file->id)) {
            $document->files()->detach();
            Storage::delete('/files/' . $file->name);
        }
    }
    
    $document->delete();
    return back()->with('success', 'Se ha eliminado el documento');
}
public function downloadFile($id){
    $file = File::findOrFail($id);
    return Storage::download('/files/'. $file->name);
}
}