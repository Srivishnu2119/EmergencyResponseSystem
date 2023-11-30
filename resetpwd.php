<?php
include("config/db_connection.php");
include("config/constants.php");
include("common/functions.php");
if ($_SESSION['sess_cipluserid'] != "") {
    header("Location:index.php");
    exit;
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
                <div class="col-md-4 offset-md-4">
               
                    <div class="login-area">
                        <div class="login-box">
                            <h3 style="letter-spacing: 2px; font-size:24px; font-weight:400 !important; text-align: center;">
                                RESET PASSWORD</h3>

                            <span id="spanmsg"></span>
                            <form action="#" method="post">
                                <input type="hidden" name="RandID" id="RandID" value="<?php echo $_REQUEST['rid']; ?>">


                                <input type="password" name="Pwd" id="Pwd" placeholder="Password" tabindex="1">
                                <input type="password" name="CPwd" id="CPwd" placeholder="Confirm Password" tabindex="2">
                                <a href="#" id="resetpwd" class="btn btn-sm animated-button thar-three" tabindex="3">Submit</a>

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
    <?php include("common/footer1.php"); ?>
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

            $("#resetpwd").click(function() {

                if ($("#Pwd").val() == "") {
                    $("#Pwd").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
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

                var dataString = "Pwd=" + $("#Pwd").val() + "&RandID=" + $("#RandID").val();

                var data = {
                    RandID: $("#RandID").val(),
                    Pwd: $("#Pwd").val()
                };
                $.ajax({

                    type: "POST",

                    url: "scripts/resetpwd",

                    data: dataString,

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