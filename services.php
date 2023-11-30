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
    <title>Services</title>
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
                        <h3> <span>Services</span></h3>
                    </div>


                    <br>
                    <div class="terms-content row" style="line-height: 25px; text-align: justify;">
                        <div class="col-md-8">


                            <p><b><i> Services:</i></b></p>
                            <p>General Medical Services: We offer a wide range of medical services, including routine check-ups, diagnostics, and preventive care to address the healthcare needs of individuals and families.</p>

                            <p>Specialized Care: Our hospital features specialized departments and centers, including Cardiology, Oncology, Orthopedics, Obstetrics & Gynecology, and more, staffed by dedicated experts.</p>

                            <p>Emergency Care: Our state-of-the-art Emergency Room is open 24/7 to provide immediate medical attention to those in need.</p>

                            <p>Surgical Excellence: We have cutting-edge surgical facilities and a team of skilled surgeons to perform a variety of procedures.</p>

                            <p>Imaging and Diagnostic Services: Our hospital is equipped with advanced imaging technologies, such as MRI, CT, and X-ray, to assist in accurate diagnoses.</p>

                            <p>Laboratory Services: We offer a full-service laboratory for comprehensive testing and analysis.</p>


                            <p><b><i> Values:</i></b></p>
                            <p>Patient-Centered Care: Our patients are at the heart of everything we do. We focus on individual needs, dignity, and respect in the delivery of care.</p>

                            <p><b>Excellence:</b> We strive for excellence in clinical outcomes, patient safety, and customer service.</p>

                            <p><b>Compassion: </b>We approach our patients and their families with empathy and kindness.</p>

                            <p><b>Collaboration: </b>We work together as a team of healthcare professionals to provide the best care possible.</p>

                            <p><b>Innovation:</b> We embrace the latest medical technologies and research to improve patient outcomes.</p>

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