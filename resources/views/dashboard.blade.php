@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
<section class="vh-100" style="background-color: #CDC4F9;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-10 col-xl-8">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="d-flex justify-content-center mb-4">
              <img src="{{ asset('images/paw.jpg') }}" alt="paw"
                class="rounded-circle shadow-1-strong" width="150" height="90" />
            </div>
            <figure class="text-center mb-0">
              <blockquote class="blockquote mb-5">
                <p>
                  <span class="font-italic">Accept a loss as a learning experience,
                    <p>and never point 
                    fingers at your teammates.</p>
                  </span>
                </p>
              </blockquote>
              <figcaption class="blockquote-footer mb-0">
                Michael Jordan
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
