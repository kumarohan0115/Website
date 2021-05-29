<?php

    include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrol_stu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="enrol.css">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<body>


<nav class="navbar navbar-expand-lg bg-dark navbar-dark" style="color: white;">
<div class="navbar-header">
      <a class="navbar-brand" href="pagalpanti.php">Srank Portal</a>
    </div>
  <ul class="navbar-nav"  style= "padding-left: 50px;">
    <li class="nav-item active">
      <a class="nav-link" href="pagalpanti.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="ABOUTUS.HTML">About</a>
    </li>
    </ul>
    <ul class="nav-item navbar-nav navbar-right" style="color:white; margin-left:800px; background-color: black;">
      <li id="lk"><a href="login.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  
</nav>

    <div class="cotainer">
        <div class="t_name">
            <h3>
                <?php
                    echo "WELCOME". $_SESSION["tname"];
                ?>
            </h3>
        </div>
        <div class="row rooo">
            <div class="col-4 offset-1" id="enrol">
                <form class="form-group"  action="registerfor_student.php" method="POST" id="newen" >
                    <div class="row">
                        <h5 id="t">
                            New Enrollment
                        </h5>
                    </div>
                    <div class="roll">
                        <label for="ID">ID:</label>
                        <input type="text" class="form-control" name="SID" placeholder="Student ID" required>
                    </div>
                    <div class="roll">
                        <label for="First name">First Name:</label>
                        <input type="text" class="form-control" name="F_name" placeholder="First name" required>
                    </div>
                    <div class="roll">
                        <label for="Last name">Last Name:</label>
                        <input type="text" class="form-control" name="L_name" placeholder="last name(Optional)">
                    </div>
                    <div class="roll">
                        <label for="First name">Branch</label>
                        <input type="text" class="form-control" name="branch" placeholder="Branch" required>
                    </div>
                    <div class="roll">
                        <label for="section">Section</label>
                        <input type="text" class="form-control" name="section" placeholder="Section" required>
                    </div>
                    <div class="roll">
                        <label for="tname">Mentor:</label>
                        <input type="text" class="form-control" name="tname" autocomplete="" placeholder="Mentor Name">
                    </div>

                    <button type="submit" class="btn-sm">Enroll</button>
                </form>

            </div>
            


            <div class="col-4 offset-2" id="bod">
                <div class="row">
                    <h3 id="b_head">
                        Branch Exist
                    </h3>
                </div>
                <hr>
                <div class="row" id="cs">
                    <h4><a href="cse.php">Computer Science Engineering(CSE)</a></h4>

                </div>
                <div class="row" id="it">
                    <h4><a href="it.php">Information Tchnology</a></h4>
                </div>
                <div class="row" id="ec">
                    <h4><a href="ec.php">Electronic Engineering</a></h4>
                </div>
                <div class="row" id="me">
                    <h4><a href="me.php">Mechanical Engineering</a></h4>
                </div>
                <div class="row" id="civil">
                    <h4><a href="civil.php">Civil Engineering</a></h4>
                </div>
            </div>
        </div>
    </div>
</body>
</html>