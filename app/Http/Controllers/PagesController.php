<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

<<<<<<< HEAD
    //controller for route /category/{id}
    public function category($id){
        $category = Category::find($id);
        $products = $category->products()->paginate(2);
        return view('productCategory', compact('category', 'products'));
    }

    public function products()
=======
    public function products(Request $request)
>>>>>>> 55d43e69aab00fe0d6f8bca32191066f5fe15706
    {
        // dd($request);
        // Retrieve all products
        $products = Product::where('sub_category_id', $request->sub_category_id)->paginate(5);

        return view('products', compact('products'));
    }

    public function categories()
    {
        // Retrieve all products
        $categories = Category::paginate(5);

        return view('categories', compact('categories'));
    }

    public function logout()
    {
        Auth::guard('web')->logout();

        session()->invalidate();

        session()->regenerateToken();

        return redirect('/');
    }
}
