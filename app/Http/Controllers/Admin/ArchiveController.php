<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\User;

class ArchiveController extends Controller
{
   public function products()
   {
       $products = Product::where('status','0')->latest()->get();

        return view('admin.archives.products',compact('products'));
   }

   public function customers()
   {
       $users = User::where('role','customer')
                    ->where('status','0')
                    ->latest()
                    ->get();
        return view('admin.archives.customer',compact('users'));        
   }


   public function employees()
   {
       $users = User::where('role','admin')
                    ->where('status','0')
                    ->latest()
                    ->get();
        return view('admin.archives.employee',compact('users'));        
   }
}
