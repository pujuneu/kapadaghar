<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{

    public function index()
    {
        $brands = Brand::all();

        return view('brands.index', compact('brands'));
    }
    public function create()
    {
        return view('brands.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'priority' => 'required|numeric'
        ]);
<<<<<<< HEAD
        Brand::create($data);
        return redirect(route('brands.index'))->with('success', 'Brands created successfully');
    }
    public function edit($id)

    {
        $brands = Brand::find($id);
        return view('brands.edit', compact('brands'));
    }

=======
       Brands::create($data);
        return redirect(route('brands.index'))->with ('success','Brands created successfully');
    }
    public function edit($id)
    {
        $brands = Brands::find($id);
        return view('brands.edit',compact('brands'));
    }
>>>>>>> 55d43e69aab00fe0d6f8bca32191066f5fe15706
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name'=> 'required',
            'priority'=> 'required|numeric'
        
        ]);

       
<<<<<<< HEAD
        $brands=Brand::find($id);
=======
        $brands=Brands::find($id);
>>>>>>> 55d43e69aab00fe0d6f8bca32191066f5fe15706
        $brands->update($data);
        return redirect(route('brands.index'))->with('success','Brands updated successfully');
        

    }
    public function destroy(Request $request)
    {
<<<<<<< HEAD
     $brands = Brand::find($request->dataid);
     $brands->delete();
     return redirect(route('brands.index'))->with('success','Brands deleted succesfully');
    }
    }
 
 

=======
     $brands = Brands::find($request->dataid);
     $brands->delete();
     return redirect(route('brands.index'))->with('success','Brands deleted succesfully');
    }
}
>>>>>>> 55d43e69aab00fe0d6f8bca32191066f5fe15706
