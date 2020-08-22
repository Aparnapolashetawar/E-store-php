<?php
require("includes/common.php");
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
     ?>
<!-- row with panels -->
<div class="container-fluid">
        <br>
        <div class="row" id="item_list">

            <div class="col-sm-4">
                <div class="panel-default">
                    <div class="panel-heading">
                        <h4>Mobile 1</h4>
                    </div>

                    <div class="panel-body">
                        <img src="images/mcrop3.jpg" class="img-responsive" alt="mobile-1">
                        <p>4.2' Screen,snap-dragon processor,1 GB RAM .4GB Internal memory.<br>Rs:-5000.</p>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Add to Cart
                            
                        </button>
                        
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="panel-default">
                    <div class="panel-heading">
                        <h4>Mobile 2</h4>
                    </div>
                    <div class="panel-body">
                        <img src="images/m2.jpg" class="img-responsive" alt="mobile-1">
                        <p>4.2' Screen,snap-dragon processor,1 GB RAM .4GB Internal memory.<br>Rs:-5000.</p>
                         <button type="submit" name="submit" class="btn btn-primary btn-block">Add to Cart
                            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel-default">
                    <div class="panel-heading">
                        <h4>Mobile 3</h4>
                    </div>
                    <div class="panel-body">
                        <img src="images/mcrop5'.jpg" class="img-responsive" alt="mobile-1">
                        <p>4.2' Screen,snap-dragon processor,1 GB RAM .4GB Internal memory.<br>Rs:-5000.</p>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Add to Cart
                            
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="item_list">

            <div class="col-sm-4">
                <div class="panel-default">
                    <div class="panel-heading">
                        <h4>Mobile 4</h4>
                    </div>
                    <div class="panel-body">
                        <img src="images/mobile'.jpg" class="img-responsive" alt="mobile-1">
                        <p>4.2' Screen,snap-dragon processor,1 GB RAM .4GB Internal memory.<br>Rs:-5000.</p>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Add to Cart
                            
                        </button>
                            
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="panel-default">
                    <div class="panel-heading">
                        <h4>Mobile 5</h4>
                    </div>
                    <div class="panel-body">
                        <img src="images/m6'.jpg" class="img-responsive" alt="mobile-1">
                        <p>4.2' Screen,snap-dragon processor,1 GB RAM .4GB Internal memory.<br>Rs:-5000.</p>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Add to Cart
                            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel-default">
                    <div class="panel-heading">
                        <h4>Mobile 6</h4>
                    </div>
                    <div class="panel-body">
                        <img src="images/m''''crop'.jpg" class="img-responsive" alt="mobile-1">
                        <p>4.2' Screen,snap-dragon processor,1 GB RAM .4GB Internal memory.<br>Rs:-5000.</p>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Add to Cart
                            
                        </button>
                    </div>
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