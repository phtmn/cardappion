</html>
<!DOCTYPE html>
<html>
  @include('site.layouts._head') 
<body class="bg-gradient-default"> 
  @include('site.layouts._nav')  
  @yield('content')
  @stack('scripts')    
  @include('site.layouts._footer')   
</body>
</html>