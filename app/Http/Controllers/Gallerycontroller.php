<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Gallerycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        
        return view('gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(('gallery.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'photopath' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        if($request->hasFile('photopath')){
            $images = $request->file('photopath');
            $name = time().'.'.$images->getClientOriginalExtension();
            $destinationPath = public_path('/images/gallery');
            $images->move($destinationPath,$name);
            $data['photopath'] = $name;
        }

        Gallery::create($data);
        return redirect(route('gallery.index'))->with('success','Gallery created successfully');
        
    }

    public function show(Gallery $gallery)
    {

    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.edit',compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title'=> 'required',
            'photopath'=> 'nullable|image|mimes:jpeg.png.jpg'
        ]);

        $gallery=Gallery::find($id);
        if($request->hasFile('photopath')){
            $image = $request->file('photopath');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/gallery');
            $image->move($destinationPath,$name);
            File::delete(public_path('/images/gallery'));
            $data['photopath'] = $name;
        }
        $gallery->update($data);
        return redirect(route('gallery.index'))->with('success','Gallery updated successfully');
        

    }
    public function destroy(Request $request)
    {
     $gallery = Gallery::find($request->dataid);
     $gallery->delete();
     File::delete(public_path('/images/gallery/'.$gallery->photopath));
     return redirect(route('category.index'))->with('success','Category deleted succesfully');
    }
    }
 
 
