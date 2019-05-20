<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\User;
use App\Models\Estimate;
use App\Models\Order;
class AdminController extends Controller
{

    public function index()
    {
        $orderSum = Order::sum('totalPrice');

        $customerCount = User::where('role','customer')->where('status',1)->count();

        $employeeCount = User::where('role','employee')->where('status',1)->count();

        $rentalCount = Product::where('status',1)->count();

        $getOrderDate = Order::where('status',1)->groupBy('created_at')->get();


        // return $getOrderDate;
        return view('admin.dashboard',compact('orderSum','customerCount','employeeCount','rentalCount'));
    }


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
