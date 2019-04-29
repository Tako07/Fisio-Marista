<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{{ asset('css/bootstrap4.3.1/css/bootstrap.min.css') }}}">
      <script type="text/javascript" src=" {{{ asset('css/bootstrap4.3.1/js/jquery-3.3.1.min.js') }}}"></script>
      <script type="text/javascript" src=" {{{ asset('css/bootstrap4.3.1/js/popper.min.js') }}}"></script>
      <script type="text/javascript" src=" {{{ asset('css/bootstrap4.3.1/js/bootstrap.min.js') }}}"></script>
    @yield('stylesheet')
    <title>@yield('title')</title>
  </head>
  <body>
    @yield('content')
  </body>
  @yield('scripts')
</html>
