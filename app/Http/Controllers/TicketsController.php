<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\User;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function view_create()
    {
        $ticket = Ticket::all();
        $user = Auth::user();
        return view('tickets.create_tickets', compact('ticket'));
    }
    public function create()
    {
        $users = User::where('id', '<>', Auth::user()->id)->get();
        return view('forum.create', compact('users'));
    }

    // public function view_list()
    //{
    //  return view('tickets.show_tickets');
    //}
}
