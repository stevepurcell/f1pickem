<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark navbar-custom">
    <a class="navbar-brand" href="#">F1Pickem</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
      aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/home">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        @if (auth()->user() && Auth::user()->is_admin == 1)
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Tables
            </a>
            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="/admin/races">Races</a>
              <a class="dropdown-item" href="/admin/countries">Countries</a>
              <a class="dropdown-item" href="/admin/tracks">Tracks</a>
              <a class="dropdown-item" href="/admin/constructors">Constructors</a>
              <a class="dropdown-item" href="/admin/drivers">Drivers</a>
              <a class="dropdown-item" href="/users">Users</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Maintenance
            </a>
            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="/admin/results">Enter Results</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Reports
            </a>
            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="#">Weekly Results</a>
              <a class="dropdown-item" href="#">Season Standings</a>
              <a class="dropdown-item" href="/logActivity">Activity Log</a>
            </div>
          </li>
        @endif
        <li class="nav-item active">
          <a class="nav-link" href="/reports">Standings
            <span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}&nbsp;&nbsp;<i class="fas fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default"
            aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="{{ route('user.profile', Auth::user()->id)}}">Profile</a>
            <a class="dropdown-item" href="{{ route('user.edit') }}">Edit Profile</a>
            <a class="dropdown-item" href="{{ route('password.edit') }}">Change Password</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             {{ csrf_field() }}
         </form>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!--/.Navbar -->
