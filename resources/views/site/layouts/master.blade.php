</html>
<!DOCTYPE html>
<html>
  @include('site.layouts._head') 
<body class="bg-black">
  @include('site.layouts._nav')  
  @yield('content')
  @stack('scripts')
  
</body>
</html>