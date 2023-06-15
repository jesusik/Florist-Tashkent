<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Dashboard</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
  <link href="{{mix('css/admin.css')}}" rel="stylesheet" type="text/css" />

</head>
<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
@include('layouts.admin.partials.adminSidebar')
<div class="main-wrapper">
@include('layouts.admin.partials.adminMainNav')
  <main class="main users chart-page" id="skip-target">
      <div class="container">
@yield('content')
      </div>
    </main>
@include('layouts.admin.partials.adminFooter')
</div>
</div>
