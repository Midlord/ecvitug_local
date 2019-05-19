@extends('layouts.admin.app')

@section('css')
    <style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
    </style>
@stop

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form class="p-5" action="{{route('admin.customers.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                @csrf @method('put')
                <p class="h4 mb-4">Create Customer Or Admin</p>
            
                <div class="form-row mt-3">
                    <div class="col">
                        <input type="text" id="defaultRegisterFormLastName" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Full name" value="{{$user->name ?? old('name')}}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            
                <!-- E-mail -->
                <div class="form-row mt-3">
                    <div class="col">
                        <input type="email" name="email" id="defaultRegisterFormEmail" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-mail" value="{{$user->email ?? old('email')}}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- Password -->
                {{-- <div class="form-row mt-3">
                    <div class="col">
                        <input type="password" name="password" id="defaultRegisterFormPassword" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> --}}
            
                <!-- Phone number -->
                <div class="form-row mt-3">
                    <div class="col">
                        <input type="number" id="defaultRegisterPhonePassword" name="mobilePhone" class="form-control {{ $errors->has('mobilePhone') ? ' is-invalid' : '' }}" value="{{$user->mobilePhone ?? old('mobilePhone')}}" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" required>
                        @if ($errors->has('mobilePhone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('mobilePhone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <!-- Material input -->
                    <label for="inputEmail3MD" class="col-sm-2 col-form-label">Select Role:</label>
                    @foreach($roles as $role)
                    <div class="col-md-3">
                        <div class="custom-radio">
                            <input type="radio" class="custom-control-input {{ $errors->has('role') ? ' is-invalid' : '' }}" id="{{$role}}" value="{{$role ?? old('role')}}" name="role" required {{$user->role = $role ? 'checked' : ''}}>
                            <label class="custom-control-label" for="{{$role}}">{{ucfirst($role)}}</label>

                            @if ($errors->has('role'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                            @endif

                        </div>
                    </div>
                    @endforeach
                </div> 
                <div class="form-group">
                    <div class="col">
                        <label for="inputGroupFile01">Upload Photo</label>
                        <input type="file" name="photo" class="form-control" id="inputGroupFile01">
                    </div>
                </div>

                <div class="form-row">
                    <img src="{{asset('storage/uploads/avatars/'.$user->photo)}}" style="height:500px; display: block;margin: 0 auto;" class="center img-fluid" width="300"  alt="" >
                </div>
            
                <!-- Sign up button -->
                <button class="btn btn-info my-4 btn-block" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection