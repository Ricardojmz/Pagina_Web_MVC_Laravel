<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {
    	$message = request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:3',
    	]);
    	Mail::to('abisai1@equipo4.com')->queue(new MessageReceived($message));
    	return back()->with('status', 'Recibimos tu mensaje, responderemos en menos de 24 hrs');
    }
}
