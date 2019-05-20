@extends('layouts.admin.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Order of {{ucfirst($order->user->name)}}</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered display text-nowrap" cellspacing="0" width="100%" data-toggle="dataTable" data-form="deleteForm">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Total Quantity</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orderProducts as $orderProduct)
                    <tr>
                        <td><img src="{{asset('storage/uploads/equipments/'.$orderProduct->product->image)}}" class="img-fluid image" height="100" width="100" alt=""></td>
                        <td>{{$orderProduct->product->name}}</td>
                        <td>{{$orderProduct->quantity}}</td>
                        <td>P{{$orderProduct->product->price}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop


