<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="/about" class="nav-link px-2">About</a></li>
            <li><a href="/contact" class="nav-link px-2">Contact</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2"><a href="{{route('login')}}">Login</a></button>
            <button type="button" class="btn btn-success"><a href="{{route('signup')}}">Sign-up</a></button>
        </div>
    </header>
  </div>
    @yield("content")
  <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>