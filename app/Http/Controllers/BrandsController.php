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
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'priority' => 'required|numeric'
        ]);
       Brands::create($data);
        return redirect(route('brands.index'))->with ('success','Brands created successfully');
    }
    public function edit($id)
    {
        $brands = Brands::find($id);
        return view('brands.edit',compact('brands'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name'=> 'required',
            'priority'=> 'required|numeric'
        
        ]);

       
        $brands=Brands::find($id);
        $brands->update($data);
        return redirect(route('brands.index'))->with('success','Brands updated successfully');
        

    }
    public function destroy(Request $request)
    {
     $brands = Brands::find($request->dataid);
     $brands->delete();
     return redirect(route('brands.index'))->with('success','Brands deleted succesfully');
    }
}
