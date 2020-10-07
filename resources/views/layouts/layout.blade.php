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
      <div class="container d-flex w-100 h-100 mx-auto flex-column">
      {{-- <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column"> --}}
        <header class="masthead mb-auto">
          <div class="inner">
            <nav class="navbar navbar-expand-lg navbar-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand mr-auto" href="/">Weeokly Challenge Website</a>
                <ul class="navbar-nav mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="/about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/challenges">Challenges</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/mybadges">My Badge</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/podcast">Podcast</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/profile">Profile</a>
                  </li>
                </ul>
                  <button class="btn btn-primary my-2 my-sm-0 mr-2" type="submit">Sign In</button>
                  <button class="btn btn-danger my-2 my-sm-0" type="submit">Sign Out</button>
              </div>
            </nav>
          </div>
       </header>

        @yield('content')

        <footer class="mastfoot mt-auto">
          <div class="inner">
            <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
          </div>
        </footer>
      </div>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
  </body>
</html>
