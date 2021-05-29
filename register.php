<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style_reg.css">
</head>
<body>
    <form action="">
    <?php
        $connective= mysqli_connect("localhost","root","","shashank") or die("connection failed");
        $query_mysql="SELECT *FROM student_table ";

        $RESULT=mysqli_query($connective,$query_mysql) or die("query failed");

        if(mysqli_num_rows($RESULT)>0)
        {
        ?> 
                <h2 class="heading">Attendance Register</h2>
                <div class="form">
                    <input type="search" name="search" placeholder="SEARCH">
                    <!-- <button> -->
                    <!-- <button type="button"
                        onclick="document.getElementById('date_time_button').innerHTML = Date()">
                        Click and see Date and Time.</button>

                        <p id="date_time_button"></p></button> -->

                        <input id="integer" type="number">

                        <button type="button" onclick="myFunction()">Submit</button>

                        <p id="validation_demo"></p>

                        <script>
                        function myFunction() {
                            var val, msg;

                            // Get the value of input field with id="numb"

                            val = document.getElementById("integer").value;

                            // If x is Not a Number or less than one or greater than 10

                            if (isNaN(val) || val < 1 || val > 100) {
                                msg = "Input is not valid";
                            } else {
                                msg = "Input is OK";
                            }
                            document.getElementById("validation_demo").innerHTML = msg;
                        }
                        </script>
                </div>
                <div class="attributes">
                <h2 class="date">
                    Date:<?php echo  date("d/m/Y")?>
                    <!-- <script>
                        function myFunction() {
                        var d = new Date();
                        var n = d.toLocaleString();
                        document.getElementById("demo").innerHTML = n;
                        }
                    </script> -->
                </h2>
                <table style="border:1px">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Branch</th>
                        <th>Section</th>
                        <th>Status</th>
                        <th>DATE</th>
                    </tr>
                
                    
                    <?php while($rowforjoin=mysqli_fetch_assoc($RESULT))
                    {
                        ?>
                        <tr>
                            
                            <td><?php echo $rowforjoin['STU_ID']?></td>
                            <td><?php echo $rowforjoin['STU_NAME']?> </td>
                            <td><?php echo $rowforjoin['BRANCH'] ?></td>
                            <td><?php echo $rowforjoin['SECTION'] ?> </td>
                            <td><button id="p" type="submit">P</button>
                                <button id="a" type="submit">A</button>
                            </td>
                            <td><?php echo $rowforjoin['DATE'] ?> </td>
                        </tr>
                    <?php }

                    ?>
                    
                    
                    

                </table>
            </div>

        <?php }
         ?>

    
    </form>
</body>
</html>
