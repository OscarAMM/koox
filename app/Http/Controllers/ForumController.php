<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use App\Subcomment;
use App\User;
use Illuminate\Support\Str;
use Auth;

class ForumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $forum = Forum::where('status', 'Nuevo')->get()->take(5);
        return view('forum.index', compact('forum'));
    }
    public function forum($id)
    {
        $forum = Forum::findOrFail($id);
        $comments = $forum->comments;
        $subcomments = Subcomment::all();
        return view('forum.forum', compact('forum', 'comments', 'subcomments'));
    }
    public function create()
    {
        $users = User::all();
        return view('forum.create', compact('users'));
    }
    public function store(Request $request)
    {

        $forum = new Forum();
        $forum->topic = $request->topic;
        $forum->description = $request->description;
        $forum->creator_name = Auth::user()->name;
        $forum->status = "Nuevo";
        $forum->random_link = Str::random(10);
        $users = $request->users;
        $forum->save();
        foreach ($users as $user) {
            $forum->users()->attach(User::where('id', $user)->first());
        }
     
        return redirect()->route('forum_index')->with('success', 'Se ha creado el foro con éxito.');
    }

    public function list_all()
    {
        $forum = Forum::orderBy('id', 'desc')->paginate();
        return view('forum.forum_all', compact('forum'));
    }
}
