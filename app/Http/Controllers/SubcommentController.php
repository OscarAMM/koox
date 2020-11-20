<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Subcomment;
use Auth;
use Illuminate\Support\Carbon;

class SubcommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $user_id = Auth::user()->id;
        $subcomment = new Subcomment();
        $subcomment->subcomment = $request->comment;
        $subcomment->post_date = Carbon::now();
        $subcomment->user_id = $user_id;
        $subcomment->comment_id = $comment->id;
        $subcomment->save();
        //Forum-comment attachment [Basic]
        return back()->with('success', 'Se ha realizado con éxito el comentario. Cuenta con 24 horas para eliminar el comentario.');
    }


    public function delete($id)
    {
        $subcomment = Subcomment::findOrFail($id);
        $subcomment->delete();
        return back()->with('success', 'Se ha eliminado el comentario');
    }
}
