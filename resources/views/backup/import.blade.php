@extends('layouts.admin.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form class="p-5" action="{{route('admin.backup.import')}}" method="post">
                @csrf
                <p class="h3 mb-4 text-center">Import Database</p>
        
                <div class="form-row">
                    <div class="col">
                        <label for="inputGroupFile01">Upload Database</label>
                        <input type="file" name="fileName" class="form-control" id="inputGroupFile01">
                    </div>
                </div>
            
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-success my-4 btn-block" type="submit">Submit</button>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.backup.index')}}" class="btn btn-info  my-4 btn-block">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection