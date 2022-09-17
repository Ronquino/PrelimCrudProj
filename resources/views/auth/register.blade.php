@extends('base')

@section('content')

<section class="vh-100" style="background-color: #eee;">
<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1 border border-dark">
    <h1 class="text-center">Register</h1>

    <form action="{{'/register'}}" method="POST">
        {{csrf_field()}}

        <div class="form-group mb-3 ">
        
            <label for="name"></label>    
            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
            @error('name')
                <p class="text-danger">{{$message}}</p>
             @enderror
        </div>
        
        <div class="form-group mb-3">
            <label for="email"></label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            @error('email')
                <p class="text-danger">{{$message}}</p>
             @enderror
        </div>
        <div class="form-group mb-3">
            <label for="password"></label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            @error('password')
                <p class="text-danger">{{$message}}</p>
             @enderror
        </div>
        <div class="form-group mb-3">
            <label for="password_confirmation"></label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Comfirm Password">
            @error('password')
                <p class="text-danger">{{$message}}</p>
             @enderror
        </div>
        <div class="d-flex">
            <div class="flex-grow-1">
            <a href="{{'/'}}">Already have an account</a>
            </div>
            <button class="btn btn-primary mb-3" type="submit">Register</button>
        </div>
    </form>
</div>  

@endsection