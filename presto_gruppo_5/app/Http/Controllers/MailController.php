<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store(StoreRequest $req){

        
        $email = $req->input('email');
        $user = $req->input('name');
        $message = $req->input('message');
        $contact = compact('email', 'user', 'message');

    
        Mail::to($email)->send(new ContactMail($contact));


        return redirect(route('homepage'))->with('message', 'Grazie per il messaggio! ti ricontatteremo al più presto.');
        
 
    }

    public function workwithus(){

        return view('mail.lavora');
    } 

   
}
