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
    <title>Hospital</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("common/css.php"); ?>
    <style>
        a.animated-button:link {
            padding: 4px 10px !important;
        }

        p {
            margin-top: 0px !important;
            margin-bottom: 1rem;
        }
    </style>
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

    <section class="terms-area section-tb-padding" style="min-height:80vh; margin-top:10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="cipl">
                        <h3>ABC <span>HOSPITAL</span></h3>
                    </div>


                    <br>
                    <div class="terms-content row" style="line-height: 25px; text-align: justify;">
                        <div class="col-md-8">

                            <p><b><i>Welcome to ABC Hospital Name</i></b></p>

                            <p>ABC Hospital is a leading healthcare institution dedicated to providing high-quality medical services and compassionate care to patients in [City/Area] and beyond. With a rich history of serving the community for [X] years, we are committed to the well-being and health of our patients.</p>
                            <p><b><i> Mission:</i></b></p>

                            <p>Our mission is to improve the health and quality of life of the people we serve through exceptional patient care, innovative medical research, and comprehensive educational programs. We strive to be a healthcare leader known for delivering outstanding clinical care with unwavering compassion and commitment.</p>



                        </div>
                        <div class="col-md-4">

                            <img src="image/hospital.jpg" style="width:80%;">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
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