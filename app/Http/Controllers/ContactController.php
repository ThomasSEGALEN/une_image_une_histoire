<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\Contact as MailContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $contact = Contact::create([
            'email' => $request->email,
            'name' => $request->name,
            'reason' => $request->reason,
            'how' => $request->how,
            'message' => $request->message,
        ]);

        Mail::to('contact@uiuh.com')->send(new MailContact($contact));

        return back();
    }
}
