@extends('layouts.admin.app')

@section('content')
@include('layouts.modal')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Orders</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered display text-nowrap" cellspacing="0" width="100%" data-toggle="dataTable" data-form="deleteForm">
            <thead>
                <tr>
                <th>Date</th>
                <th>Transaction #</th>
                <th>Name</th>
                <th>Total Quantity</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td><a href="{{route('admin.orders.show',$order->id)}}">{{date('F d Y H:i A',strtotime($order->created_at))}}</a></td>
                    <td>TRN-{{$order->id}}-ECV</td>
                    <td>{{$order->user->name}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>P{{$order->totalPrice}}</td>
                    <td>{{$order->status == 1 ? 'Paid' : 'Pending'}}</td>
                    @if ($order->status == 1)
                        <td>Approve</td>
                    @else
                        <td>
                            <form action="{{route('admin.order.approve', $order->id)}}" method="POST" class="form-delete" enctype="multipart/form-data">
                                @csrf @method('PUT')
                                <input type="hidden" name="CustomerEmail" value="{{$order->user->email}}">
                                <input type="hidden" name="CustomerName" value="{{$order->user->name}}">
                                <button class="btn btn-primary  btn-sm delete" type="submit">Click to Approve</button>
                            </form>
                        </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@stop


