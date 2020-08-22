<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
    header('location: index.php');
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

<body style="padding-top: 50px;">
    <!-- head section  -->
    <?php
    require("includes/header.php");
    include'check_if_added.php';
    ?>
    <!-- row with panels -->
    <div class="container-fluid">
        <br>
        <div class="row" id="item_list">

            <div class="col-sm-4">
                <div class="panel-default">
                    <div class="panel-heading">
                        <h4>#1</h4>
                    </div>
                    
                    <div class="panel-body">
                        <img src="images/mcrop3.jpg" class="img-responsive" alt="mobile-1">
                        <p>4.2' Screen,snap-dragon processor,1 GB RAM .4GB Internal memory.<br>Rs:-5000.</p>
						<?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        
                    </div>
                </div>
            
            </div>
            <div class="col-sm-4">
                <div class="panel-default">
                    <div class="panel-heading">
                        <h4>#2</h4>
                    </div>
                    <div class="panel-body">
                        <img src="images/m2.jpg" class="img-responsive" alt="mobile-1">
                        <p>4.2' Screen,snap-dragon processor,1 GB RAM .4GB Internal memory.<br>Rs:-5000.</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        
                    </div>
                </div>
            </div>
                <div class="col-sm-4">
                    <div class="panel-default">
                        <div class="panel-heading">
                            <h4>#3</h4>
                        </div>
                        <div class="panel-body">
                            <img src="images/mcrop5'.jpg" class="img-responsive" alt="mobile-1">
                            <p>4.2' Screen,snap-dragon processor,1 GB RAM .4GB Internal memory.<br>Rs:-5000.</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="item_list">

                <div class="col-sm-4">
                    <div class="panel-default">
                        <div class="panel-heading">
                            <h4>#4</h4>
                        </div>
                        <div class="panel-body">
                            <img src="images/mobile'.jpg"class="img-responsive" alt="mobile-1">
                            <p>4.2' Screen,snap-dragon processor,1 GB RAM .4GB Internal memory.<br>Rs:-5000.</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        
                        </div>
                    </div>
                
                </div>
                <div class="col-sm-4">
                    <div class="panel-default">
                        <div class="panel-heading">
                            <h4>#5</h4>
                        </div>
                        <div class="panel-body">
                            <img src="images/m6'.jpg" class="img-responsive" alt="mobile-1">
                            <p>4.2' Screen,snap-dragon processor,1 GB RAM .4GB Internal memory.<br>Rs:-5000.</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        
                        </div>
                    </div>
                </div>
                    <div class="col-sm-4">
                        <div class="panel-default">
                            <div class="panel-heading">
                                <h4>#6</h4>
                            </div>
                            <div class="panel-body">
                                <img src="images/m''''crop'.jpg" class="img-responsive" alt="mobile-1">
                                <p>4.2' Screen,snap-dragon processor,1 GB RAM .4GB Internal memory.<br>Rs:-5000.</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        
                            </div>
                        </div>
                    </div>
                </div>
    
        </div>



<?php
require("includes/footer.php");   
?>
</body>
</html>