@extends('layouts.admin.app')

@section('css')
    <style>
        label{
            font-weight: bold;
        }
    </style>
@stop

@section('content')
<div class="container">
    <div class="section-top-border">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="container">
                                <h3 class="mt-3">{{$estimate->user->name}}  |   {{ucfirst($estimate->type)}} Estiamtes</h3>

                                <div class="form-row mt-3">
                                    <div class="col-lg-6 col-md-6 mt-10">
                                        <label for="email">Email Address</label>
                                        <p>{{$estimate->user->email}}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-10">
                                        <label for="contact">Contact Number</label>
                                        <p>{{$estimate->user->mobilePhone}}</p>
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
                                        <p>{{$estimate->locationProperty}}</p>
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="length">Length</label>
                                        <p>{{$estimate->length}}</p>
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="lotArea">Lot Area</label>
                                       <p>{{$estimate->lotArea}}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-10">
                                        <label for="width">Width</label>
                                        <p>{{$estimate->width}}</p>
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
                                        <p>{{$estimate->floorArea}}</p>
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="classfication">Classification</label>
                                        <p>{{$estimate->lassfication}}</p>
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="numberOfFloors">Number of Floor Levels</label>
                                        {{$estimate->numberOfFloors}}
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="numberOfFloors">Number of Rooms</label>
                                        <p>{{$estimate->numberOfRooms}}</p>
                                    </div>

                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="preferDesign">Preferred Design</label>
                                        <p>{{$estimate->preferDesign}}</p>
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="preferedFinished">Preferred Finish</label>
                                        <p>{{$estimate->preferedFinished}}</p>
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="preferedFinished">Preferred Finish</label>
                                        <p>{{$estimate->numberOfToiletAndBath}}</p>
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="otherSpecification">Other Specifications</label>
                                        <p>{{$estimate->otherSpecification}}</p>
                                    </div>
                                    <div class="col-l g-6 col-md-6 mt-10">
                                        <label for="carGarage">Car Garage</label>
                                        <p>{{$estimate->carGarage}}</p>
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
                                            <p>{{$estimate->paymentDate}}</p>
                                        </div>
                                        <div class="col-lg-12 col-md-12 mt-10">
                                            <label for="approximateBudget">Approximate Budget:</label>
                                            <p>{{$estimate->approximateBudget}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-10">
                                        <div class="col-lg-12 col-md-12 mt-10">
                                            <label for="message">Message</label>
                                            <p>{{$estimate->message}}</p>
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
                                    <div class="col-lg-12 col-md-12 mt-10 text-center">
                                        <h4 class="mb-5">Estimate Image</h4>
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img class="img-fluid" style="height:500px; display: block;margin: 0 auto;"  src="{{asset('storage/uploads/estimates/'.$estimate->documents)}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@stop
