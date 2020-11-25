<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $contents = Content::paginate(10);
        return view('content.index', compact('contents'));
    }
    public function create()
    {
        return view('content.create');
    } 
    public function store(Request $request)
    {
        $request->validate([
            'first_paragraph' => 'required',
            'objective_paragraph' => 'required',
            'sub_title'=> 'required'
        ]);
        $content = new Content();
        $content->first_paragraph = $request->first_paragraph;
        $content->objective_paragraph = $request->objective_paragraph;
        $content->sub_title = $request->sub_title;
        $content->status = "active";
        $content->save();
        return redirect()->route('content_index')->with('success', 'Se ha publicado correctamente el contenido.');
    }
}
