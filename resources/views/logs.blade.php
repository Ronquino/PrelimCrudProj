@extends('base')

@extends('navbar')

@section('title', 'Logs')

@section('content')
<div class="container">
    <table class="table table-striped table-sm">
        <h1 class="text-white">Activity Log</h1>
        <thead>
            <tr>
                <th class="text-white">Timestamp</th>
                <th class="text-white">Log Entry</th>
            </tr>
        </thead>
        @foreach($logs as $log)
            <tr>
                <th class="text-white">{{ $log->created_at }}</th>
                <th class="text-white">{{ $log->log_entry }}</th>
            </tr>
        @endforeach
    </table>
</div>
<style>
    #basic-addon1 {
    width: 40px;
    text-align: center;
    background-color: primary;
}
body{
    background-image: url("images/library.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100%;
}
</style>

@endsection