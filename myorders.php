<?php
include("config/db_connection.php");
include("config/constants.php");
include("common/functions.php");
include("common/loginsession.php");
$paymentsql = "SELECT * from  orderpayments where UserID=? ORDER BY OrderPaymentID DESC";
$p_stmt  = $pdo->prepare($paymentsql);
$p_stmt->bindParam(1, $_SESSION['sess_cipluserid'], PDO::PARAM_INT, 8);
$p_stmt->execute();
$paymentdata = $p_stmt->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("common/googletag_head.php"); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>My Account- Charis Initiatives </title>
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


    <section class="terms-area section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">

                        <h3 style="letter-spacing: 2px; font-size:24px; font-weight:400 !important;">MY ORDERS
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- order history start -->
    <section class="order-histry-area section-tb-padding" style="margin-bottom: 150px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="order-history">
                        <div class="profile">
                            <?php include('common/myaccount.php'); ?>
                        </div>
                        <di v class="order-info" style="background: #f7f7f7; padding: 10px; min-height:310px;">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="box-border wow fadeInLeft animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">


                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.No</th>
                                                        <th>OrderNo</th>
                                                        <th>Amount</th>
                                                        <th>Date</th>
                                                        <th>Payment Status</th>
                                                        <th>Message</th>
                                                        <th>Order Status</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $k = 1;
                                                    foreach ($paymentdata as $val) {
                                                        $invsql = "SELECT * from  invoice where InvoiceID=?";
                                                        $i_stmt  = $pdo->prepare($invsql);
                                                        $i_stmt->bindParam(1, $val->INVOICEID, PDO::PARAM_INT, 8);
                                                        $i_stmt->execute();
                                                        $invdata = $i_stmt->fetch(PDO::FETCH_OBJ);

                                                        if ($invdata->DELIVERYSTATUS == 0) {
                                                            $delivery = '<span class="label" style="background-color: #512a2a !important;">Payment not done</span>';
                                                        } else if ($invdata->DELIVERYSTATUS == 1) {
                                                            $delivery = '<span class="label" style="background-color: #b22d2d !important;">New</span>';
                                                        } else if ($invdata->DELIVERYSTATUS == 2) {
                                                            $delivery = '<span class="label " style="background-color: #f9c808 !important;">In Process</span>';
                                                        } else if ($invdata->DELIVERYSTATUS == 3) {
                                                            $delivery = '<span class="label" style="background-color: #0839f9 !important;">In Transit</span>';
                                                        } else if ($invdata->DELIVERYSTATUS == 4) {
                                                            $delivery = '<span class="label" style="background-color: red !important;">Cancelled</span>';
                                                        } else if ($invdata->DELIVERYSTATUS == 5) {
                                                            $delivery = '<span class="label new">Completed</span>';
                                                        } else {
                                                            $delivery = '';
                                                        }

                                                    ?>
                                                        <tr>
                                                            <td>#<?php echo $k; ?></td>
                                                            <td><?php echo $val->ORDERNO; ?></td>

                                                            <td><?php echo $val->ORDERAMOUNT; ?> </td>
                                                            <td><?php echo $val->TXTIME; ?> </td>
                                                            <td><?php echo $val->TXSTATUS; ?> </td>
                                                            <td><?php echo str_replace("00::", '', $val->TXMSG); ?> </td>
                                                            <td><?php echo $delivery; ?></td>
                                                            <td class="text-right">
                                                                <a class="btn btn-warning btn-sm" href="javascript:void(0);" onClick="funViewOrder(<?php echo $val->INVOICEID; ?>)">View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                        $k++;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </di>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- order history end -->

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
    <script>
        function funViewOrder(id) {

            var spinHandle = loadingOverlay.activate();
            setTimeout(function() {
                loadingOverlay.cancel(spinHandle);
            }, 1000);
            var frm = document.frmvieworder;
            frm.id.value = id;
            frm.submit();
        }
    </script>

    <form name="frmvieworder" action="vieworder" method="post">
        <input type="hidden" name="id" value="">
    </form>

</body>

</html>