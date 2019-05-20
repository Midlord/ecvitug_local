@extends('layouts.admin.app')
@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('content')
@include('layouts.delete')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Reports</h6>
        <div class="dropdown no-arrow">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
        </a>
        </div>
    </div>
    <div class="card-body">
    <div class="row">
            <div class="col-md-12 float-right">
                <form action="{{route('admin.report.filter')}}" method="GET" enctype="multipart/form-data"> 
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="">
                                <input type="text" name="dateFrom" id="dateFrom" class="form-control datepicker" value="{{isset($_GET['dateFrom']) ? $_GET['dateFrom'] : ''}}">
                                <label for="dateFrom">From</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <input type="text" name="dateTo" id="dateTo" class="form-control datepicker" value="{{isset($_GET['dateTo']) ? $_GET['dateTo'] : ''}}">
                                <label for="dateTo">To</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <button type="submit" class="btn btn-rounded btn-primary pull-right">Filter</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered display text-nowrap" cellspacing="0" width="100%" data-toggle="dataTable" data-form="deleteForm">
            <thead>
                <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Total Amount</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->totalAmount}}</td>
                    </tr>
               @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>

<div id="printableArea" class="mb-5">
        <div class="row">
            <div class="col-md-12">
                 <h3>{{date('F d, Y',strtotime($dateFrom))}} - {{date('F d, Y',strtotime($dateTo))}}</h3>
            </div>
            <div class="col-md-12 text-center">
                <img src="{{asset('/images/bwfurn_logo.png')}}" style="height:auto; width:310px;" alt="">
                <h1>ECVitug Constructions Company.</h1>
                <address>3025 Kuliat Street Lourdes Sur, Angeles, Pampanga</address>
            </div>
        </div>
        <div class="table-responsive mb-5">
            <table class="table" class="destroy-dt">
                <thead>
                <tr>
                    <th class="th-lg">Date of Order</th>
                    <th class="th-lg">Quantity</th>
                    <th class="th-lg">Amount</th>
                </tr>
                </thead>
                <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{$order->created_at}}</td>
                            <td>{{$order->user->name}}</td>
                            <td>{{$order->totalAmount}}</td>
                        </tr>
                   @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th class="text-bold"></th>
                        <th class="text-bold"></th>
                        <th class="text-bold text-right">Total:</th>
                        <th style="font-size:24px; font-weight:bold;"> <strong>P {{number_format($sum, 2)}}</strong></th>
                    </tr>
                </tfoot>
            </table>
        </div>    
        <div class="float-left" style="margin-left: 10rem;">
            <p class="text-center" style="border-width: medium;border-bottom-style: solid;border-bottom-color: initial;padding-bottom: 15px;">Prepared By:</p>
            <p class="text-center" style="margin-top:19px;"> <strong>{{Auth::user()->name}}</strong></p>
            <p class="text-center">({{Auth::user()->role}})</p>
        </div>     
    </div>

@stop
@section('scripts')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
    $(".datepicker").datepicker({ 
        maxDate: new Date 
    });

    $('.destroy-dt').DataTable().destroy();
});
</script>
@endsection