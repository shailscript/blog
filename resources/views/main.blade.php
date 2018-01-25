<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>

  <body>
    @include('partials._nav')
    <div class="container">
      @include('partials._messages')
      @yield('content')
    </div> <!-- END OF CONTAINER -->
    @include('partials._footer')
  </body>
  @include('partials._scripts')
</html>
