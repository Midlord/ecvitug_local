<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
       $products = Product::where('type','rental')->get();

       return view('customer.products.index',compact('products'));
    }
  
    public function show($slug)
    {
        $equipment = Product::where('slug',$slug)->first();

        $suggests = Product::where('type','rental')->where('slug','!=',$slug)->get();

        return view('customer.equipments.show',compact('equipment','suggests'));
    }
  
}
