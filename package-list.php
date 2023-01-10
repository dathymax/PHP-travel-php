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
    <!--//end-animate-->
</head>

<body>
    <?php include('includes/header.php');?>
    <?php include('includes/slider.php');?>
    <!--- rooms ---->
    <div class="rooms">
        <div class="container">

            <div class="room-bottom">
                <h3>Danh sách Tours</h3>

                <?php $sql = "SELECT * from tbltourpackages";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                {	?>
                <div class="rom-btm">
                    <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                        <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>"
                            class="img-responsive" alt="">
                    </div>
                    <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                        <h4>Tên Tour: <?php echo htmlentities($result->PackageName);?></h4>
                        <h6>Kiểu Tour: <?php echo htmlentities($result->PackageType);?></h6>
                        <p><b>Vị trí Tour:</b> <?php echo htmlentities($result->PackageLocation);?></p>
                        <p><b>Đặc điểm</b> <?php echo htmlentities($result->PackageFetures);?></p>
                    </div>
                    <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                        <h5>USD <?php echo htmlentities($result->PackagePrice);?></h5>
                        <a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>"
                            class="view">Chi tiết</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <?php }} ?>



            </div>
        </div>
    </div>
    <!--- /rooms ---->

    <!--- /footer-top ---->
    <?php include('includes/footer.php');?>
    <!-- signup -->
    <?php include('includes/signup.php');?>
    <!-- //signu -->
    <!-- signin -->
    <?php include('includes/signin.php');?>
    <!-- //signin -->
    <!-- write us -->
    <?php include('includes/write-us.php');?>
    <!-- //write us -->
</body>

</html>