<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

        $recipient = config('app.contact_us_recipient');

        try {
            Mail::to($recipient)->send(new ContactUsMail($validated));
        } catch (\Exception $e) {
            Log::info('Contact Us Mail error: ' . $e?->getMessage());
        }

        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
