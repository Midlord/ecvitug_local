@extends('layouts.admin.app')

@section('content')
@include('layouts.modal')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Rentals</h6>
        <div class="dropdown no-arrow">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
            <div class="dropdown-header">Actions:</div>
            <a class="dropdown-item" href="{{route('admin.products.create')}}">Create Rental</a>
        </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered display text-nowrap" cellspacing="0" width="100%" data-toggle="dataTable" data-form="deleteForm">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    {{-- <th>Status</th> --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td><a href="{{route('admin.products.show',$product->id)}}"><img src="{{asset('storage/uploads/equipments/'.$product->image)}}" class="img-fluid image" height="100" width="100" alt=""></a></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    {{-- <td>{{$status = 1 ? 'Active' : 'Inactive'}}</td> --}}
                    <td>
                        <form action="{{route('admin.products.archive', $product->id)}}" method="POST" class="form-delete" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-success btn-circle btn-sm"><i class="far fa-edit"></i></a> <span>or</span> 
                            <input type="hidden" name="status" value="1">
                            <button class="btn btn-danger btn-circle btn-sm delete" type="submit"><i class="fas fa-trash"></i></button>
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


