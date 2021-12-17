<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
// use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products=Product::latest()->paginate(5);
       // dd($customers);
       return view('crm.Product.product',compact('products'))->with('1',(request()->input('page',1)-1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('crm.Product.create',['category'=>$category,'subcategory'=>$subcategory]);

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
         $cat = $request->category_id;
         $subcat = $request->subcategory_id;
       $request->validate([
              'name'=>'required',
              'price'=>'required|integer|min:0',
              'productImage'=>'required|mimes:png,jpg,jpeg|max:5048',
              'slug' => 'required'
       ]);

       $newImageName = time() . '-' .$request->name . '.' .
       $request->productImage->extension();
       $test = $request->productImage->move(public_path('images'),$newImageName);



       $product=Product::create([


          'name' =>$request->input('name'),
          'title' =>$request->input('title'),
          'price' =>$request->input('price'),
          'slug' =>$request->input('slug'),
          'description'=>$request->input('description'),
           'image'=>$newImageName,
          'category_id'=>$cat,
          'subcategory_id'=>$subcat,



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
         if($request->hasFile('image'))
         {
            $destination = 'images/test.png';
            if(File::exists($destination))
            {
                File::delete($destination);
            }
           $file = $request->file('profileimage');
           $extension = $file->getClientOriginalExtension();
           $filename = time(). '.'.$extension;
           $file->move('images',$filename);

         }
       //save $product->update()
       //redirect
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
