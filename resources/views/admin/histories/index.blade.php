@extends('layouts.admin.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Logs</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
                <table class="table table-bordered display text-nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Content</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($histories as $history)
                    <tr>
                        <td>{{date('F d Y H:i A',strtotime($history->created_at))}}</td>
                        <td>{{$history->user->name}}</td>
                        <td>{{$history->content}} at {{date('F d Y H:i A',strtotime($history->created_at))}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop


