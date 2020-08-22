<?php
require("includes/common.php");
// redirect to homapage if login 
if (isset($_SESSION['email'])) {
    header('location: homepage.php');
}
?>
<!DOCTYPE html>

<head>
    <title>index</title>
    <link rel="stylesheet" href="bootstrap-3.3.7/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="bootstrap-3.3.7/bootstrap-3.3.7-dist/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap-3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body style="padding-top: 50px;min-height:500px;">
    <!-- header navbar  -->
    <?php
    require("includes/header.php");
    ?>
    <!-- body section  -->
    <div class="container space">
        <br>
        <br>
        <div class="col-sm-6">
            <img src="images/m7'.jpg" class="img-responsive" alt="mobile">
        </div>
        <div class="col-sm-6">
            
        <form  action="sign_script.php" method="POST">
            <h2>SIGN UP</h2>
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true"><?php echo $_GET['m1']; ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true"><?php echo $_GET['m2']; ?>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>   
        
            
        </div>
    </div>
    <!-- footer section  -->
    <?php
    require("includes/footer.php");
    ?>
    </body>
    </html>






















</body>