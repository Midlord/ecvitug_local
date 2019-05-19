@extends('layouts.admin.app')

@section('content')
<div class="container-fluid px-3 py-3">
    <div class="row">
        <div class="col-md-12">
          <div class="d-flex justify-content-between mb-3">
            <div class="col-sm-6">
                <h2 class="h1-responsive font-weight-bold">Bwfurn Database Backups</h2>
            </div>
            <div class="col-sm-6">
                <a type="button" href="{{ route('admin.backup.create') }}" id="add-button-dm" class="float-right btn btn-primary btn-rounded"> Create New Backup</a>
                <a type="button" href="{{ route('admin.backup.importdb') }}" id="add-button-dm" class="float-right btn btn-primary btn-rounded"> Import Database</a>
            </div>
          </div>
          <!--Card-->
          <div class="card">

              <!--Card content-->
              <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="table-responsive mb-5">

                                @if (count($backups))

                                <table class="table table-striped table-bordered" id="backup">
                                    <thead>
                                    <tr>
                                        <th>File</th>
                                        <th>Size</th>
                                        <th>Date</th>
                                        <!-- 
                                        <th>Age</th>
                                        -->
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($backups as $backup)
                                        <?php
                                            $size = $backup['file_size']/1048576;
                                            $totalsize = number_format((float)$size, 2, '.', '');
                                        ?>
                                        <tr>
                                            <td>{{ $backup['file_name'] }}</td>
                                            <td>{{ $totalsize }}</td>
                                            <td>
                                                {{ gmdate("F d, Y h:i:s A ", $backup['last_modified']) }}
                                            </td>
                                        
                                            <td class="text-right">
                                                <a class="btn btn-xs btn-default"
                                                href="{{ route('admin.backup.download',$backup['file_name']) }}"><i
                                                        class="fa fa-cloud-download"></i> Download</a>
                                                <a class="btn btn-xs btn-danger" data-button-type="delete"
                                                href="{{ route('admin.backup.delete',$backup['file_name'] )}}"><i class="fa fa-trash-o"></i>
                                                    Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="well">
                                    <h4>There are no backups</h4>
                                </div>
                            @endif
                              </div>
                        </div>
                    </div>
              </div>
          </div>
          <!--/.Card-->
        </div>
    </div>
</div>
@endsection
@section('scripts')
@include('partials.notification')
<script>
     $(document).ready(function () {
      $('#backup').DataTable();
      $('.dataTables_length').addClass('bs-select');
     });
</script>
@endsection

