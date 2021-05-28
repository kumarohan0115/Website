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
    <form action="dataAndtime.php" method="POST" >
    <?php
        $connective= mysqli_connect("localhost","root","","shashank") or die("connection failed");
        $query_mysql="SELECT *FROM student_table ";

        $RESULT=mysqli_query($connective,$query_mysql) or die("query failed");

        if(mysqli_num_rows($RESULT)>0)
        {
        ?>
                <h2 class="heading">Attendance Register</h2>
                <div class="attributes">
                <h2  class="date">Date:<input type="date" name="Date"><button id="p" type="submit">ok </button></h2> 
                <table style="border:1px">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Branch</th>
                        <th>Section</th>
                        <th>Status</th>
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
