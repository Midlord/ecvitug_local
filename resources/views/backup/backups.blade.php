@extends('layouts.admin.app')

@section('content')
@include('layouts.modal')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">EC Vitug Database Backup</h6>
        <div class="dropdown no-arrow">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
            <div class="dropdown-header">Actions:</div>
            <a class="dropdown-item" href="{{ route('admin.backup.create') }}">Backup Database</a>
            <a class="dropdown-item" href="{{ route('admin.backup.importdb') }}">Import Database</a>
        </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if (count($backups))

            <table class="table table-bordered display text-nowrap" cellspacing="0" width="100%">
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
                            href="{{ route('admin.backup.download',$backup['file_name']) }}" style="color:blue;"><i
                                    class="fa fa-download"></i> Download</a>
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
@stop