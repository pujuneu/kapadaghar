<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{

    public function index()
    {
        $brands = Brands::all();
        
        return view('brands.index',compact('brands'));
    }
    public function create()
    {
        return view('brands.create');
    }
}
