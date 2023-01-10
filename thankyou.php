<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Best Travel</title>
    <?php include('includes/import.php');?>
</head>

<body>
    <?php include('includes/header.php');?>
    <?php include('includes/slider.php');?>
    <!--- /banner-1 ---->
    <!--- contact ---->
    <div class="contact">
        <div class="container">
            <h3>Confirmation</h3>
            <div class="col-md-10 contact-left">
                <div class="con-top animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms"
                    style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">


                    <h4> <?php echo htmlentities($_SESSION['msg']);?></h4>

                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <!--- /contact ---->
        <?php include('includes/footer.php');?>
        <!-- sign -->
        <?php include('includes/signup.php');?>
        <!-- signin -->
        <?php include('includes/signin.php');?>
        <!-- //signin -->
        <!-- write us -->
        <?php include('includes/write-us.php');?>
        <!-- //write us -->
</body>

</html>