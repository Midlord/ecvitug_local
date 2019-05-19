@extends('layouts.customer.app')
@section('css')
<style>
.card {
    background-color: #c6e6ff !important;
    border: 1px solid #ffffff !important;
}

.card-body {
    padding: 2.25rem !important;
}

input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input[type="number"] {
    -moz-appearance: textfield;
}

</style>
@endsection
@section('content')
<section class="banner-area relative">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
            <h1 class="text-white">Free Estimates</h1>
            <p>Fowl living for lights our ears bearing to heaven signs</p>
        </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="section-top-border">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <form action="{{route('estimate.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="container">
                                <h3 class="mt-3">Client Information (*Required Fields)</h3>
                                <div class="form-row">
                                    <div class="col-l g-12 col-md-12 mt-10">
                                        <label for="classfication">Estimate Type</label>
                                        <div class="input-group-icon">
                                            <div class="form-select" id="default-select">
                                                <select name="type" required>
                                                    <option value=""> Select Estimate Type</option>
                                                    <option value="minor">Minor</option>
                                                    <option value="major">Major</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-12 col-md-12 mt-10">
                                        <label for="fullName">Full Name</label>
                                        <input type="text" name="fullName" id="fullName"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" class="single-input form-control" value="{{Auth::user()->name}}" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-6 col-md-6 mt-10">
                                        <label for="email">Email Address</label>
                                        <input type="email" name="EMAIL" id="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" class="single-input form-control" value="{{Auth::user()->email}}">
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-10">
                                        <label for="contact">Contact Number</label>
                                        <input type="number"  class="form-control" name="mobilePhone" value="{{Auth::user()->mobilePhone}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="container">
                                <h3 class="mt-3">Property Information:</h3>
                                <div class="form-row">
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="locationProperty">Location Property</label>
                                        <input type="text" name="locationProperty" value="{{old('locationProperty')}}" id="locationProperty" placeholder="Location Property" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Location Property'" required="" class="single-input form-control" >
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="length">Length</label>
                                        <div class="form-row">
                                            <div class="col-md-3">
                                                <input type="text" name="length" id="length" value="{{old('length')}}" placeholder="Length" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Length'" required="" class="single-input form-control" >
                                            </div>
                                            <div class="col-md-3">
                                                <select name="lengthSelect" id="" class="form-control">
                                                    <option value="Meter">Meter</option>
                                                    <option value="Centimeter">Centimeter</option>
                                                    <option value="Inches">Inches</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="lotArea">Lot Area</label>
                                        <input type="text" name="lotArea" id="lotArea" value="{{old('lotArea')}}" placeholder="Lot Area" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Lot Area'" required="" class="single-input form-control" >
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-10">
                                        <label for="width">Width</label>
                                        <div class="form-row">
                                            <div class="col-md-3">
                                                <input type="text" name="width" id="width" value="{{old('width')}}" placeholder="Width" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Width'" required="" class="single-input form-control" >
                                            </div>
                                            <div class="col-md-3">
                                                <select name="widthSelect" id="" class="form-control">
                                                    <option value="Meter">Meter</option>
                                                    <option value="Centimeter">Centimeter</option>
                                                    <option value="Inches">Inches</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="container">
                                <h3 class="mt-3">Desired Specification:</h3>
                                <div class="form-row">
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="floorArea">Floor Area</label>
                                        <input type="text" name="floorArea" id="floorArea" value="{{old('floorArea')}}" placeholder="Floor Area" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Floor Area'" required="" class="single-input form-control" >
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="classfication">Classification</label>
                                        <div class="input-group-icon">
                                            <div class="form-select" id="default-select">
                                                <select name="classfication" value="{{old('classfication')}}">
                                                    <option value=""> Classification</option>
                                                    <option value="Residential">Residential</option>
                                                    <option value="Commercial">Commercial</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="numberOfFloors">Number of Floor Levels</label>
                                        <div class="input-group-icon">
                                            <div class="form-select" id="default-select">
                                                <select name="numberOfFloors" value="{{old('numberOfFloors')}}">
                                                    <option value=""> Number of Floor Levels</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3 or more">3 or more</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="preferDesign">Preferred Design</label>
                                        <input type="text" name="preferDesign" id="preferDesign" value="{{old('preferDesign')}}" placeholder="Please specify" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Please specify'" required="" class="single-input form-control" >
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="numberOfFloors">Number of Rooms</label>
                                        <div class="input-group-icon">
                                            <div class="form-select" id="default-select">
                                                <select name="numberOfRooms" value="{{old('numberOfRooms')}}" >
                                                    <option value=""> Number of Rooms</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5 or more">5 or more</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="preferedFinished">Preferred Finish</label>
                                        <div class="input-group-icon">
                                            <div class="form-select" id="default-select">
                                                <select name="preferedFinished" value="{{old('preferedFinished')}}">
                                                    <option value=""> Prefer Design</option>
                                                    <option value="1 ">Basic</option>
                                                    <option value="1 ">Standard</option>
                                                    <option value="1 ">Semi Elegant</option>
                                                    <option value="1 ">Elegant</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="preferedFinished">Number of Toilet and Bath</label>
                                        <div class="input-group-icon">
                                            <div class="form-select" id="default-select">
                                                <select name="numberOfToiletAndBath" value="{{old('numberOfToiletAndBath')}}" >
                                                    <option value="">Number of Toilet and Bath</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5 or more">5 or more</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="otherSpecification">Other Specifications</label>
                                        <div class="input-group-icon">
                                            <div class="form-select" id="default-select">
                                                <select name="otherSpecification" value="{{old('otherSpecification')}}" >
                                                    <option value="">Other Specifications:</option>
                                                    <option value="Gate and Fence">Gate and Fence</option>
                                                    <option value="Maid's Room">Maids Room</option>
                                                    <option value="Guest Room">Guest Room</option>
                                                    <option value="Entertainment Room">Entertainment Room</option>
                                                    <option value="Family Room">Family Room</option>
                                                    <option value="Terrace/Balcony/Veranda">Terrace/Balcony/Veranda</option>
                                                    <option value="Lanai">Lanai</option><option value="Den">Den</option>
                                                    <option value="Pool">Pool</option><option value="Jakuzi">Jakuzi</option>
                                                    <option value="Bath Tub">Bath Tub</option>
                                                    <option value="Shower Enclosure">Shower Enclosure</option>
                                                    <option value="Attic">Attic</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="carGarage">Car Garage</label>
                                        <input type="text" name="carGarage" id="carGarage" value="{{old('carGarage')}}" placeholder="Please specify" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Please specify'" required="" class="single-input form-control" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="container">
                                <h3 class="mt-3">Payment and Date Construction:</h3>
                                <div class="form-row">
                                    <div class="col-lg-6 col-md-6 mt-10">
                                        <div class="col-lg-12 col-md-12 mt-10">
                                            <label for="paymentDate">Date:</label>
                                            <input type="date" name="paymentDate" id="paymentDate" required="" class="single-input form-control" >
                                        </div>
                                        <div class="col-lg-12 col-md-12 mt-10">
                                            <label for="approximateBudget">Approximate Budget:</label>
                                            <input type="text" name="approximateBudget" id="approximateBudget" placeholder="Approximate Budget" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Approximate Budget'" required=""  class="single-input form-control" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-10">
                                        <div class="col-lg-12 col-md-12 mt-10">
                                            <label for="message">Message</label>
                                            <textarea class="single-textarea" name="message"  placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'"
                                            required>{{old('message')}}</textarea>       
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="container">
                                <div class="form-row">
                                    <div class="col-lg-6 col-md-6 mt-10 text-center">
                                        <h4>Attach File:</h4>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-10">
                                        <input type="file" name="documents" class="form-control" id="" style="padding: 4px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="form-row">
                            {{--  <div class="col-lg-12 col-md-12 mt-10">
                               <div class="float-right">
                                    {!! NoCaptcha::display() !!}
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                               </div>

                            </div>  --}}
                            <div class="col-lg-12 col-md-12 mt-10">
                                <button class="btn btn-primary float-right" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection