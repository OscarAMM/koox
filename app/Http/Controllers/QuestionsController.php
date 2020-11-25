<?php

namespace App\Http\Controllers;

use App\Questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{

    public function index()
    {
        $question = Questions::all();
        return view('questions.index', compact('question'));
    }

    public function user_index()
    {
        $question = Questions::all();
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

        $question = new Questions();
        $question->question = $request->question;
        $question->answer = $request->answer;
        $question->status = $request->status;
        if (Questions::where('question', $request->question)->exists()) {
            return back()->with('error', 'La pregunta ya se encuentra registrada.');
        } else {
            $question->save();
        }
        return redirect()->route('questions_index')->with('succes', 'se ha agregado la pregunta y respuesta con exito');
    }
    public function edit($id)
    {
        $question = Questions::findOrFail($id);
        return view('questions.edit', compact('question'));
    }
    public function update(Request $request, $id)
    {
        $question = Questions::findOrFail($id);
        $question->question = $request->question;
        $question->answer = $request->answer;
        $question->status = $question->status;
        $question->update();
        return redirect()->route('questions_index')->with('succes', 'Se ha actualizado con exito la pregunta y respuesta');
    }
    public function question_status($id)
    {
        $question = Questions::findOrFail($id);
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
}
