<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/register.css')}}">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="{{route('registerStore')}}" method="post">
        @csrf
      <div class="input-box">
        <input name="name" type="text" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input name="email" type="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input name="password" type="password" placeholder="Enter your password" required>
      </div>
      <div class="input-box">
        <input name="phone" type="number" placeholder="Enter your phone number" required>
      </div>
      <div class="input-box">
        <input name="address" type="text" placeholder="Enter your address" required>
      </div>
      <div class="input-box button">
        <input type="submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="#">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
