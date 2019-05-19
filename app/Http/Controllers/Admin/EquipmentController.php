<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Str;
use Image;
use App\Models\History;
class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('type','rental')->latest()->get();
        return view('admin.products.index',compact('products'));
    }


    public function create()
    {
        return view('admin.products.create');
    }


    public function store(Request $request)
    {
        $request->validate = ([
            'name'          => 'required|string|unique:products|max:255',
            'slug'          => 'required|string|unique:products|max:255',
            'description'   => 'required',
            'quantity'      => 'required|string|max:255',
            'price'         => 'required|string|max:255',
            'image'         => 'bail|image|mimes:jpg,png,jpeg,gif,svg|max:2048',


        ]);

        if(isset($request->image))
        {
            $photo = $request->image;
            $image = time() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save('storage/uploads/equipments/' . $image );
            
        }else{
            $image = null;
        }

        $product = Product::create([
            'name'          => $request->name,
            'slug'          => Str::slug($request->name, '-'),
            'description'   => $request->description,
            'quantity'      => $request->quantity,
            'price'         => $request->price,
            'type'          => 'rental',
            'image'         => $image
        ]);

        History::create([
            'user_id' => auth()->user()->id,
            'content' => auth()->user()->name.' create rental ' .$product->name
        ]);

        toastr()->success('Product has been saved successfully!');

        return redirect()->route('admin.products.index');
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.show',compact('product'));
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit',compact('product'));
    }

    public function update(Request $request, $id)
    {

        $product = Product::findOrFail($id);

        $request->validate = ([
            'name'          => 'required|string|unique:products,name,'.$product->id.',id|max:255',
            'slug'          => 'required|string|unique:products,slug,'.$product->id.',id|max:255',
            'description'   => 'required',
            'quantity'      => 'required|string|max:255',
            'price'         => 'required|string|max:255',
            'image'         => 'bail|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($request->name != $product->name) {
            $request->validate([
                'name' => 'unique:products,name',
            ]);
        }

        if(isset($request->image))
        {
            $photo = $request->image;
            $image = time() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save('storage/uploads/equipments/' . $image );
            
        }else{
            $image = $product->image;
        }

        $product->update([
            'name'          => $request->name ?? $product->name,
            'slug'          => Str::slug($request->name, '-') ?? Str::slug($product->name, '-'),
            'description'   => $request->description ?? $product->description,
            'quantity'      => $request->quantity ?? $product->quantity,
            'price'         => $request->price ?? $product->price,
            'image'         => $image
        ]);

        History::create([
            'user_id' => auth()->user()->id,
            'content' => auth()->user()->name.' update rental ' .$product->name
        ]);

        toastr()->success('Product has been saved successfully!');

        return redirect()->route('admin.products.index');
    }


    public function destroy($id)
    {
        //
    }

    public function archive(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->status = $request->status;
        $product->save();
        
        History::create([
            'user_id' => auth()->user()->id,
            'content' => auth()->user()->name. $request->status = 0 ? ' activated rental '.$product->name : ' deleted rental '.$product->name
        ]);

        toastr()->success($product->name.' has been '.$request->status = 0 ? 'activated' : 'deleted');

        return redirect()->back();
    }
}
