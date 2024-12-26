<nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand fs-3" href="#">Art-Express</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff0cd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-align-justify"><path d="M3 12h18"/><path d="M3 18h18"/><path d="M3 6h18"/></svg>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto gap-2 text-center">
          <li class="nav-item">
            <a class="nav-link fs-6 active" aria-current="page" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="#">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="#">Orders</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-6" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Management
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item fs-6" href="#">User Management</a></li>
              <li><a class="dropdown-item fs-6" href="#">Artist Management</a></li>
              <li><a class="dropdown-item fs-6" href="#">Roles & Permissions</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown position-relative">
            <a class="nav-link dropdown-toggle no-togggle-icon position-absolute fs-6" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="rounded-circle" src="{{auth()->user()->image?asset('storage/'.auth()->user()->image):'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name)}}" alt="{{auth()->user()->name}}" height="30">
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><center>
                <a class="d-flex flex-column text-decoration-none">
                    <div class="profile-image rounded-full">
                    <img class="rounded-circle" src="{{auth()->user()->image?asset('storage/'.auth()->user()->image):'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name)}}" alt="{{auth()->user()->name}}">
                    </div>
                    <p class="text-wrap" style="color:var(--primary)">{{auth()->user()->name}}</p>
                </a>
            </center></li>
              <li><a class="dropdown-item fs-6" href="#">View Profile</a></li>
              <li><a class="dropdown-item fs-6" href="#">Edit Profile</a></li>
              <li><a class="dropdown-item fs-6" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 <span class="text-danger">Logout</span>
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>