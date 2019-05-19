<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\SocialAccount;
use Image;
use Storage;
use File;
use App\User;
use App\Models\History;
use App\Models\Log;
use Carbon\Carbon;
use DB;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    public function logout(Request $request)
    {
        $user = auth()->user()->name;

        History::create([
            'user_id' => auth()->user()->id,
            'content' => auth()->user()->name.' is logout '
        ]);

        $this->guard()->logout();
        $request->session()->invalidate();
        
        return $this->loggedOut($request) ?: redirect(\URL::previous());
    }




    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    public function handleProviderCallback(Request $request, $provider)
    {
        if (!$request->has('code') || $request->has('denied')) {
            return redirect ('/');
        }
        else{
            $user = $this->createOrGetUser(Socialite::driver($provider)->stateless()->user(), $provider);

            // return $provider;
        }

        Auth::login($user);

        session()->flash('alert-message','You have successfuly login!');
        return redirect()->to('/home');
    }

    /**
    * Create or get a user based on provider id.
    *
    * @return Object $user
    */
    private function createOrGetUser($providerUser, $provider)
    {
        $account = User::where('provider', $provider)
                ->where('provider_user_id', $providerUser->id)
                ->first();

        if ($account) {
            //Return account if found
            return $account;
        } else {

            //Check if user with same email address exist
            $user = User::where('email', $providerUser->getEmail())->first();

            //Create user if dont'exist
            if (!$user) {
                $NameArray = explode(' ',$providerUser->getName());
                $First_name = $NameArray[0];
                $Last_name = $NameArray[1];

                $user = User::create([
                    'provider_user_id' => $providerUser->id,
                    'provider' => $provider,
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'role' => 'customer',
                    'photo' => $providerUser->getAvatar(),
                    'status' => 1
                ]);
            }
            return $user;
        }
    }

}
