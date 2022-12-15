@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
<header>
  <style>
    .carousel-item:nth-child(1) {
      background-image: url('images/library.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    @media (min-width: 992px) {
      #introCarousel {
        margin-top: -58.59px;
      }
      #introCarousel,
      .carousel-inner,
      .carousel-item,
      .carousel-item.active {
        height: 50vh;
      }
      .body{
        background-image: url("images/zx.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
      }
    }
    
  </style>
  <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/docs/standard/" target="_blank">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi, ut. </a>
          </li>
        </ul>

        <ul class="navbar-nav d-flex flex-row">
          </li>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
    <ol class="carousel-indicators">
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
              <h1 class="mb-3">Final</h1>
              <h5 class="mb-4">Project</h5>
              <a
                class="btn btn-outline-light btn-lg m-2"
                role="button"
                rel="nofollow"
                target="_blank"
                >Logs</a
              >
              <a
                class="btn btn-outline-light btn-lg m-2"
                target="_blank"
                role="button"
                >My Books</a>
            </div>
          </div>
        </div>
      </div>
</header>
<main class="mt-5">
  <div class="container">
    <section>
      <div class="row">
        <div class="col-md-3 gx-2 mb-2">
          <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
            <img src="images/book1.jpg" style="width:200px" class="img-fluid" />
            <a href="#!">
            </a>
          </div>
        </div>

        <div class="col-md-6 gx-5 mb-4">
          <h4><strong>Lorem ipsum dolor sit amet.</strong></h4>
          <p class="text-muted">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
            eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
            sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
          </p>
          <p><strong>Lorem ipsum dolor, sit amet consectetur adipisicing.</strong></p>
          <p class="text-muted">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
            nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
            alias, unde optio accusantium soluta, iusto molestiae adipisci et?
          </p>
        </div>
      </div>
    </section>
    <hr class="my-5" />
    <section class="text-center">
      <h4 class="mb-5"><strong>Lorem, ipsum dolor.</strong></h4>

      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="images/book4.jpg"
                class="img-fluid"
              />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Lorem, ipsum dolor.</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, ducimus.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="images/book2.jpg"
                class="img-fluid"
              />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Lorem, ipsum dolor.</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic explicabo cupiditate consectetur vero iure tempora libero neque ullam sunt? Possimus, dignissimos.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="images/book3.jpg"
                class="img-fluid"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
              <p class="card-text">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod sed, nobis blanditiis doloremque neque voluptates commodi sequi.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
