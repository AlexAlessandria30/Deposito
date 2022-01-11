<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Storerequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class Formcontroller extends Controller
{
    public function Form()
    {
        return view('welcome');
    }

    public function store(Storerequest $req){

        //  dd($req->all());

        $email = $req->input('email');
        $user = $req->input('name');
        $message = $req->input('message');
        $contact = compact('email', 'user','message');

        Mail::to($email)->send(new ContactMail($contact));


        return redirect(route('grazie'));
        
 
    }

    public function thanks(){

        return view('grazie');
    }
}
