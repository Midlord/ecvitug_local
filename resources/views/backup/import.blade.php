@extends('layouts.admin.app')

@section('content')
<div class="container-fluid px-3 py-3">
    <section id="patients-info pb-5">
        <div class="row profile">
            <div class="col-md-4">
                <h1 class="inventory">Import Bwfurn Database</h1>
            </div>
            <div class="col-md-2 offset-md-6">
            </div>
        </div>

    <form class="patient-create" action="{{route('admin.backup.import')}}" method="post">
          @csrf
          <div class="form-row">
            <div class="col-md-6">
                <div class="md-form">
                    <div class="file-field">
                        <div class="btn btn-primary btn-sm float-left">
                            <span>Choose file</span>
                            <input type="file" name="fileName">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload your file">
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <p>
            <button type="button" id="importSubmit" class="btn btn-primary btn-md btn-rounded">Save</button> or
            <a href="{{ URL::previous() }}">Cancel</a>
         </p>
        </form>

    </section>
</div>
@endsection
@section('scripts')
@include('partials.notification')
<script>
$('#importSubmit').on('click',function(){
    $.confirm({
        title: 'Import Database!',
        content: 'Are you sure you want to import database?',
        buttons: {
            confirm: function () {
                $('.patient-create').submit();
            },
            cancel: function () {
                $.alert('Canceled!');
            }
        }
    });
});

</script>
@endsection
