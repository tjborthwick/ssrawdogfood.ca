<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Mail\DeliveryMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\DeliveryRequest;

class DeliveryController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Delivery');
    }

    public function send(DeliveryRequest $request)
    {
        $validated = $request->safe();

        $recipient = config('app.contact_us_recipient');

        try {
            Mail::to($recipient)->send(new DeliveryMail($validated));
        } catch (\Exception $e) {
            Log::info('Delivery Mail error: ' . $e?->getMessage());
        }

        return redirect()->back()->with('success', 'Delivery request sent successfully');
    }
}
