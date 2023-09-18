<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/home.css') }}" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="box">
    <h2>Register</h2>
    <form action="/register" method="POST">
      @csrf

      <input type="text" name="name" placeholder="Name">
      <input type="text" name="email" placeholder="Email">
      <input type="text" name="password" placeholder="Password">
      <button>Confirm</button>
    </form>
  </div>
</body>
</html>