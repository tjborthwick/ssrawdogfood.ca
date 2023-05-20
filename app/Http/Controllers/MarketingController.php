<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class MarketingController extends Controller
{
    protected $categories;

    public function __construct()
    {
        $json = file_get_contents(__DIR__ . '/../../../database/json/categories.json');

        $this->categories = Collect(json_decode($json));
    }

    public function home()
    {
        return Inertia::render('HomePage', [
            'categories' => $this->categories,
        ]);
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
