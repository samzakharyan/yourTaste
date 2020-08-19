<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Contact;
use App\Http\Requests\ContactRequest;
class ContactController extends Controller
{
    function send(ContactRequest $request) {
        $validated = $request->validated();
        $data = array(
            'name'      =>  $request->name,
            'email'  =>        $request->email,
            'subject'      =>  $request->subject,
            'message'   =>   $request->message
        );

     	$insert = Contact::where($request->id)->insert($data);
    	Mail::to('saqharutyunyan2018@gmail.com')->send(new SendMail($data));
		return back()->with('success', 'Thanks for contacting us!');
    }
}


