<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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

    public function showprofile(): View
    {
        $user = auth()->user();

        return view('profile', compact('user'));
    }

    public function products(Request $request)
    {
        // dd($request);
        // Retrieve all products
        $products = Product::where('sub_category_id',$request->sub_category_id)->paginate(5);
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
