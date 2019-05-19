<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use Carbon\Carbon;
use Image;
use Storage;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobilePhone' => ['required','min:11'],
            'g-recaptcha-response' => ['required','captcha'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        if(isset($data['photo']))
        {
            Validator::make($data, [
                'photo' => 'bail|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            $photo = $data['photo'];
    		$filename = time() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save('storage/uploads/avatars/' . $filename );
            
        }else{
    		$filename = null;
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobilePhone' => $data['mobilePhone'],
            'role' => 'customer',
            'photo' => $filename,
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        toastr()->success('You have successfuly registered. Please login your account.');

        return redirect($this->redirectPath());
    }

}
