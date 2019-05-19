<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderProduct;
use Session;
use Cart;
use DB;
class CartController extends Controller
{

    public function index()
    {

        $subtotal = \Cart::instance('default')->subtotal();
        $tax = \Cart::instance('default')->tax();

        $total = \Cart::total();

        $items = \Cart::content();

        return view('customer.cart',compact('items','total','tax','subtotal'));
    }

    public function store(Request $request)
    {
        $duplicates = \Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if (!$duplicates->isEmpty()) {
            toastr()->warning($request->name.' is already in your cart!');
            return redirect()->back();
        }

        \Cart::add($request->id, $request->name, $request->quantity, $request->price)->associate(Product::class);

        toastr()->success($request->name.' was added to your cart!');

        return redirect()->route('cart.index');
    }

    public function update(Request $request, $id)
    {
        // Validation on max quantity
        $validator = \Validator::make($request->all(), [
            'quantity' => 'required|numeric'
        ]);

         if ($validator->fails()) {
            session()->flash('error_message', 'Quantity required.');
            return response()->json(['success' => false]);
         }

        \Cart::update($id, $request->quantity);

        toastr()->success('Item successfully updated!');
        return response()->json(['success' => true]);

    }

    public function destroy($id)
    {
        \Cart::remove($id);
        toastr()->success('Item successfully deleted!');
        return redirect()->route('cart.index');
    }

    public function emptyCart()
    {
        \Cart::destroy();
        toastr()->success('Item successfully cleared!');
        return redirect()->route('cart.index');
    }

    public function checkout(Request $request)
    {

        DB::transaction(function() use($request) {

            $items = \Cart::content();

            $subtotal = \Cart::instance('default')->subtotal();

            $totalqty = \Cart::count();

            // Save to Orders
            $order = Order::create([
                'user_id' => auth()->user()->id,
                'totalPrice' => $subtotal,
                'quantity' => $totalqty,
                'status' => 0
            ]);
            // save to OrderProducts
            foreach ($items as $item) {
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $item->model->id,
                    'quantity' => $item->qty,
                ]);
            }

            // remove cart
            \Cart::destroy();

        });

        toastr()->success('Order successfully Saved!');

        return redirect()->route('customer.profile');

    }

}
