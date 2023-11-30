<?php
include("config/db_connection.php");
include("config/constants.php");
include("common/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Forgot Password </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="">

    <!-- Favicon -->

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

    </header>
    <!-- Header End -->


    <!-- Forgot Password start -->
    <section class="section-tb-padding">
        <div class="container" style="min-height:80vh !important;">
            <div class="row">
                <div class="col-md-4  offset-md-4">
                    <div class="login-area">
                        <div class="login-box">
                            <h3 style="letter-spacing: 2px; font-size:24px; font-weight:400 !important; text-align: center;">
                                FORGOT PASSWORD</h3>
                            <span id="spanmsg"></span>
                            <p>Please enter your email:</p>
                            <form action="#" method="post" name="frmforgot" id="frmforgot">

                                <input type="text" id="EmailID" name="EmailID" placeholder="Email Address" tabindex="1">

                                <a href="#" class="btn btn-sm animated-button thar-three" id="login" tabindex="2">SUBMIT</a>
                                <p>
                                    <span>Remember your password? Back to <a href="login.php" style="color: crimson;" tabindex="3">
                                            Login</a></span>
                                </p>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Forgot Password end -->
    <!-- footer start -->
    <?php //include("common/mainfooter.php"); 
    ?>
    <!-- footer end -->
    <!-- footer copyright start -->
    <?php //include("common/footer1.php"); 
    ?>
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
        function validateEmail(sEmail) {
            var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
            if (filter.test(sEmail)) {
                return true;
            } else {
                return false;
            }
        }
        $(document).ready(function() {

            $("#login").click(function() {

                if ($("#EmailID").val() == "") {
                    alert("Enter the EmailID");
                    $("#EmailID").focus();
                    return false;
                }
                var sEmail = $("#EmailID").val();
                if (!validateEmail(sEmail)) {
                    alert('Invalid Email Address');
                    $("#EmailID").focus();
                    return false;
                }

                //var dataString = "EmailID=" + $("#EmailID").val();
                var data = {
                    EmailID: $('#EmailID').val()
                };
                $.ajax({

                    type: "POST",
                    url: 'scripts/forgotpwd.php',
                    data: data,
                    cache: false,
                    success: function(data) {
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