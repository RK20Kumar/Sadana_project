<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{


    public function submitForm(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        try {
            Mail::to('shadana@gmail.com')->send(new ContactFormMail($data));
        } catch (\Exception $e) {
            // Handle email sending error
            // You can log the error or take appropriate actions
            // For example: return back()->withErrors(['email' => 'Email could not be sent']);

        }

        // Mail::to('recipient@example.com')->send(new ContactFormMail($data));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

}
