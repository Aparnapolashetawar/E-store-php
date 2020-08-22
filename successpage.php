<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: homepage.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
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
    
        <div class="container-fluid space" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="index.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php
        require("includes/footer.php");
        ?>
    </body>
</html>