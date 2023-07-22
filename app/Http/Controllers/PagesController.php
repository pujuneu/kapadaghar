<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller

{
    public function home()
    {
        $products = Product::paginate(2);
        $categories = Category::orderBy('priority')->get();
        return view('welcome', compact('products', 'categories'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function viewproduct(Product $product)
    {
        //$product = Product::find($id);
        $categories = Category::orderBy('priority')->get();
        return view('viewproduct', compact('product', 'categories'));
    }

    //controller for route /category/{id}
    public function category($id){
        $category = Category::find($id);
        $products = $category->products()->paginate(2);
        return view('productCategory', compact('category', 'products'));
    }

    public function products()
    {
        // Retrieve all products
        $products = Product::paginate(5);
        return view('products', compact('products'));
    }
    




}
