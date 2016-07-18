<!DOCTYPE html>
<html lang="en">

  <head>
    @include('template._head')
  </head>
  <body class="body">
    <header id="header">    
       @include('template._header')
    </header>
      @include('partials._messages')

      @yield('content')

    
      @include('template._footer')
      @include('template._javascripts')


  </body>
</html>