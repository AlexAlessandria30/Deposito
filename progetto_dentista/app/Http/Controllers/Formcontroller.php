<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\Storerequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class Formcontroller extends Controller
{
    public function Form()
    {
        return view('welcome');
    }

    public function store(Storerequest $req){

        //  dd($req->all());
        $contact = Contact::create([ 
            'email'=> $req->email,
             'name'=>$req->name,
             'message'=> $req->message,

        ]);

        // $contact->email = $req->input('email');
        // $contact->name = $req->input('name');
        // $contact->message = $req->input('message');



        Mail::to($contact->email)->send(new ContactMail($contact));


        return redirect(route('grazie'));
        
 
    }

    public function thanks(){

        return view('welcome');
    }
}
