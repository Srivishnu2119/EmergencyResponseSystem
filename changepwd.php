<?php
include("config/db_connection.php");
include("config/constants.php");
include("common/functions.php");
include("common/loginsession.php");

$checkusersql2 = "SELECT * from users   where UserID=?";
$stmt2  = $pdo->prepare($checkusersql2);
$stmt2->bindParam(1, $_SESSION['sess_cipluserid'], PDO::PARAM_INT, 6);
$stmt2->execute();
$userdata = $stmt2->fetch(PDO::FETCH_OBJ);
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


    <section class="terms-area section-tb-padding" style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <div class="cipl">
                            <h3>CHANGE PASSWORD</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- order history start -->
    <section class="order-histry-area section-tb-padding" >
        <div class="container" style="margin-bottom: 350px;">
            <div class="row">
                <div class="col">
                    <div class="order-history">
                        <div class="profile">
                            <?php include('common/myaccount.php'); ?>
                        </div>

                        <div class="order-info wow fadeInLeft animated" style="background: #f7f7f7; padding: 10px; min-height:310px; ">
                            <div class="row">
                                <div class="col">
                                    <div class="billing-area" style="width:96%; margin: 0px auto;">
                                        <p>
                                            <span id="spanmsg"></span>
                                        </p>
                                        <div class="billing-address-1">
                                            <ul class="add-name">
                                                <li class="billing-name">
                                                    <label>New Password</label>
                                                    <input type="password" name="Pwd" id="Pwd" placeholder="Password" maxlength="50" placeholder="Enter New Password" tabindex="1">
                                                </li>

                                            </ul>
                                            <ul class="add-name">
                                                <li class="billing-name">
                                                    <label>Confirm New Password</label>
                                                    <input type="password" name="CPwd" id="CPwd" placeholder="Password" maxlength="50" placeholder="Enter Confirm New Password" tabindex="2">
                                                </li>

                                            </ul>


                                            <div class="add-link" style="margin:5px 0 !important;">
                                                <a href="#" class="btn btn-style1" id="changepwd" tabindex="3" style="width:200px;">CHANGE PASSWORD <i class="fa fa-long-arrow-right"></i></a>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- order history end -->
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
        $(document).ready(function() {

            $("#changepwd").click(function() {

                if ($("#Pwd").val() == "") {
                    alert("Enter the Password");
                    $("#Pwd").focus();
                    return false;
                }
                if ($("#CPwd").val() == "") {
                    $("#CPwd").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#CPwd").focus();
                    return false;
                }
                if ($("#Pwd").val().length <= 5) {
                    alert("Password length atleast 6 characters");
                    $("#Pwd").focus();
                    return false;
                }
                if ($("#Pwd").val() != $("#CPwd").val()) {
                    alert("Password and Confirm Password should be same");
                    $("#Pwd").focus();
                    return false;
                }

                //  var dataString = "Pwd=" + $("#Pwd").val();
                var data = {
                    Pwd: $("#Pwd").val()
                };

                $.ajax({
                    type: "POST",
                    url: 'scripts/changepwd',
                    data: data,
                    cache: false,
                    success: function(data) {
                        // alert(data);
                        $("#spanmsg").html(data);

                    },

                    //error: function(XMLHttpRequest, textStatus, errorThrown){alert(XMLHttpRequest.status);}

                });



                return false;

            });
        });
    </script>
</body>

</html>