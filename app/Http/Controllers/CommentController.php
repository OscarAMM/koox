<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use App\Comment;
use App\Subcomment;
use Auth;
use Carbon\Carbon;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request, $id)
    {


        $forum = Forum::findOrFail($id);
        $user_id = Auth::user()->id;
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->post_date = Carbon::now();
        $comment->user_id = $user_id;
        $comment->save();
        //Forum-comment attachment [Basic]
        $comment->forums()->attach(Forum::where('id', $forum->id)->first());
        return back()->with('success', 'Se ha realizado con éxito el comentario. Cuenta con 24 horas para eliminar el comentario.');
    }
    public function delete($id)
    {

        $comment = Comment::findOrFail($id);
        $comment->forums()->detach();
        Subcomment::where('comment_id', $comment->id)->delete();
        $comment->delete();
        return back()->with('success', 'Se ha eliminado el comentario');
    }
}
