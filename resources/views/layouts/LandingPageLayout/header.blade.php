<nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container">
      <a class="navbar-brand fs-3" href="/">Art-Express</a>
      <button class="navbar-toggler border-none outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff0cd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-align-justify"><path d="M3 12h18"/><path d="M3 18h18"/><path d="M3 6h18"/></svg>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto gap-1 gap-md-4">
            @if (auth()->user())
            <li class="nav-item text-center">
                <a class="nav-link fs-6" href="{{ route(auth()->user()->getRoleNames()->first().'.dashboard') }}">Dashboard</a>
              </li>
            @else
            <li class="nav-item text-center">
              <a class="nav-link fs-6" href="#" data-bs-toggle="modal" data-bs-target="#Login">Login</a>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link fs-6" href="#" data-bs-toggle="modal" data-bs-target="#Sign-Up">Register</a>
            </li>
            @endif

        </ul>
      </div>
    </div>
  </nav>

{{-- Login Modal --}}
  @include('auth.login')

{{-- Register modal --}}
  @include('auth.register')



  @push('scripts')
        <script>
            const pass=document.getElementById('password');
            const confirmPass= document.getElementById('confirm-password');
            const toggle=document.getElementById('password-show')
            console.log(toggle);
            toggle.addEventListener('change',()=>{
                pass.type=toggle.checked?'text':'password'
                confirmPass.type=toggle.checked?'text':'password'
            })
        </script>
        @endpush

