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
    <?php
    require("includes/header.php");
    ?>
    <div class="row decor_bg space">
        <div class="col-md-6 col-md-offset-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td><td>Total</td><td>Rs </td><td><a href='success.html' class='btn btn-primary'>Confirm Order</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <?php
    require("includes/footer.php");
    ?>
    </body>
</html>