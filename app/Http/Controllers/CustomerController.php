<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerModel;
    public function __construct(Customer $customerModel)
    {
        $this->customerModel = $customerModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers =Customer::all();
//        $customers = $this->customerModel->getPostById();
//        dd($customers);
        return view('list',compact('customers'));
        //
    }

    public function showList($id)
    {
        $customers = Customer::findOrFail($id);
        return view('detail',compact('customers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Customer $request)
//    {
//
//
//    }
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->first_name =$request->input('first_name');
        $customer->last_name =$request->input('last_name');
        $customer->email =$request->input('email');
        $customer->birthdate =$request->input('dob');
        $customer->save();
//        dd($customer);
        return redirect()->route('customer.list');
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
        $customer = Customer::findOrFail($id);
//        dd($customer);
        return view('update',compact('customer'));
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
        $customer = Customer::findOrFail($id);
        $customer->first_name = $request->input('first_name');
        $customer->last_name = $request->input('last_name');
        $customer->email = $request->input('email');
        $customer->birthdate = $request->input('dob');
        $customer->save();
        return redirect()->route('customer.list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customer.list');
    }
}
