<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Weekly Challenge Rewards System</title>

    <!-- Styles -->
    <link type="text/css" href="{{ asset('/css/app.css') }}" rel="stylesheet">

  </head>
  <body class="text-center">
      <div class="container-fluid">
      {{-- <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column"> --}}
        <header class="masthead mb-auto">
          <div class="inner">
            <nav class="navbar navbar-expand-lg navbar-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand mr-auto" href="/">Weekly Challenge Website</a>
                <ul class="navbar-nav mt-2 mt-lg-0">
                  @auth
                    @if (Auth::id() == 1)
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">Users</a>
                      </li>
                    @endif
                  @endauth
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('challenges.index') }}">Challenges</a>
                  </li>
                  @auth
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('user.badges')}}">My Badge</a>
                    </li>
                  @endauth
                  <li class="nav-item">
                    <a class="nav-link" href="https://wordpress.com/">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/podcast">Podcast</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                  </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav">
                  <!-- Authentication Links -->
                  @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('index') }}">{{ __('Login') }}</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('user.create') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('user.update', ['id' => Auth::user()->id, 'name' => Auth::user()->name]) }}">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>  
                          </div>
                      </li>
                  @endguest
              </ul>
                  {{-- <button class="btn btn-primary my-2 my-sm-0 mr-2" type="submit">Sign In</button> --}}
                  {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-danger my-2 my-sm-0" type="submit">Sign Out</a> --}}
                </form>
              </div>
            </nav>
          </div>
        </header>

        <div class="content">
          @if(session('msg'))
            <div class="session-msg p-2">
              <p class="my-auto">{{ session('msg') }}</p>
            </div>
          @endif
          @yield('content')
        </div>

        <footer class="mastfoot fixed-bottom">
          <div class="inner">
            {{-- <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p> --}}
          </div>
        </footer>
      </div>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
  </body>
</html>
