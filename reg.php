
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet"  href="reg.css">
    <!-- <script>
        function myFunction() {
        alert("Registration Sucessfull!");
        }
    </script> -->
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark" id="nv">
<div class="navbar-header" style="margin-left: 30px;">
      <a class="navbar-brand" href="#">Srank Portal</a>
    </div>
  <ul class="navbar-nav"  style= "padding-left: 50px;">
    <li class="nav-item active">
      <a class="nav-link" href="pagalpanti.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="ABOUTUS.HTML">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Previous</a>
    </li>
  </ul>
</nav>



    <h2 id="wel">WELCOME</h2>                                   
        <form class="col-6 offset-3 form-group  "action="practise_project.php" method="POST">
        
        <div class="row">
            <div class="" id="colm">
                <div class="regi">
                    <form class="form-group " action="practise_project.php" method="POST">
                        <h2 class="cc">
                            Registration
                        </h2>
                        <hr style="color:blue;">
                        <div class="fog">
                            <div class="col">
                                <label for="Name">Name:</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Name" aria-label="Name" required>
                            </div>
                            <div class="col">
                                <label for="Name">Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="abc@example.com" aria-label="Email" required>
                            </div>
                            <div class="col">
                                <label for="Name">Password:</label>
                                <input type="password" class="form-control" name="pass" placeholder="Password" aria-label="Password" minlength="8" maxlength="20" required>
                                <p>Password Must be atleast 8 character.</p>
                            </div>
                            <div class="col">
                                <label for="Name">Password:</label>
                                <input type="password" class="form-control" name="Pass" placeholder="Password" aria-label="Password" minlength="8" maxlength="20" required>
                                <p>Password Must be same as Above.</p>
                            </div>
                            <div class="col">
                                <label for="Name">Phone:</label>
                                <input type="tel" class="form-control" name="phone" placeholder="Phone Number" aria-label="Phone Number" required>
                            </div>
                            <div class="col">
                                <label for="Name">Subject:</label>
                                <input type="text" class="form-control" name="subject" placeholder="Subject" aria-label="Subject" required>
                            </div>
                            
                        </div>
                    </form>
                    <!-- <button onclick="myFunction()">Try it</button> -->
                    <button type="submit" class="btn-sm btnn" onclick="myfunction()">Register</button>
                    
                </div>
            </div>
        </div>
    </form>
    <script>
                        function myFunction() {
                        alert("Hello! I am an alert box!");
                        }
                    </script>
</body>
</html>



