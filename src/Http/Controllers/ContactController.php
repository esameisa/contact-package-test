<?php

namespace Esameisa\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Esameisa\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        $message = "thanks, we send email from " . config('contact.send_email_to');

        Contact::create($request->all());
        
        return redirect()->back()->with('success', $message);
    }
}
