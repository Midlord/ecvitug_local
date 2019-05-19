<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Hash;
use Carbon\Carbon;
use App\Models\History;
use Image;
class CustomerController extends Controller
{


    public function index()
    {
        $users = User::where('role','customer')
                     ->where('status','1')
                     ->latest()
                     ->get();

        return view('admin.customers.index',compact('users'));
    }

    public function employees()
    {
        $users = User::where('role','admin')
                     ->where('status','1')
                     ->latest()
                     ->get();

        return view('admin.customers.employees',compact('users'));
    }


    public function create()
    {
        $roles = ['admin', 'customer']; 

        return view('admin.customers.create',compact('roles'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'         => 'nullable|string|email|unique:users|max:255',
            'mobilePhone'  => 'required|unique:users|max:255',
            'password'      => 'required|string|min:6|max:255',
            'photo'         => 'bail|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'role'          => 'required'
        ]);

        if(isset($request->photo))
        {
            $photo = $request->photo;
            $document = time() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save('storage/uploads/avatars/' . $document );
            
        }else{
            $document = null;
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobilePhone' => $request->mobilePhone,
            'role' => $request->role == '' ? 'user' : $request->role,
            'password' => Hash::make($request->password),
            'photo' => $document
        ]);

        toastr()->success($request->name.' has been saved successfully!');



        if($user->role = 'customer'){

            History::create([
                'user_id' => auth()->user()->id,
                'content' => auth()->user()->name. ' create customer info.'
            ]);

            return redirect()->route('admin.customers.index');
        }else{

            History::create([
                'user_id' => auth()->user()->id,
                'content' => auth()->user()->name. ' create customer info.'
            ]);

            return redirect()->route('admin.customers.employees');
        }
    }


    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.customers.show',compact('user'));
    }


    public function edit($id)
    {      
        $roles = ['admin', 'customer']; 
        $user = User::findOrFail($id);
        return view('admin.customers.edit',compact('user','roles'));
    }


    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);

        $request->validate([
            'name'     => 'required|string|max:255',
            'email'        => 'required|email|unique:users,email,'.$user->id.',id|max:255',
            'mobilePhone' => 'nullable|string|unique:users,mobilePhone,'.$user->id.',id|max:255',
            'photo'         => 'bail|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'role'          => 'required',
        ]);

        if(isset($request->photo))
        {
            $photo = $request->photo;
            $document = time() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save('storage/uploads/avatars/' . $document );
            
        }else{
            $document = $user->photo;
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'mobilePhone' => $request->mobilePhone,
            'role' => $request->role == '' ? 'user' : $request->role,
            'password' => $request->password == '' ? $user->password : Hash::make($request->password),
            'photo' => $document

        ]);

        toastr()->success($request->name.' has been updated successfully!');
        
        if($user->role = 'customer'){

            History::create([
                'user_id' => auth()->user()->id,
                'content' => auth()->user()->name. ' update customer info.'
            ]);
            return redirect()->route('admin.customers.index');
        }else{
            History::create([
                'user_id' => auth()->user()->id,
                'content' => auth()->user()->name. ' update employee info.'
            ]);
            return redirect()->route('admin.customers.employees');
        }
    }


    public function archive(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->status = $request->status;
        $user->save();

        History::create([
            'user_id' => auth()->user()->id,
            'content' => auth()->user()->name. $request->status = 0 ? ' activated customer' : ' deleted customer '
        ]);

        toastr()->success($user->name.' has been '.$request->status = 0 ? 'activated' : 'deleted');

        return redirect()->back();
    }

}
