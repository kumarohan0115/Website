<?php
    $connect=mysqli_connect("localhost","root","","shashank") or die("connection failed ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>

<body>
<nav class="navbar navbar-inverse navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="head">
        <h2 id="wel">Welcome Faculty to Login</h2>
    </div>


    <form action="savemachnism.php" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-7 jjj">
                <h2></h2>
            </div>
            <div class="col-4 form-group login">

                <div><h2 class="heading">Login Page</h2></div>
                <div class="uid">
                    <label for="UID">User ID: <input type="text,email" name="uid" placeholder="Enter User ID" required></label>
                </div>
                <div class="uid">
                    <label for="Password">Password: <input type="password" name="pass" placeholder="Password" minlength="8" maxlength="20" required></label>
                </div>
                <div class="uid">
                    <label for="Forget password"><a href="">Forget Password</a></label>
                    <label for="Forget userid"><a href="">| Forget User-Id</a></label>
                </div>
                <div class="uid">
                    <label for="Registration"><a href="reg.php">Click Here for Registeration</a></label>
                </div>

                <div class="uid">
                    <button type="submit" name="submit">Login</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>

<?php
    mysqli_close($connect);
?>