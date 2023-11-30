<?php
include("config/db_connection.php");
include("config/constants.php");
include("common/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php include("common/googletag_head.php"); ?>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Title -->
  <title>404 Error Page - Charis Initiatives - The Best Creative Products</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include("common/metatags.php"); ?>
  <?php include("common/css.php"); ?>

  <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>css/animate.css">
<style>
    
    .section{
  padding: 3rem 2rem 4rem 2rem;
}

  .section .error {
    font-size: 140px;
    color: #970000;
    text-shadow: 1px 1px 1px #930a00, 2px 2px 1px #c30d00, 3px 3px 1px #ab0c00, 4px 4px 1px #9d0b00, 5px 5px 1px #7a0800, 6px 6px 1px #870000, 7px 7px 1px #7e0a00, 8px 8px 1px #440500, 25px 25px 8px rgba(0,0,0, 0.2);
}

.page{
  margin: 2rem 0;
  font-size: 24px;
  font-weight: 500;
  color: #444;
}

.back-home{
  display: inline-block;
  border: 2px solid #222;
  color: #222;
  text-transform: uppercase;
  font-weight: 600;
  padding: 0.75rem 1rem 0.6rem;
  transition: all 0.2s linear;
  box-shadow: 0 3px 8px rgba(0,0,0, 0.3);
}
.back-home:hover{
  background: #222;
  color: #ddd;
}
</style>

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
    <?php //include("common/mobilemenubar.php"); 
    ?>
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

          <!--<div class="cipl">-->
          <!--  <h3>404<span>Page</span></h3>-->
          <!--</div>-->


          <!--<br>-->
          <div class="terms-content row" style="line-height: 25px; text-align: justify;">
            <!--<a href="index.php"><img src="image/page-not-found.png" width="100%"></a>-->


                <div class="section text-center">
                  <h1 class="error">404</h1>
                  <div class="page"> <span style="color:#970000;"> Ooops!!!</span> <br> <b>The page you are looking for is not found </b></div>
                  <a class="back-home" href="index.php">Back to home</a>
                </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer start -->
  <?php include("common/mainfooter.php"); ?>
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
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>