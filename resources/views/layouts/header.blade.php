<!-- Header area start -->
<header class="header__area pos-abs plr-100">
    <div class="header__inner">
      <div class="header__logo">
        <a href="index.html"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="Site Logo"></a>
      </div>
      <div class="header__menu">
        <nav class="main-menu">
          <ul>
            <li class=""><a href="#">Home</a></li>

            <li class=""><a href="{{ route('bizzpro') }}">Service</a></li>

            <li class=""><a href="{{ route('bizzpro.portfolios') }}">Portfolio</a></li>

            <li class=""><a href="{{ route('bizzpro.teams') }}">Team</a></li>

            <li><a href="{{ route('bizzpro.contact') }}">Contact</a></li>

            <li><a href="{{ route('bizzpro.about') }}">About us</a></li>

          
        
          <!-- Authentication Links -->
          @if(Auth::check())
          <!-- User is authenticated, show logout button -->
          <li>
              <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                  @csrf
                  <button type="submit" class="navbar-link btn btn-link">Logout</button>
              </form>
          </li>
          @else
          <!-- User is not authenticated, show login and register links -->
          <li><a href="{{ route('login') }}" class="navbar-link">Login</a></li>
          <li><a href="{{ route('register') }}" class="navbar-link">Register</a></li>
          @endif

     
            <div>
              <!-- Main content goes here -->
              @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
          </div>

          </ul>
        </nav>


      </div>
      <div class="header__others">
        <div class="header__search">
          <button class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></button>
          <button class="search-close"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="header__offcanvas">
          <button class="menu_icon">
            <img src="{{asset('assets/imgs/icon/menu.png')}}" alt="Menu Icon">
          </button>
        </div>
      </div>
    </div>
  </header>