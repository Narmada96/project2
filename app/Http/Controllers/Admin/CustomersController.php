<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use App\Project;

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
        $arr['customers'] = Customer::all();
        return view('admin.customers.index')->with($arr);
    }


     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['projects'] = Project::all();

        //returns a form to add a new project
        return view ('admin\customers\create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Customer $customer)
    {
        $customer->customer_id = $request->customer_id;
        $customer->company_name = $request->company_name;
        $customer->name_of_contact_person = $request->name_of_contact_person;
        $customer->nic_of_contact_person = $request->nic_of_contact_person;
        $customer->contact_number = $request->contact_number;
        $customer->designation = $request->designation;
        $customer->company_address = $request->company_address;
        $customer->email = $request->email;
        $customer->project_id = $request->project_id;
        $customer->project_name = $request->project_name;
        $customer->project_location = $request->project_location;
        $customer->project_start_date = $request->project_start_date;
        $customer->estimated_project_end_date = $request->estimated_project_end_date;
        $customer->warranty_id = $request->warranty_id;
        $customer->warranty_details = $request->warranty_details;
       
        $customer->save();
        return redirect()->route('admin.labor.index');
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
