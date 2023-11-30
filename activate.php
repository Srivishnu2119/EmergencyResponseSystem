<?php
include("config/db_connection.php");
include("config/constants.php");
include("common/functions.php");
$rid =  $_REQUEST['rid'];
$RandID = $rid;
$usersql = "SELECT * from users where RandID=? and UserType=1 and Status=0";
$rstmt = $pdo->prepare($usersql);
$rstmt->bindParam(1, $RandID, PDO::PARAM_STR, 10);
$rstmt->execute();
$check = $rstmt->rowCount();
if ($check == 1) {


    $user_setdata = array(
        'RandID' => $RandID,
        'Status' => 1,
        'URandID' => 0
    );

    $updatesql = "UPDATE users SET  RandID=:URandID,Status=:Status WHERE RandID=:RandID";
    //	$updatesql = "UPDATE users SET  Pwd='" . $Pwd . "', RandID=0 WHERE RandID='" . $RandID . "'";
    $ustmt = $pdo->prepare($updatesql);
    $ustmt->execute($user_setdata);

    if ($ustmt->execute($user_setdata)) {

        //header("Location:login.php");
        echo '<script>location.href="login.php"</script>';
    } // if login user
    else {
        $msg = "Error";
        echo '<font color="#FF0000">' . $msg . '</font>';
    }
} else {
    $msg = "Activation Code Not Found";
    $msg = '<font color="#FF0000">' . $msg . '</font>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("common/googletag_head.php"); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Login - Charis Initiatives </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <?php include("common/metatags.php"); ?>
    <?php include("common/css.php"); ?>
</head>

<body>
    <?php include("common/googletag_body.php"); ?>
    <?php include("common/topmenu.php"); ?>
    <!-- Header Start -->
    <header class="header-area">
        <?php include("common/header.php"); ?>

        <!-- Menu Start  -->
        <section class="menu-area">
            <?php include("common/menubar.php"); ?>
        </section>
        <!-- menu end -->

        <!-- mobile menu start -->
        <?php include("common/mobilemenubar.php"); ?>
        <!-- Mobile menu end -->

        <!-- Cart start -->
        <?php include("common/minicart.php"); ?>
        <!-- Cart end -->

        <!-- mobile search start -->
        <?php include("common/mobilesearchbar.php"); ?>
        <!-- mobile search end -->
    </header>
    <!-- Header End -->

    <!-- login start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="login-area">
                        <div class="login-box">
                            <h3 style="letter-spacing: 5px; font-size:24px; font-weight:400 !important; text-align: center;">
                                Activaton</h3>
                            <p>
                                <?php echo $msg; ?>
                            </p>


                        </div>

                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </section>
    <!-- login end -->

    <!-- footer start -->
    <?php //include("common/mainfooter.php"); 
    ?>
    <!-- footer end -->
    <!-- footer copyright start -->
    <?php include("common/footer.php"); ?>
    <!-- footer copyright end -->


    <!-- Back To Top Start -->
    <a href="javascript:void(0)" class="scroll" id="top">
        <span><i class="fa fa-angle-double-up"></i></span>
    </a>
    <!-- Back To Top End -->
    <div class="mm-fullscreen-bg"></div>
    <!-- Js -->
    <?php include("common/js.php"); ?>

</body>

</html>