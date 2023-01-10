<?php if($_SESSION['login'])
{?>
<div class="top-header">
    <div class="container">
        <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
            <li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li class="prnt"><a href="profile.php">Thông tin</a></li>
            <li class="prnt"><a href="change-password.php">Đổi mật khẩu</a></li>
            <li class="prnt"><a href="tour-history.php">Lịch sử đặt</a></li>
            <li class="prnt"><a href="issuetickets.php">Vấn đề giải đáp</a></li>
        </ul>
        <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
            <li class="">Xin chào :</li>
            <li class="sig"><?php echo htmlentities($_SESSION['login']);?></li>
            <li class="sigi"><a href="logout.php">Đăng xuất</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div><?php } else {?>
<div class="top-header">
    <div class="container">
        <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
            <li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class="hm"><a href="admin/index.php">Đăng nhập Admin</a></li>
        </ul>
        <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
            <li class="tol">SĐT : 123-4568790</li>
            <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal">Đăng ký</a></li>
            <li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4">Đăng nhập</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<?php }?>
<!--- /top-header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
    <div class="container">
        <div class="navigation">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil header__navbar" id="bs-example-navbar-collapse-1">

                    <nav class="cl-effect-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index.php" class="header__logo">
                                    <span class="header__logo-img-pc hide-on-mobile-tablet">Travel</span>
                                    <span class="header__logo-img-mobile-tablet">Travel</span>
                                </a>
                            </li>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li><a href="page.php?type=aboutus">Giới thiệu</a></li>
                            <li><a href="package-list.php">Các gói</a></li>
                            <li><a href="page.php?type=privacy">Chính sách</a></li>
                            <li><a href="page.php?type=terms">Điều khoản</a></li>
                            <li><a href="page.php?type=contact">Liên hệ</a></li>
                            <?php if($_SESSION['login'])
{?>
                            <li>Bạn cần trợ giúp?<a href="#" data-toggle="modal" data-target="#myModal3"> / Viết cho
                                    chúng tôi </a> </li>
                            <?php } else { ?>
                            <li><a href="enquiry.php"> Khảo sát </a> </li>
                            <?php } ?>
                            <div class="clearfix"></div>

                        </ul>
                    </nav>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>

        <div class="clearfix"></div>
    </div>
</div>