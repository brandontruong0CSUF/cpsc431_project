<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/signin.css"></script>
    <title>Login - Course Management System</title>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="login.php" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
      </form>
    <!--
      <form class="form-signin" method="POST" action="register.php">
        <h3> Or register as a student </h3>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      </form>
    -->
    </div>

    <!-- Load these after page is finished downloading -->
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
  </body>
</html>

