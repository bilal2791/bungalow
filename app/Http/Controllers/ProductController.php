<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $product= Product::all();

       return view('product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
         //Methods we can use on $request
         //guessExtension
         //store()
         //asStore()
         //storePublicly()
         //move()
         // getClientOriginalName()
         //getClientMimeType
         //getMimeType
         //getError


       $request->validate([
              'name'=>'required',
              'price'=>'required|integer|min:0',
              'productImage'=>'required|mimes:png,jpg,jpeg|max:5048'
       ]);

       $newImageName = time() . '-' .$request->name . '.' .
       $request->productImage->extension();
       $test = $request->productImage->move(public_path('images'),$newImageName);



       $product=Product::create([

          'name' =>$request->input('name'),
          'title' =>$request->input('title'),
          'price' =>$request->input('price'),
          'description'=>$request->input('description'),
          'image'=>$newImageName


       ]);


       return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}