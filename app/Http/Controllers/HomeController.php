<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::paginate(6);
        $products = Product::paginate(12);

        return view('pages.home', compact('categories', 'products'));
    }

    public function kontak()
    {
        return view('pages.kontak');
    }

    public function categories()
    {
        return view('pages.categories');
    }
}
