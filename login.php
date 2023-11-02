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
    <title>Login </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="">

    <!-- Favicon -->

    <?php include("common/css.php"); ?>
</head>

<body>

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

    <!-- login start -->
    <section class="section-tb-padding">
        <div class="container" style="min-height:60vh !important;">
            <div class="row">

                <div class="col-md-4 offset-md-4">
                    <div class="login-area">
                        <div class="login-box">
                            <h3 style="letter-spacing: 2px; font-size:24px; font-weight:400 !important; text-align: center;">
                                LOGIN</h3>
                            <p>Please enter your e-mail and password:</p>
                            <span id="spanmsg"></span>
                            <form action="#" method="post">

                                <input type="text" name="email_id" id="email_id" placeholder="Email Address" tabindex="1">
                                <input type="password" name="Pwd" id="Pwd" placeholder="Password" tabindex="2">
                                <a href="#" id="login" class="btn btn-sm animated-button thar-three" tabindex="3">LOGIN</a>


                                <p> <a href="forgotpassword.php" class="re-password" style="color:#005499; font-weight:500;">Forgot Password?</a><br>
                                    <span>Don't have an account? <a href="register.php" style="color: crimson;">Register Now</a></span>
                                </p>
                            </form>
                        </div>

                    </div>
                </div>

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

                if ($("#email_id").val() == "") {
                    alert("Enter the EmailID");
                    $("#email_id").focus();
                    return false;
                }
                var sEmail = $("#email_id").val();
                if (!validateEmail(sEmail)) {
                    alert('Invalid Email Address');
                    $("#email_id").focus();
                    return false;
                }
                if ($("#Pwd").val() == "") {
                    alert("Enter the Password");
                    $("#Pwd").focus();
                    return false;
                }
                //   var dataString = "email_id=" + $("#email_id").val() + "&Pwd=" + $("#Pwd").val();


                var data = {
                    email_id: $("#email_id").val(),
                    Pwd: $("#Pwd").val()
                };

                $.ajax({
                    type: "POST",
                    url: 'scripts/userlogin.php',
                    data: data,
                    cache: false,
                    success: function(data) {
                        if (data == 1) {
                            location.href = "cart.php";
                        } else if (data == 2) {
                            location.href = "myaccount.php";
                        } else {
                            $("#spanmsg").html(data);
                        }
                    }
                });

                return false;

            });
        });
    </script>
</body>

</html>