<!-- Page Content -->
<nav class="navbar mavbar-expand-lg navbar-light bg-light border-bottom">
  <button class="btn btn-primary" id="menu-toggle">✱</button>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account Settings
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Edit Profile</a>

          <a class="dropdown-item" href="#">Change Passwordn</a>

          <div class="dropdown-divider"></div>

          <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logut-form'.submit();)">
            Logout

            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
              {{csrf_field()}}
            </form>
          </a>
        </div>
      </li>
    </ul>
  </div>
</nav>
