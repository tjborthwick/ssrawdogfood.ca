<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index()
    {
        return Inertia::render('ProductCatalogue');
    }
}
