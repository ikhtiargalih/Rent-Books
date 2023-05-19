<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login.css')}}">
   </head>
<body>
  <div class="wrapper">
    <h2>Login</h2>
    <form action="{{ route('login.auth') }}" method="POST">
        @csrf
      <div class="input-box">
        <input name="email" type="text" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input name="password" type="password" placeholder="Enter your password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Login">
      </div>
    </form>
  </div>
</body>
</html>
