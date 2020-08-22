<!DOCTYPE html>

<head>
    <title>index</title>
    <link rel="stylesheet" href="bootstrap-3.3.7/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="bootstrap-3.3.7/bootstrap-3.3.7-dist/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap-3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body style="padding-top: 50px;min-height:500px;">
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">E-Store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="loginpage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About us</a></li>
                    <li><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span> Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container space">
        <div class="row">
            <div class="col-sm-8">
                <h1>CONTACT US</h1>
                <p>We are just creating the e-commerce website for selling the mobile phones and if you have any problem regarding to it then contact us ,so that we will help you</p>
            </div>
            <div class="col-sm-2">
                <img src="images/womancrop.jpg" height="250px" width="300px" alt="woman">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <form>
                    <h1>CONTACT US</h1>
                    Name:<br>
                    <input type="text" name="name">
                    <br>
                    <br>
                    Email:<br>
                    <input type="email" name="email">
                    <br>
                    <br>
                    Message:<br>
                    <textarea name="message"></textarea>
                    <br>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary ">Submit
                    </button>
                </form>
            </div>
            <div class="col-sm-4">
                <h1>Company Information</h1>
                <p>Lorem ipsum dolor sit amet </p>
                <br>
                <p>Lorem ipsum dolor sit amet </p>
                <br>
                <p>Lorem ipsum dolor sit amet </p>
                <br>
                <p>Lorem ipsum dolor sit amet </p>
                <br>
                <p>Lorem ipsum dolor sit amet </p>
                <br>
                <p>Lorem ipsum dolor sit amet </p>
                <br>
                <p>Lorem ipsum dolor sit amet </p>
                <br>

            </div>
        </div>
    </div>
    <div class="container" id="foot">
        <footer>
            <div class="row">
                <div class="col-sm-4">
                    <h3>Information</h3>
                    <br>
                    <p><a href="#" class="link">About us</a></p>
                    <p><a href="#" class="link">Contact us</a></p>
                </div>
                <div class="col-sm-4">
                    <h3>My Account</h3>
                    <br>
                    <p><a href="#" class="link">Login</a></p>
                    <p><a href="#" class="link">Sign up</a></p>
                </div>
                <div class="col-sm-4">
                    <h3>Contact Us</h3>
                    <br>
                    <p>Contact: +91-123-000000</p>
                </div>
            </div>
        </footer>

</body>