</html>
<!DOCTYPE html>
<html>
  @include('layouts.site._head')
<body class="bg-black">
  @include('layouts.site._nav')
  @yield('content')
  @stack('scripts')

</body>
</html>
