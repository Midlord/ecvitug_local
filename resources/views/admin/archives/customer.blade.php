@extends('layouts.admin.app')

@section('content')
@include('layouts.modal')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Customers</h6>
        <div class="dropdown no-arrow">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
        </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered display text-nowrap" cellspacing="0" width="100%" data-toggle="dataTable" data-form="deleteForm">
            <thead>
                <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{date('F j Y',strtotime($user->created_at))}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->mobilePhone}}</td>
                    <td>Inactive</td>
                    <td>
                        <form action="{{route('admin.customers.archive', $user->id)}}" method="POST" class="form-delete" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <input type="hidden" name="status" value="1">
                            <button class="btn btn-success btn-circle btn-sm delete" type="submit"><i class="fa fa-window-restore"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@stop


