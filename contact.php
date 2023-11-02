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
    <title>Contact</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include("common/css.php"); ?>
    <style>
        #loading {
            display: none;
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
    <!-- Contact start -->
    <section class="contact section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="map-area">
                        <div class="map-title">

                            <div class="cipl">
                                <h3>CONTACT US<span> ALL INFO</span></h3>
                            </div>
                        </div>
                        <br>

                        <div class="map-details section-t-padding" style="margin-bottom: 100px;">
                            <div class="contact-info">
                                <span id="spanmsg"></span>
                                <div id="loading">
                                    <img src="image/loading.gif" alt="Loading" />
                                </div>
                                <div class="contact-details" id="hideform">
                                    <h4 style="letter-spacing: 5px; font-size:20px; font-weight:400 !important; text-align: left; margin-left: 10px;">
                                        CREATE SUPPORT TICKET</h4>
                                    <form>
                                        <input type="text" name="name" id="name" placeholder="Your Name" maxlength="50" required onKeyPress="return notallow_specialcharacters(event)" style="width:46%; float:left; margin-left: 2%;margin-right: 2%;" tabindex="1">
                                        <input type="text" name="mobile" id="mobile" placeholder="Your Phone Number" onKeyPress="return numbersonly(event)" maxlength="10" style="width:46%; float:right; margin-left: 2%;margin-right: 2%;" tabindex="2">
                                        <input type="text" name="email" id="email" placeholder="Your Email" maxlength="50" style="width:46%; float:left; margin-left: 2%;margin-right: 2%;" tabindex="3">
                                        <input type="text" name="subject" id="subject" placeholder="Your Subject" required maxlength="100" onKeyPress="return notallow_specialcharacters(event)" style="width:46%; float:right; margin-left: 2%;margin-right: 2%;" tabindex="4">
                                        <textarea rows="8" name="message" id="message" placeholder="For Bulk orders please mention the product name and the quantity" required maxlength="500" style="width:96%; margin-left: 2%;margin-right: 2%;" tabindex="5"></textarea>
                                        <label for="" id="captcha_contact" class="form-label" style="margin-left:13px;">1 + 5 =</label>
                                        <input type="text" name="captchacontact" id="captchacontact" placeholder="Enter the sum value *" maxlength="3" onKeyPress="return numbers_backspace(event)" tabindex="6" style="margin-left:13px; width:96%; ">
                                        <input type="hidden" id="captcha_contactsum" value="">
                                    </form>
                                    <p> <a href="#" class="btn btn-style1" id="submit" style=" margin-left: 2%;
margin-bottom: 2%;height: 35px;text-align: center;" tabindex="7">Send Message <i class="fa fa-angle-right"></i></a></p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="information">
                                    <h4 style="letter-spacing: 5px; font-size:20px; font-weight:400 !important; text-align: left;">
                                        GET IN TOUCH</h4>

                                    <div class="contact-in">
                                        <ul class="info-details">
                                            <li><i class="fa fa-map-marker"></i></li>
                                            <li>
                                                <h4>Address</h4>
                                                <p><b>Prameya Solutions.</b></p>
                                                <p>LIG B 449, 2nd Floor,
                                                    A S Rao Nagar, Hyderabad - 500062.</p>
                                            </li>
                                        </ul>
                                        <ul class="info-details">
                                            <li><i class="fa fa-phone"></i></li>
                                            <li>
                                                <h4>Phone</h4>
                                                <p>+91 99995635544</p>
                                            </li>
                                        </ul>
                                        <ul class="info-details">
                                            <li><i class="fa fa-envelope"></i></li>
                                            <li>
                                                <h4>Email</h4>
                                                <p>support@abc.com</p>
                                            </li>
                                        </ul>
                                        <ul class="info-details">
                                            <li><i class="fa fa-globe"></i></li>
                                            <li>
                                                <h4>Website</h4>
                                                <p>https://www.abc.com</p>
                                            </li>
                                        </ul>
                                        <br>
                                        <ul class="info-details">
                                            <li><i class="fa fa-calendar"></i></li>
                                            <li>
                                                <h4>Visit / Call Hours</h4>
                                                <p style="color:crimson">Monday - Saturday</p>
                                                <p style="color:rgb(6, 111, 197)">9:30AM TO 4:30PM</p>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact end -->


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
        function numbers_dot_backspace_parentheses(e) {

            var unicode = e.charCode ? e.charCode : e.keyCode
            //alert(unicode);
            if (unicode == 8 || unicode == 37 || unicode == 39 || unicode == 40 || unicode == 41 || unicode == 43 || unicode == 45 || unicode == 46 || (unicode >= 48 && unicode <= 57)) {
                return true;
            } else
                return false //disable key press

        }

        function numbersonly(e) {
            var unicode = e.charCode ? e.charCode : e.keyCode
            if (unicode != 8) { //if the key isn't the backspace key (which we should allow)
                if (unicode < 48 || unicode > 57) //if not a number
                    return false //disable key press
            }
        }

        function numbers_dot(e) {
            var unicode = e.charCode ? e.charCode : e.keyCode
            //alert(unicode);
            //if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
            if (unicode < 46 || unicode > 57) //if not a number
                return false //disable key press
            //}
        }

        function notallow_specialcharacters(e) {

            var keyCode = e.which;
            // alert(keyCode);
            /*  48-57 - (0-9)Numbers, 65-90 - (A-Z), 97-122 - (a-z), 8 - (backspace), 32 - (space),  46 - (.),  45 - (-), 44 - (,) , 63 - (?) */
            // Not allow special 
            if (!((keyCode >= 48 && keyCode <= 57) ||
                    (keyCode >= 65 && keyCode <= 90) ||
                    (keyCode >= 97 && keyCode <= 122)) &&
                keyCode != 8 && keyCode != 32) {
                e.preventDefault();
            }
        }
        $(document).ready(function() {
            $("#submit").click(function() {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

                if ($("#name").val() == "") {
                    $("#name").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#name").focus();
                    return false;
                }

                if ($("#mobile").val() == "") {
                    $("#mobile").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#mobile").focus();
                    return false;
                }

                if ($("#mobile").val() != "") {
                    var len = $("#mobile").val().length;
                    if (len < 10) {
                        alert("Enter Correct Mobileno");
                        $("#mobile").focus();
                        return false;
                    }
                }

                if ($("#email").val() == "") {
                    $("#email").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#email").focus();
                    return false;
                }

                if (!emailReg.test($("#email").val())) {
                    alert("Enter Correct EmailID");
                    $("#email").focus();
                    return false;
                }

                if ($("#subject").val() == "") {
                    $("#subject").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#subject").focus();
                    return false;
                }

                if ($("#message").val() == "") {
                    $("#message").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#message").focus();
                    return false;
                }
                if ($("#captchacontact").val() == "") {
                    $("#captchacontact").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    return false;
                }
                if ($("#captchacontact").val() != $("#captcha_contactsum").val()) {
                    $("#captchacontact").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    alert('Enter Correct Value');
                    $("#captchacontact").val('');
                    return false;
                }

                var data = {
                    name: $("#name").val(),
                    mobile: $("#mobile").val(),
                    email: $("#email").val(),
                    subject: $("#subject").val(),
                    message: $("#message").val()
                };
                $("#loading").show();
                $.ajax({
                    type: "POST",
                    url: 'scripts/contact',
                    data: data,
                    cache: false,
                    beforeSend: function() {
                        // Code to execute before sending the request
                        console.log("Before sending the request...");
                        // Additional code or actions
                    },
                    success: function(data) {
                        var res = data.split("$$$");
                        if (res[1] == 1) {
                            $("#spanmsg").html(res[0]);
                            $("#hideform").html('');
                        } else {
                            $("#spanmsg").html(res[0]);
                        }
                    },
                    error: function(xhr, status, error) {
                        // Code to handle errors
                        console.log("An error occurred: " + error);
                        // Additional code or actions
                    },
                    complete: function() {
                        // Code to execute regardless of success or failure
                        console.log("Request complete.");

                        // Hide the loading image
                        $("#loading").hide();
                        // Additional code or actions
                    }
                });

                return false;



            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Generate a simple captcha
            function randomNumber(min, max) {
                return Math.floor(Math.random() * (max - min + 1) + min);
            };
            var e = randomNumber(1, 9);
            var f = randomNumber(10, 20);
            $('#captcha_contact').html([e, '+', f, '='].join(' '));

            var totalquick = e + f;
            $('#captcha_contactsum').val(totalquick);

        });
    </script>
</body>

</html>