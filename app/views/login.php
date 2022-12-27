<?php
  session_start();

  if (!isset($_SESSION['UserID'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../public/css/signin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col d-flex align-items-center flex-column mb-5">
        <a href="index">
          <img class="mb-4" src="../public/img/Travigo_logo_black.png" alt="Logo" width="300" height="87">
        </a>
        <h1 class="h3 mb-3 fw-normal">Travigo Travel</h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <!-- Sign in form -->
        <form action="signIn" method="POST">
          <p>Sign In</p>
          <div class="form-floating">
            <input type="text" class="form-control mb-2" name="email" id="floatingInputSI" placeholder="name@example.com">
            <label for="floatingInputSI">Email address or Username</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control mb-2" name="password" id="floatingPasswordSI" placeholder="Password">
            <label for="floatingPasswordSI">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign in</button>
        </form>
      </div>
      <div class="col">
        <!-- Sign up form -->
        <form action="signUp" method="POST">
          <p>Sign Up</p>
          <div class="form-floating">
            <input type="text" class="form-control mb-2" name="username" id="floatingInputName" placeholder="UserName">
            <label for="floatingInputName">Your name</label>
          </div>
          <div class="form-floating">
            <input type="email" class="form-control mb-2" name="email" id="floatingInputEmail" placeholder="name@example.com">
            <label for="floatingInputEmail">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control mb-2" name="password" id="floatingPasswordSU" placeholder="Password">
            <label for="floatingPasswordSU">Password</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control mb-2" name="passwordRepeat" id="floatingPasswordSUR" placeholder="Password">
            <label for="floatingPasswordSUR">Repeat your password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign up</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<?php
  }else {
    echo "<script>alert('You\'re already logged in.');</script>";
    echo "<script>location.href = 'http://localhost/Travigo2/home/index';</script>";
  }