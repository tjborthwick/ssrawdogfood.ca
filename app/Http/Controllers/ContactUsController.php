<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactUsRequest;

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('ContactUs');
    }

    public function send(ContactUsRequest $request)
    {
        $validated = $request->safe();

        try {
            Mail::to('tjborthwick@gmail.com')->send(new ContactUsMail($validated));
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
