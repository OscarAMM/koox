<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //esto es para definir que el usuario con aceso
    public function index()
    {
        $ticket = Ticket::all();
        $user = Auth::user();
        return view('tickets.index', compact('ticket'));
    }
    //se llama a la vista para crear un nuevo ticket
    public function create()
    {
        return view('tickets.create');
    }
    //Aqui servira para ver el modulo que solo vera los datos

    public function store(Request $request)
    {
        $request->validate([
            'issue' => 'required',
            'description' => 'required',
        ]);

        $ticket = new Ticket();
        $ticket->issue = $request->issue;
        $ticket->description = $request->description;
        $ticket->name = $request->name;
        $ticket->user_id = Auth::user()->id;
        $ticket->status = $request->status;
        $ticket->status = "Activado";
        $ticket->save();
        return redirect()->route('list_tickets');
    }
    public function edit($id)
    {
        $ticket = Ticket::findOrFail($id);
        //dd($ticket);
        return view('tickets.edit', compact('ticket'));
    }
    public function update(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);
        $date = Carbon::now(); // Dec 25, 1975
        $date->toTimeString();
        if ($ticket->created_at < $date) {
            $ticket->issue = $request->issue;
            $ticket->description = $request->description;
            $ticket->status = $request->status;
            $ticket->status = "Editado";
            $ticket->update();
            return redirect()->route('list_tickets');

        } else {
            return redirect()->route('list_tickets')->with('error', 'No se puedes modificar'. $ticket->id);
        }

    }
    public function view_options($id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('tickets.view', compact('ticket'));
    }
    public function update_options($id, Request $request)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->issue = $request->issue;
        $ticket->description = $request->description;
              return redirect()->route('list_tickets');
    }
    public function cancel($id)
    {
        $ticket = Ticket::findOrFail($id);
       if($ticket->status == "Cancelado"){
        $ticket->status = "Cerrado";
        $ticket->update();
        return redirect()->route('list_tickets');
       }else{
        $ticket->status = "Cancelado";
        $ticket->update();
        return redirect()->route('list_tickets');
       }


    }

}
