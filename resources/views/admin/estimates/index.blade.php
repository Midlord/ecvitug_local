@extends('layouts.admin.app')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Estimates</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered display text-nowrap" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Date</th>
            <th>Type</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($estimates as $estimate)
            <tr>
                <td><a href="{{route('admin.estimates.show',$estimate->id)}}">{{date('F j Y',strtotime($estimate->created_at))}}</a></td>
                <td>{{ucfirst($estimate->type)}}</td>
                <td>{{$estimate->user->name}}</td>
                <td>{{$estimate->user->email}}</td>
                <td>{{$estimate->user->mobilePhone}}</td>
                <td>{{$estimate->status = 1 ? 'Active' : 'Inactive'}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      
    </div>
  </div>
</div>
@stop