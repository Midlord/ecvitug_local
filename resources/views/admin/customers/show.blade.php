
@extends('layouts.admin.app')
@section('content')
<section class="portfolio_details_area section-gap">
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="portfolio_details_inner">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left_img">
                                <img class="img-fluid" style="height: 500px;" src="{{asset('storage/uploads/avatars/'.$user->photo)}}" alt="">
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
    </div>
</section>
@endsection