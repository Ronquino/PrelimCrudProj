<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <div class="container-fluid">
    <span alt="logo" class="img-fluid rounded-circle img-responsive" style="width: 60px; margin-left: 50px"></span>
    <h5 class="p-2">Books</h5>
    <ul class="navbar-nav">
        <li class="nav-item active">
          <a style="border-left: 1px rgba(0, 0, 0, 0.356) solid;" class="nav-link text-dark btn btn-outline-info" href="{{ '/' }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark btn btn-outline-info" href="{{ '/books' }}">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark btn btn-outline-info" href="{{ '/logs' }}">Logs</a>
        </li>
      </ul>
    <div class="collapse navbar-collapse" id="navbarText">
            <a href="{{ '/logout' }}" style="text-decoration: none; margin-right: 10px; color: rgb(0, 0, 0); margin-left: 85%"><i class="fa fa-sign-out btn btn-outline-info ">Logout</i>&nbsp;</a>
    </div>
</nav>

<style>
    .navbar-nav {
        margin-left:30px;
        font-family: "Righteous", cursive;
    }
</style>

