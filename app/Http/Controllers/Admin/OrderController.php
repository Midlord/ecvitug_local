<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::latest()->get();

        return view('admin.orders.index',compact('orders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orderProducts = OrderProduct::where('order_id',$id)->get();
        $order = Order::findOrFail($id);
        
        return view('admin.orders.show',compact('order','orderProducts'));
    }

    public function approveOrder(Request $request, $id)
    {
       
        $order = Order::find($id);

        $order->update([
            'status' => 1
        ]);

        $orderProducts = OrderProduct::where('order_id',$order->id)->get();

        foreach ($orderProducts as $orderProduct) {
            # code...
            $product = Product::where('id',$orderProduct->id)->first();

            $product->update([
                'quantity' => $product->quantity - $orderProduct->quantity
            ]);
            
        }

        Mail::to($request->customerEmail)
            ->from('ecvconstructions@gmail.com')
            ->send(new OrderMail($request));
            
        toastr()->success('Order successfully Approved!');

        return redirect()->back();
    }
}
