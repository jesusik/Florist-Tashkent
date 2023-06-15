<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Sign In</title>
  <link href="{{mix('css/admin.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>
  <div class="layer"></div>
  <main class="page-center">
    <article class="sign-up">
      <h1 class="sign-up__title">Welcome back!</h1>
      <p class="sign-up__subtitle">Sign in to your account to continue</p>
      <form class="sign-up-form form" method="POST" action="{{ route('login') }}">
        {{csrf_field()}}
        <label class="form-label-wrapper">
          <p class="form-label">Email</p>
          <input id="email" type="email" placeholder="Enter your email" class="form-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </label>
        <label class="form-label-wrapper">
          <p class="form-label">Password</p>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </label>

        <button type="submit" class="form-btn primary-default-btn transparent-btn">отправить</button>
      </form>
    </article>
  </main>
</body>

</html>