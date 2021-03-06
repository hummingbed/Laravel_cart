

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-primary info-color">
  <a class="navbar-brand" href="/">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link waves-effect waves-light" href="#">
          <i class="fas fa-envelope"></i> Contact
          <span class="sr-only">(current)</span>
        </a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> Profile </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item waves-effect waves-light" href="{{route('user.signup')}} ">Register</a>
          <a class="dropdown-item waves-effect waves-light" href="{{route('user.login')}} ">Login</a>
          <a class="dropdown-item waves-effect waves-light" href="{{route('user.logout')}} ">Log out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>