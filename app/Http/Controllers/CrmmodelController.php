<?php

namespace App\Http\Controllers;

use App\Models\crmmodel;
use Illuminate\Http\Request;

class CrmmodelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crm.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\crmmodel  $crmmodel
     * @return \Illuminate\Http\Response
     */
    public function show(crmmodel $crmmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\crmmodel  $crmmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(crmmodel $crmmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\crmmodel  $crmmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, crmmodel $crmmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\crmmodel  $crmmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(crmmodel $crmmodel)
    {
        //
    }
}
