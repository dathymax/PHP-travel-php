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
    <?php include('includes/slider.php') ?>


    <!--- rupes ---->
    <div class="container">
        <div class="rupes">
            <div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                <div class="rup-left">
                    <a href="offers.html"><i class="fa fa-usd"></i></a>
                </div>
                <div class="rup-rgt">
                    <h3>UP TO USD. 50 OFF</h3>
                    <h4><a href="offers.html">TRAVEL SMART</a></h4>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                <div class="rup-left">
                    <a href="offers.html"><i class="fa fa-h-square"></i></a>
                </div>
                <div class="rup-rgt">
                    <h3>UP TO 70% OFF</h3>
                    <h4><a href="offers.html">ON HOTELS ACROSS WORLD</a></h4>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                <div class="rup-left">
                    <a href="offers.html"><i class="fa fa-mobile"></i></a>
                </div>
                <div class="rup-rgt">
                    <h3>FLAT USD. 50 OFF</h3>
                    <h4><a href="offers.html">US APP OFFER</a></h4>

                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <!--- /rupes ---->




    <!---holiday---->
    <div class="container">
        <div class="holiday">

            <h3>Danh sách Tours</h3>


            <?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
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
                    <a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Chi
                        tiết</a>
                </div>
                <div class="clearfix"></div>
            </div>

            <?php }} ?>


            <div><a href="package-list.php" class="view">Xem thêm</a></div>
        </div>
        <div class="clearfix"></div>
    </div>



    <!--- routes ---->
    <div class="routes">
        <div class="container">
            <div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
                <div class="rou-left">
                    <a href="#"><i class="glyphicon glyphicon-list-alt"></i></a>
                </div>
                <div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
                    <h3>80000</h3>
                    <p>Enquiries</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 routes-left">
                <div class="rou-left">
                    <a href="#"><i class="fa fa-user"></i></a>
                </div>
                <div class="rou-rgt">
                    <h3>1900</h3>
                    <p>Regestered users</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
                <div class="rou-left">
                    <a href="#"><i class="fa fa-ticket"></i></a>
                </div>
                <div class="rou-rgt">
                    <h3>7,00,00,000+</h3>
                    <p>Booking</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

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