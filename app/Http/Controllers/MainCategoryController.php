<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainCategory = MainCategory::all();
        return view('crm.maincategory.index',['mainCategory'=>$mainCategory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crm.maincategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        MainCategory::create($request->all());

        return redirect()->route('main-category.index')
        ->with('success','Main Category  Added  successfully.');

 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mainCategory = MainCategory::find($id);
        return view('crm.maincategory.show',['mainCategory'=>$mainCategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mainCategory = MainCategory::find($id);
        return view('crm.maincategory.edit',['mainCategory'=>$mainCategory]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mainCategory = MainCategory::find($id);
        $mainCategory->update($request->all());
    
        return redirect()->route('main-category.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                $mainCategory = MainCategory::find($id);
                $mainCategory->delete();
                return redirect()->route('main-category.index')->with('success','Main Category Delete successfully');
    }
}
