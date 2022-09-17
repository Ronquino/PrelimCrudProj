@extends('base')

@extends('navbar')

@section('title', 'Edit')

@section('content')
<div class="container m-5">
        <div class="col-sm-5 offset-sm-4">
            <div>
                <livewire:sports.edit :sportsId="$id"/>
            </div>
        </div>
    </div>
</div>
@endsection