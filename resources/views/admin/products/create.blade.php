@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form class="p-5" action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <p class="h3 mb-4 text-center">Create Rental</p>
            
                <div class="form-row mt-3">
                    <div class="col">
                        <!-- Last name -->
                        <label for="">Name</label>
                        <input type="text" id="defaultRegisterFormLastName" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" value="{{old('name')}}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            
                <div class="form-row mt-3">
                    <div class="col">
                        <label for="">Description</label>
                        <textarea name="description" placeholder="Description" cols="30" rows="10" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" required>
                        </textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-row mt-3">
                    <div class="col">
                            <label for="">Quantity</label>
                        <input type="number" id="defaultRegisterFormLastName" name="quantity" class="form-control {{ $errors->has('quantity') ? ' is-invalid' : '' }}" placeholder="Quantity" value="{{old('quantity')}}" required>
                        @if ($errors->has('quantity'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                

                <div class="form-row mt-3">
                    <div class="col">
                        <label for="">Price</label>
                        <input type="number" id="defaultRegisterFormLastName" name="price" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="price" value="{{old('price')}}" required>
                        @if ($errors->has('price'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-row">
                    <div class="col">
                        <label for="inputGroupFile01">Upload Photo</label>
                        <input type="file" name="image" class="form-control" id="inputGroupFile01">
                    </div>
                </div>
            
                <!-- Sign up button -->
                <button class="btn btn-success my-4 btn-block" type="submit">Submit</button>
                <a href="{{route('admin.products.index')}}" class="btn btn-info  my-4 btn-block">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection