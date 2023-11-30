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
    <title> FAQ'S - Charis Initiatives</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("common/metatags.php"); ?>
    <?php include("common/css.php"); ?>
    <style>
        a.animated-button:link {
            padding: 4px 10px !important;
        }

        ul.proLists {
            padding: 0;
            margin: 0;
            display: block;
        }

        ul.proLists li {
            float: left;
            width: 19%;
            padding: 10px;
            margin: 5px;
            text-align: center;
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


    <!-- grid-list start -->
    <section class="section-tb-padding" style="margin:30px 0 !important">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title text-center">
                        <div class="cipl">
                            <h3>Frequently Asked Questions<span> ALL INFO</span></h3>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- grid-list start -->

    <!-- faq's collapse start -->
    <section class="faqs-area section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="faq-box">
                        <ul class="faq-ul">
                            <li class="faq-li">
                                <h3>1. What is CIPL return policy?</h3>
                                <span class="faq-desc">Our 100% buyer protection program allows for easy returns Only for products not as per description/photo on the damaged defective broken" condition.</span>
                            </li>
                            <li class="faq-li">
                                <h3>2. How to raise dispute for an order?</h3>
                                <span class="faq-desc">You can raise a dispute within 7 days of delivery, in by sending an email to support@cipl.com with images of broken defective damaged 7 days of...</span>
                            </li>
                            <li class="faq-li">
                                <h3>3. When will i be refunded?</h3>
                                <span class="faq-desc">Self ship orders We will refund when your item back from warehouse. The refund amount wii be credited within 3 to 5 working days in your Mikshaa Acoount.</span>
                            </li>
                            <li class="faq-li">
                                <h3>4. How to raise dispute for an order?</h3>
                                <span class="faq-desc">You can raise a dispute within 7 days of delivery, in by sending an email to support@cipl.com with images of broken defective damaged 7 days of...</span>
                            </li>
                            <li class="faq-li">
                                <h3>5. When will i be refunded?</h3>
                                <span class="faq-desc">Self ship orders We will refund when your item back from warehouse. The refund amount wii be credited within 3 to 5 working days in your Mikshaa Acoount.</span>
                            </li>
                            <li class="faq-li">
                                <h3>6. When will i be refunded?</h3>
                                <span class="faq-desc">Self ship orders We will refund when your item back from warehouse. The refund amount wii be credited within 3 to 5 working days in your Mikshaa Acoount.</span>
                            </li>
                        </ul>
                        <ul class="faq-ul">
                            <li class="faq-li">
                                <h3>7. What are the shipping charges?</h3>
                                <span class="faq-desc">Delivery charge varies with each product. Most of product FREE Most of product FREE delivery in India delivery charge varies with each product. Most of delivery in India.</span>
                            </li>
                            <li class="faq-li">
                                <h3>8. What is the estimated delivery time?</h3>
                                <span class="faq-desc">The estimated time of delivery is within 7 working days for domestic orders and 15-20 working days for international orders. All 4 to 5 days from the warehouse.</span>
                            </li>
                            <li class="faq-li">
                                <h3>9. How will the delivery be done?</h3>
                                <span class="faq-desc">We try to process all deliveries through reputed courier companies like Bluedart, Aramex,E-come, DTDC, DHL and Fedex. In some cases, your pincode by these.</span>
                            </li>
                            <li class="faq-li">
                                <h3>10. Can i make a credit/debit card or Internet Banking payment through my mobile?</h3>
                                <span class="faq-desc">Yes, you can make credit card payments through the CIPL mobile site. CIPL uses 256-bit encryption technology to protect your card information while securely transmitting it to the secure and trusted payment gateways managed by leading banks.</span>
                            </li>
                            <li class="faq-li">
                                <h3>11. How are items packaged?</h3>
                                <span class="faq-desc">All items are carefully packaged as to avoid any form of damage.</span>
                            </li>
                            <li class="faq-li">
                                <h3>12. How are items packaged?</h3>
                                <span class="faq-desc">All items are carefully packaged as to avoid any form of damage.</span>
                            </li>
                        </ul>
                        <a href="contact" class="btn-style1" style="margin: 32px auto;">Still have a question?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq's collapse end -->
    <!-- footer start -->
    <?php include("common/mainfooter.php");
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