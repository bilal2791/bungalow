<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Designation;
use Illuminate\Http\Request;

class CustomersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $customers=Customer::latest()->paginate(5);
        // dd($customers);
        return view('customer',compact('customers'))->with('1',(request()->input('page',1)-1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $designations = Designation::all();
        return view("create")->with('designations',$designations);
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
       $storedata= $request->all();
       Customer::create($storedata);
       return redirect("customer")->with("success","Data stored successfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    // public function show(Customer $customer)
    public function show(Request $request, Customer $customer)
    {

        $customer = Customer::find($request->id);
        return view('show')->with(compact('customer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */

    // public function edit(Customer $customer)
    // {

    //   return view('edit',compact('customer'));
    // }


    public function edit($id){
        $customers = Customer::find($id);

        return view('edit')->with(compact('customers'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {

        $customer = Customer::find($request->id);
        $customer->fullname = $request->input('fullname');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->country = $request->input('country');
        $customer->update();
        return redirect()->back()->with('status','Customer Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $customers = Customer::find($id);
         $customers->delete();
         return redirect("customer")->with("success","Data Deleted successfully");
    }


    public function getDesignations()
    {
    $designation = Designation::all();
    // dd($designation);
    // return view('customer.create')->with(compact('designation'));
    }
}
