<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Mail\CustomFoodMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CustomFoodRequest;

class CustomFoodController extends Controller
{
    public function index()
    {
        return Inertia::render('Products/CustomFood');
    }

    public function send(CustomFoodRequest $request)
    {
        $validated = $request->safe();

        try {
            Mail::to('tjborthwick@gmail.com')->send(new CustomFoodMail($validated));
        } catch (\Exception $e) {
            Log::info('Custom Food Mail error: ' . $e?->getMessage());
        }

        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
