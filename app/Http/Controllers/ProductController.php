<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Brand;
=======
use App\Models\Brands;
>>>>>>> 55d43e69aab00fe0d6f8bca32191066f5fe15706
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {

        
        $products = Product::all();
        return view('product.index',compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
<<<<<<< HEAD
        $brands = Brand::all();
        return view('product.create',compact('categories', 'brands'));
=======
        $brands = Brands::all();
        return view('product.create',compact('categories','brands'));
>>>>>>> 55d43e69aab00fe0d6f8bca32191066f5fe15706
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
<<<<<<< HEAD
            'category_id' => 'required',
            'brand_id' => 'required',
=======
            'sub_category_id' => 'required',
            
            'brand_id' =>'required',
>>>>>>> 55d43e69aab00fe0d6f8bca32191066f5fe15706
            'name' => 'required',
            'price' => 'numeric|required',
            'stock' => 'numeric|required',
            'description' => 'required',
            'photopath' => 'required'
        ]);

        if($request->hasFile('photopath')){
            $image = $request->file('photopath');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/products');
            $image->move($destinationPath,$name);
            $data['photopath'] = $name;
        }

        Product::create($data);
        return redirect(route('product.index'))->with('success','Product Created Successfully');
    }
     /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $categories = Category::all(); // Assuming you have a Category model to fetch all categories
        $products = Product::paginate(12); // Assuming you have a Product model to fetch products (adjust pagination as needed)
    
        return view('products', compact('products', 'categories'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $product = Product::find($id);
        $categories = Category::all();
        return view('product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, $id)
    {
        
        $product = Product::find($id);
        $data = $request->validate([
            'sub_category_id' => 'required',
            'name' => 'required',
            'price' => 'numeric|required',
            'stock' => 'numeric|required',
            'description' => 'required',
            'photopath' => 'nullable'
        ]);

        if($request->hasFile('photopath')){
            $image = $request->file('photopath');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/products');
            $image->move($destinationPath,$name);
            File::delete(public_path('images/products/'.$product->photopath));
            $data['photopath'] = $name;
        }

        $product->update($data);
        return redirect(route('product.index'))->with('success','Product Updated Successfully');
    }

    /**
     *  * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $product = Product::find($request->dataid);

        File::delete(public_path('images/products/'.$product->photopath));
        // dd($product);
        File::delete($product->photopath);
        $product->delete();
        return redirect(route('product.index'))->with('success','Product deleted succesfully');
    }

   
    }


