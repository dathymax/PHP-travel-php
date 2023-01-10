<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
	{	
header('location:index.php');
}
else{
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Best Travel</title>
    <?php include('includes/import.php');?>

    <style>
    .errorWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #dd3d36;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }

    .succWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #5cb85c;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }
    </style>
</head>

<body>
    <?php include('includes/header.php');?>
    <?php include('includes/slider.php');?>
    <!--- privacy ---->
    <div class="privacy">
        <div class="container">
            <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Issue Tickets</h3>
            <form name="chngpwd" method="post" onSubmit="return valid();">
                <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?>
                </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                <p>
                <table border="1" width="100%">
                    <tr align="center">
                        <th>#</th>
                        <th>Ticket Id</th>
                        <th>Issue</th>
                        <th>Description</th>
                        <th>Admin Remark</th>
                        <th>Reg Date</th>
                        <th>Remark date</th>

                    </tr>
                    <?php 

                        $uemail=$_SESSION['login'];;
                        $sql = "SELECT * from tblissues where UserEmail=:uemail";
                        $query = $dbh->prepare($sql);
                        $query -> bindParam(':uemail', $uemail, PDO::PARAM_STR);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $result)
                        {	?>
                    <tr align="center">
                        <td><?php echo htmlentities($cnt);?></td>
                        <td width="100">#TKT-<?php echo htmlentities($result->id);?></td>
                        <td><?php echo htmlentities($result->Issue);?></td>
                        <td width="300"><?php echo htmlentities($result->Description);?></td>
                        <td><?php echo htmlentities($result->AdminRemark);?></td>
                        <td width="100"><?php echo htmlentities($result->PostingDate);?></td>
                        <td width="100"><?php echo htmlentities($result->AdminremarkDate);?></td>
                    </tr>
                    <?php $cnt=$cnt+1; }} ?>
                </table>

                </p>
            </form>


        </div>
    </div>
    <!--- /privacy ---->
    <!--- footer-top ---->
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
</body>

</html>
<?php } ?>