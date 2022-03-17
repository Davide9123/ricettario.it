<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function contact(){
        return view('contact');
    }
    public function contactSubmit(Request $request){
        $name= $request->input('name');
        $email= $request->input('email');
        $message= $request->input('message');
        
        $contact=compact('name','message');
        $adminContact=compact('name','email','message');

        Mail::to($email)->send(new ContactMail($contact));
        Mail::to('adminricettario@mail.it')->send(new AdminMail($adminContact));
    
        return redirect(route('welcome'))->with('message','Grazie per averci contattato!');
    }
}
