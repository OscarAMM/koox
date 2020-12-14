<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\file;
use App\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $question = Faq::paginate();
        return view('questions.index', compact('question'));
    }

    public function user_index()
    {
        $question = Faq::paginate();
        return view('questions.user_index', compact('question'));
    }
    public function create()
    {
        return view('questions.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $question = new Faq();
        $question->question = $request->question;
        $question->answer = $request->answer;
        $question->status = $request->status;
        $file = $request->file('file');
        if ($file) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $file_path = $file->getPathName();
            //File store at folder specified ('files/faq')
            $path = $file->storeAs('files/faq/', $fileName);
            //File's path and name to save into db
            $file_model = new file();
            $file_model->name = $fileName;
            $file_model->path = $file_path;
            $file_model->save();
            //Comment save
            $question->save();
            //Attachment comment-file
            $question->files()->attach(file::where('id', $file_model->id)->first());
        }
        $question->save();

        return redirect()->route('questions_index')->with('succes', 'se ha agregado la pregunta y respuesta con exito');
    }
    public function edit($id)
    {
        $question = Faq::findOrFail($id);
        return view('questions.edit', compact('question'));
    }
    public function update(Request $request, $id)
    {
        $question = Faq::findOrFail($id);
        $question->question = $request->question;
        $question->answer = $request->answer;
        $question->status = $question->status;
        $question->update();
        return redirect()->route('questions_index')->with('succes', 'Se ha actualizado con exito la pregunta y respuesta');
    }
    public function question_status($id)
    {
        $question = Faq::findOrFail($id);
        if ($question->status == "Active") {
            $question->status = "Inactive";
            $question->update();
            return back()->with('Success', 'Se ha inhabilitado la pregunta.');
        } else {
            $question->status = "Active";
            $question->update();
            return back()->with('success', 'Se ha habilitado la pregunta.');
        }
    }
    public function download_faq_file($id){
        $file = file::findOrFail($id);
        return Storage::download('/files/faq/'.$file->name);
    }
}
