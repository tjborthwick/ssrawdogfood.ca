<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    protected $products;

    protected $categories;

    public function __construct()
    {
        $json = file_get_contents(__DIR__ . '/../../../database/json/products.json');

        $this->products = Collect(json_decode($json));

        $json = file_get_contents(__DIR__ . '/../../../database/json/categories.json');

        $this->categories = Collect(json_decode($json));
    }

    public function index()
    {
        return Inertia::render('Products/Index', [
            'categories' => $this->categories,
        ]);
    }

    public function pureProteins()
    {
        return Inertia::render('Products/PureProteins', [
            'products' => $this->products->where('category', 'Pure Proteins'),
        ]);
    }

    public function gourmetMeals()
    {
        return Inertia::render('Products/GourmetMeals', [
            'products' => $this->products->where('category', 'Gourmet Meals'),
        ]);
    }

    public function dogTreats()
    {
        return Inertia::render('Products/DogTreats', [
            'products' => $this->products->where('category', 'Dog Treats'),
        ]);
    }

    public function customFood()
    {
        return Inertia::render('Products/CustomFood');
    }

    public function view(Request $request, $slug)
    {
        $product = $this->products->firstWhere('slug', $slug);
        $category = $this->categories->firstWhere('title', $product->category);

        $breadcrumbs = [
            ['title' => 'Products', 'url' => route('catalogue.index')],
            ['title' => $product->category, 'url' => route($category->route) ],
            ['title' => $product->title, 'url' => null],
        ];

        $crossSells = $this->products->whereIn('slug', $product?->crossSells ?? []);

        return Inertia::render('Products/View', [
            'product' => $product,
            'breadcrumbs' => $breadcrumbs,
            'crossSells' => $crossSells,
        ]);
    }
}
