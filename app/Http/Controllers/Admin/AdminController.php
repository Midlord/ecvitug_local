<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\User;
use App\Models\Estimate;
use App\Models\Order;
use Carbon\Carbon;
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


    public function reports()
    {
        $orders = Order::where('status',1)->get();

        $dateFrom = date('F d, Y');
        $dateTo = date('F d, Y');

        $sum =  Order::where('status',1)->sum('totalPrice');


        return view('admin.reports.index',compact('orders','sum','dateFrom','dateTo'));
    }

    public function report_filter()
    {
        $dateFrom = $_GET['dateFrom'];
        $dateTo = $_GET['dateTo'];
        
        if($_GET['dateFrom'] && $_GET['dateTo']){
            $orders =  Order::where('status',1)->latest()->whereBetween('created_at', [Carbon::parse($dateFrom)->startOfDay(), Carbon::parse($dateTo)->endOfDay()])->get();
            $sum =  Order::where('status',1)->whereBetween('orders.created_at', [Carbon::parse($dateFrom)->startOfDay(), Carbon::parse($dateTo)->endOfDay()])->sum('totalPrice');
        }else{
            $orders =  Order::where('status',1)->latest()->get();
            $sum =  Order::where('status',1)->sum('totalPrice');
        }
        return view('admin.reports.index',compact('orders','sum','dateFrom','dateTo'));
    }
}
