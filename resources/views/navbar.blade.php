<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <img src="{{ asset('images/logo.jpg') }}" alt="logo" class="img-fluid rounded-circle img-responsive" style="width: 60px; margin-left: 50px">
    <h5 class="p-2">Sports</h5>
    <ul class="navbar-nav">
        <li class="nav-item active">
          <a style="border-right: 1px rgba(89, 89, 89, 0.356) solid;" class="nav-link text-dark btn btn-outline-success" href="{{ '/' }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark btn btn-outline-success" href="{{ '/sports' }}">Sports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark btn btn-outline-success" href="{{ '/logs' }}">Logs</a>
        </li>
      </ul>
    <div class="collapse navbar-collapse" id="navbarText">
            <a href="{{ '/logout' }}" style="text-decoration: none; margin-right: 10px; color: black; margin-left: 85%"><i class="fa fa-sign-out btn btn-outline-danger ">Logout</i>&nbsp;</a>
    </div>
</nav>

<style>
    .navbar-nav {
        margin-left: 373px;
    }
</style>
