<!DOCTYPE html>
<html lang="en">
  <head>
    @include('newtemplate._head')
  </head>
  <body class="body">
    <div class="container-fluid">
     <div class="row content">

      @include('newtemplate._nav')
      @yield('content')

      </div>
    </div>
      @include('newtemplate._footer')
      @yield('scripts')

  </body>
</html>