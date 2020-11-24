<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;
use App\Ticket;
use App\User;
use App\Http\Controllers\success;

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


   public function store(Request $request )
    {
        $request->validate([
            'issue'=>'required',
            'description'=>'required',
        ]);

        $ticket = new Ticket();
         $ticket->issue = $request->issue;
        $ticket->description = $request->description;
        $ticket->name = $request->name;
        $ticket->user_id = Auth::user()->id;
        $ticket->status = 1;
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


        $date=Carbon::now();               // Dec 25, 1975
      // $date=$date->toTimeString();
      if( $endDate = $date->addMinutes(30) ){
        return redirect()->route('list_tickets')->with('holi');
            }else{
        $ticket->issue = $request->issue;
        $ticket->description = $request->description;
        $ticket->status = $request->status;

        $ticket->update();
        return redirect()->route('list_tickets');
      }
                             //


    }
  public function view_options($id){
      $ticket = Ticket::findOrFail($id);
       return view('tickets.view', compact('ticket'));
    }
    public function update_options($id, Request $request){
        $ticket = Ticket::findOrFail($id);
        $ticket->issue = $request->issue;
        $ticket->description = $request->description;
       // $ticket->status = $ticket->status;


        return redirect()->route('list_tickets');

    }
    public function ticket_status ($id){
        $ticket = Ticket::findOrFail($id);
        $status=1;
        $status=2;
        $status=3;
        if($ticket->status == 1){
            $ticket->status = "Activo";
            $ticket->update();
            return back()->with('Success', 'Se ha inhabilitado la pregunta.');
        }else if($ticket->status == 2){
            $ticket->status = "Cancelado";
            $ticket->update();
            return back()->with('success', 'Se ha habilitado la pregunta.');
        }else if($ticket->status == 3){
            $ticket->status = "Cancelado";
            $ticket->update();
            return back()->with('success', 'Se ha habilitado la pregunta.');

        }else{

        }
    }

}

