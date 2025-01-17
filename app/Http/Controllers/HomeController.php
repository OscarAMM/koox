<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Content;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $profiles = Profile::all();
        $content = Content::all();
        if(Auth::user()->hasRole('Administrador')){
            return view('home');
        }else{
            return view('Welcome', compact('profiles', 'content'));
        }
        
    }
}
