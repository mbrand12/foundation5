<!DOCTYPE html>
<html>
  <head>
    <title>Laravel</title>
    <link rel="stylesheet" href=" {{ elixir('css/app.css') }}">
  </head>
  <body>
    <div class="content">
      @yield('content')
    </div>
    @yield('footer')
  </body>
</html>
