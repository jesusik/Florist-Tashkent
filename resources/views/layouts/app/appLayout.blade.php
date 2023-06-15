<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css" />
  <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script nonce='base64value' src="{{mix('js/app.js')}}" type="text/javascript"></script>
  <title>@yield('title')</title>
</head>

<body>
  <div class="wrapper">
    @include('layouts.app.partials.appHeader')
    @yield('content')
    @include('layouts.app.partials.appFooter')

  </div>
</body>
@stack('scripts')

</html>