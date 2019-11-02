<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cardappion - Super</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  @include('super.layouts.utils._styles')
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    @include('super.layouts.utils._header')
    @include('super.layouts.utils._menu')

    <div class="content-wrapper">
      @yield('content')
    </div>

    @include('super.layouts.utils._footer')

  </div>
  @include('super.layouts.utils._scripts')

</body>

</html>
