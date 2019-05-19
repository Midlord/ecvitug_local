<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\Estimate;
use App\Models\Product;
use App\Models\Order;
use App\Mail\ContactMail;
use Auth;
use Image;
use Validator;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(
            'index',
            'about',
            'estimates',
            'galleries',
            'contact',
            'projects',
            'estimateStore',
            'contact_store'
        );
    }


    public function index()
    {
        return view('customer.index');
    }


    public function about()
    {
        return view('customer.about');
    }


    public function show_equipment($slug)
    {
        $product = product::find($slug);

        return view('customer.equipments.show',compact('product'));
    }

    public function galleries()
    {
        return view('customer.gallery');
    }

    public function contact()
    {
        return view('customer.contact');
    }

    public function estimates()
    {
        return view('customer.estimates');
    }

    public function projects()
    {
        $products = Product::where('type','rental')->get();
        return view('customer.projects',compact('products'));
    }

    public function profile()
    {
        $user = Auth::user();

        $orders = Order::where('user_id',$user->id)->get();

        return view ('customer.profile',compact('user','orders'));
    }


    public function estimateStore(Request $request)
    {

        
        $request->validate = ([
            'locationProperty'    => 'required|string|max:255',
            'length'     => 'required|string|max:255',
            'lotArea'       => 'required|string|max:255',
            'width'         => 'required|string|max:255',
            'floorArea'    => 'required',
            'classfication'    => 'required',
            'numberOfFloors'    => 'required',
            'numberOfRooms'    => 'required',
            'preferDesign'    => 'required',
            'preferedFinished'    => 'required',
            'numberOfToiletAndBath'    => 'required',
            'otherSpecification'    => 'required',
            'carGarage'    => 'required',
            'paymentDate'    => 'required',
            'approximateBudget'    => 'required',
            'mobilePhone'          => 'required'

        ]);

            if(isset($request->documents))
            {
                $photo = $request->documents;
                $document = time() . '.' . $photo->getClientOriginalExtension();
                Image::make($photo)->save('storage/uploads/estimates/' . $document );
                
            }else{
                $document = null;
            }

        $estimate = Estimate::create([
            'user_id' => Auth::user()->id,
            'mobilePhone' => $request->mobilePhone,
            'locationProperty' => $request->locationProperty,
            'length'     => $request->length." ".$request->lengthSelect,
            'lotArea'       => $request->lotArea,
            'width'         => $request->width." ".$request->widthSelect,
            'floorArea'    => $request->floorArea,
            'classfication'    => $request->classfication,
            'numberOfFloors'    => $request->numberOfFloors,
            'numberOfRooms'    => $request->numberOfRooms,
            'preferDesign'    => $request->preferDesign,
            'preferedFinished'    => $request->preferedFinished,
            'numberOfToiletAndBath'    =>$request->numberOfToiletAndBath,
            'otherSpecification'    => $request->otherSpecification,
            'carGarage'    => $request->carGarage,
            'paymentDate'    => $request->paymentDate,
            'approximateBudget'    => $request->approximateBudget,
            'type' => $request->type,
            'message' => $request->message,
            'documents' => $document
        ]);

        toastr()->success('Estimate has been saved successfully!');

        return redirect()->back();

    }



    public function contact_store(Request $request) // Used for contact us email
    {
        $rule = [
		    'contact_email' => 'required|email',
		    'g-recaptcha-response' => 'required|captcha',
		    'contact_msg' => 'required'
		];

    	if($request->validate($rule)) {
            Mail::to('ecvconstructions@gmail.com')->send(new ContactMail($request));

            // return response('success', 200);
            toastr()->success('Thanks for contacting us! We will be in touch with you shortly.');
            return redirect('/contact');
    	} else {
            toastr()->warning('Something went wrong when sending your email.!');
            
            return redirect('/contact');
        }
    }



}
