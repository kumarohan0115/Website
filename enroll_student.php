<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="enroll.css">
</head>
<body>
    <div class="cotainer">
        <div class="t_name">
            <h3>
                Welcome(teachername) 
            </h3>
        </div>
        <div class="row rooo">
            <div class="col-5 offset-1" id="enrol">
                <form class="form-group"  action=registerfor_student.php" method="POST"  id="newen" >
                    <div class="row">
                        <h5>
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
                        <input type="text" class="form-control" name="L_name" placeholder="First name(Optional)">
                    </div>
                    <div class="roll">
                        <label for="First name">Branch</label>
                        <input type="text" class="form-control" name="branch" placeholder="Branch" required>
                    </div>
                    <div class="roll">
                        <label for="section">Setion</label>
                        <input type="text" class="form-control" name="section" placeholder="Section" required>
                    </div>
                    <button type="submit" class="btn-sm">Enroll</button>
                </form>

            </div>
            
            <div class="col-5 offset-2">
                <div class="row">
                    <h3 id="b_head">
                        Branch Exist
                    </h3>
                </div>
                <hr>
                
                <div class="row" id="cs">
                    <h4><a href="cs.php">Computer Science Engineering(CSE)</a></h4>
                </div>
                <div class="row" id="it">
                    <h4><a href="IT.php">Information Tchnology</a></h4>
                </div>
                <div class="row" id="ec">
                    <h4><a href="ec.php">Electronic Engineering</a></h4>
                </div>
            </div>
        </div>
    </div>
</body>
</html>