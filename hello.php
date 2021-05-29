<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>
        body{
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse" style="width: 100%;">
        <div class="container-fluid">
            <div class="navbar-header" style="margin-left: 40px;">
                <a class="navbar-brand" href="#">Srank Portal</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class=""><a href="#">OFFICIAL WEBSITE</a></li>
                <li class=""><a href="ABOUTUS.HTML">ABOUT US</a></li>
                <li class=""><a href="contact.html">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="reg.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-5">
                <h2 class="w3-center">Portpholio</h2>

                <div class="w3-content w3-section" style="max-width:500px">
                    <img class="mySlides" src="hands.jpg" style="width:100%">
                    <img class="mySlides" src="landscape.jpg" style="width:100%">
                    <img class="mySlides" src="nature.jpg" style="width:100%">
                </div>

                <script>
                    var myIndex = 0;
                    carousel();

                    function carousel() {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        myIndex++;
                        if (myIndex > x.length) {
                            myIndex = 1
                        }
                        x[myIndex - 1].style.display = "block";
                        setTimeout(carousel, 3000);
                    }
                </script>
            </div>
        </div>
    </div>

    <div class="row" style="height:400px"></div>

    <div class="row">
        <div class="row content"></div>
    </div>
    <div class="row" style="color: black; background-color: darkgray; padding: 40px;">
            <div class="col-sm-6" >
                <ul id="about">
                    <h5>About</h5>
                    <li>Home</li>
                    <li>Contact Us</li>
                    <li>Feedback</li>
                    <li>Help</li>
                </ul>
            </div>

            <div class="col-sm-6">
                <ul>
                    <h5>Social</h5>
                    <li>Instagram</li>
                    <li>Twitter</li>
                    <li>Facebook</li>
                </ul>
            </div>

        </div>


    </div>
</body>

</html>