<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is my demo Laravel 7 site, with Boomerang UI!">
    <meta name="author" content="Leonard Selvaraja">
    <title>{{ env('APP_NAME') }} | Powered by Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800|Roboto:400,500,700" rel="stylesheet">
    <!-- Theme CSS -->
    <link type="text/css" href="{{ asset('theme/assets/css/theme.css') }}" rel="stylesheet">
    <!-- Demo CSS - No need to use these in your project -->
    <link type="text/css" href="{{ asset('theme/assets/css/demo.css') }}" rel="stylesheet">
    @yield('css')
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-dark bg-dark py-4">
      <div class="container">
        <a class="navbar-brand" href="./"><strong>Leonard</strong>App</a>
        <button class="navbar-toggler" type="button" data-action="offcanvas-open" data-target="#navbar_main" aria-controls="navbar_main" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse offcanvas-collapse" id="navbar_main">
          <ul class="navbar-nav ml-auto align-items-lg-center">
            <h6 class="dropdown-header font-weight-600 d-lg-none px-0">Menu</h6>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Page 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/page-two') }}">Page 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/page-three') }}">Page 3</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbar_main_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
              <div class="dropdown-menu" aria-labelledby="navbar_1_dropdown_1">
                <a class="dropdown-item" href="./pages/homepage.html">Homepage</a>
                <a class="dropdown-item" href="./pages/about.html">About us</a>
                <a class="dropdown-item" href="./pages/sign-in.html">Sign in</a>
                <a class="dropdown-item" href="./pages/contact.html">Contact</a>
              </div>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="./docs/introduction.html">Docs</a>
            </li> -->
            <li class="nav-item">
              <a href="#" target="_blank" class="btn btn-sm bg-white d-none d-lg-inline-flex">Login</a>
            </li>
            <div class="dropdown-divider d-lg-none my-4"></div>
            <h6 class="dropdown-header font-weight-600 d-lg-none px-0">Social Media</h6>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://instagram.com/ifly_leonard" target="_blank"><i class="fab fa-instagram"></i><span class="ml-2 d-lg-none">Instagram</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="main">
      @yield('content')
    </main>
    <footer class="pt-5 pb-3 footer  footer-dark bg-tertiary">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="pr-lg-5">
              <h1 class="heading h6 text-uppercase font-weight-700 mb-3"><strong>Boomerang</strong> UI Kit</h1>
              <p>Boomerang is a high quality UI Kit built on top of the well known Bootstrap 4 Framework. This theme was designed as its own extended version of Bootstrap with multiple functionalities and controls added, extended color palette and beautiful typography.</p>
            </div>
          </div>
          <div class="col-6 col-md">
            <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Solutions</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Business</a></li>
              <li><a class="text-muted" href="#">Education</a></li>
              <li><a class="text-muted" href="#">Government</a></li>
              <li><a class="text-muted" href="#">Gaming</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5 class="heading h6 text-uppercase font-weight-700 mb-3">About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="d-flex align-items-center">
          <span class="">
            &copy; 2018 <a href="https://webpixels.io/" class="footer-link" target="_blank">Webpixels</a>. All rights reserved.
          </span>
          <ul class="nav ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link active" href="https://instagram.com/webpixelsofficial" target="_blank"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://facebook.com/webpixels" target="_blank"><i class="fab fa-facebook"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/webpixels" target="_blank"><i class="fab fa-github"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank"><i class="fab fa-dribbble"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- Core -->
    <script src="{{ asset('theme/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- FontAwesome 5 -->
    <script src="{{ asset('theme/assets/vendor/fontawesome/js/fontawesome-all.min.js') }}" defer></script>
    <!-- Page plugins -->
    <script src="{{ asset('theme/assets/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor/input-mask/input-mask.min.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor/nouislider/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor/textarea-autosize/textarea-autosize.min.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('theme/assets/js/theme.js') }}"></script>
    @yield('js')
  </body>
</html>
