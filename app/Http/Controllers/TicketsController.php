<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tickets;
class TicketsController extends Controller
{
    //
    public function index()
    {
        $tickets = Tickets::all();
        return view('all', compact('tickets'));
    }
    public function create(Request $request)
    {
        $new_ticket = new Tickets();
        $new_ticket->email =  $request->input('email');
        $new_ticket->text =  $request->input('message');
        $new_ticket->save();

        return redirect('/');
    }
}
