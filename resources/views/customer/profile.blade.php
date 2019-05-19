@extends('layouts.customer.app')
@section('content')

<section class="portfolio_details_area section-gap">
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="portfolio_details_inner">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left_img">
                                <img class="img-fluid image" style="height:500px; display: block;margin: 0 auto;" src="@if($user->provider){{$user->photo}}@else{{$user->photo ? '/storage/uploads/avatars/'.$user->photo : '/images/dummy-img.jpg'}}@endif" alt="">
                            </div>
                        </div>
                        <div class="offset-md-1 col-md-5">
                            <div class="mt-30">
                                <h4>{{$user->name}}</h4>
                                <ul class="list">
                                    <li class="mt-1"><span class=""><i class="fa fa-envelope" aria-hidden="true"></i> Email</span>: {{$user->email}}</li>
                                    <li class="mt-1"><span class=""><i class="fa fa-phone" aria-hidden="true"></i> Email</span>: {{$user->mobilePhone}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-header">
                <h3>{{$user->name}} Recent Rentals</h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered display text-nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td><a href="#">{{date('F j Y',strtotime($order->created_at))}}</a></td>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->totalPrice}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection