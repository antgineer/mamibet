<!doctype html>
<html lang="en">
<head>
  @includeif('includes.head')
  @include('includes.pollslider')
</head>

<body data-spy="" data-target="#navbar-example">
  

  <div id="preloader"></div>
  
  <header>
    {{-- header/menu --}}
    @includeif('includes.header')
  </header>
  <!-- header end -->
  <div>
    @yield('content')
    
  </div>

  <footer>
    @includeif('includes.footer')
  </footer>
  

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  

  <!-- JavaScript Libraries -->
  @include('scripts.js')
</body>

</html>
