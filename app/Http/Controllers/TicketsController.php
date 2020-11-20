<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function view_create()
    {
        return view('tickets.create_tickets');
    }
    public function view_list()
    {
        return view('tickets.show_tickets');
    }
}
