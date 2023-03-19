<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    public function home()
    {
        return Inertia::render('HomePage');
    }

    public function benefits()
    {
        return Inertia::render('RawBenefits');
    }

    public function feeding()
    {
        return Inertia::render('TransitioningFeeding');
    }

    public function faq()
    {
        return Inertia::render('FaqPage');
    }

    public function about()
    {
        return Inertia::render('AboutUs');
    }

    public function contact()
    {
        return Inertia::render('ContactUs');
    }
}
