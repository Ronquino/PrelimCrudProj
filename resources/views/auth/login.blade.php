@extends('base')

@section('content')

<div class="container-fluid h-custom mt-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 border border-dark mt-5">
    @if (session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif

    <h1 class="text-center">Welcome</h1>

    <form action="{{'/'}}" method="POST">
        {{csrf_field()}}

        <div class="form-group mb-3">
            <label for="email"></label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email or Phone">
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
        <div class="d-flex">
            <div class="flex-grow-1">
                <p>Don't have an account?
            <a href="{{'/register'}}">Register</a></p>
            </div>
            <button class="btn btn-primary mb-3">Login</button>
        </div>
        
    </form>
</div>
 <!-- Copyright -->
 <div class="footer-copyright text-center py-1 mt-5">© 2022 Copyright:
 Prelim<span style="color: red;"><i>Project</i></span>
  </div>
  <!-- Copyright -->

@endsection