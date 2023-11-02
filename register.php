<?php
include("config/db_connection.php");
include("config/constants.php");
include("common/functions.php");
if ($_SESSION['sess_cipluserid'] != "") {
    echo '<script>location.href="index.php"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Register</title>
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
                <div class="col-md-4 offset-md-4">
                    <div class="login-area">
                        <div class="login-box" style="margin-top: 0px !important;">
                            <h3 style="letter-spacing: 2px; font-size:24px; font-weight:400 !important; text-align: center;">
                                REGISTER</h3>
                            <span id="spanmsg"></span>

                            <span id="hideform">
                                <p style="margin-top: 0px !important;">Please fill in the information below:</p>
                                <form>
                                    <input type="text" name="first_name" id="first_name" placeholder="First Name" maxlength="30" onKeyPress="return notallow_specialcharacters_txtbox(event)" autocomplete="off" tabindex="1">
                                    <input type="text" name="last_name" id="last_name" placeholder="Last Name" maxlength="30" onKeyPress="return notallow_specialcharacters_txtbox(event)" autocomplete="off" tabindex="2">
                                    <input type="text" name="email_id" id="email_id" placeholder="Email Address" maxlength="70" autocomplete="off" tabindex="3">
                                    <input type="text" name="mobileno" id="mobileno" placeholder="Contact no" maxlength="20" autocomplete="off" tabindex="4">
                                    <input type="password" name="Pwd" id="Pwd" placeholder="Password" maxlength="50" autocomplete="off" tabindex="5">
                                    <input type="password" name="CPwd" id="CPwd" placeholder="Confirm Password" maxlength="50" autocomplete="off" tabindex="6">
                                    </br> </br>
                                    <textarea rows="4" name="message" id="message" placeholder="Address" required maxlength="500" style="width:96%; margin-left: 2%;margin-right: 2%;" tabindex="7"></textarea>
                                    <input type="text" name="city_name" id="city_name" placeholder="City Name" maxlength="70" autocomplete="off" tabindex="8">
                                    <input type="text" name="zipcode" id="zipcode" placeholder="Zipcode" maxlength="8" autocomplete="off" tabindex="9">
                                    <label for="" id="captcha_contact" class="form-label">1 + 5 =</label>
                                    <input type="text" name="captchacontact" id="captchacontact" placeholder="Enter the sum value *" maxlength="3" onKeyPress="return numbers_backspace(event)" tabindex="10">
                                    <input type="hidden" id="captcha_contactsum" value="">


                                    <!-- <a href="#" class="btn ">CREATE MY ACCOUNT</a> -->
                                    <a href="#" id="register" class="btn btn-sm animated-button thar-three" tabindex="7">Register</a>
                                    <p style="font-size:15px;">
                                        <span>Already registered user? Click here to <a href="login.php" style="color: crimson;" tabindex="8">Login</a></span>
                                    </p>

                                </form>

                            </span>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

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
        function numbers_backspace(e) {
            var unicode = e.charCode ? e.charCode : e.keyCode
            //alert(unicode);
            if (unicode == 8 || unicode == 37 || unicode == 39 || (unicode >= 48 && unicode <= 57)) {
                return true;
            } else
                return false //disable key press

        }

        function notallow_specialcharacters_txtbox(e) {
            var keyCode = e.which;
            //alert(keyCode);
            /*  48-57 - (0-9)Numbers, 65-90 - (A-Z), 97-122 - (a-z), 8 - (backspace), 
             13 - (enter), 32 - (space), 33 - (!), 34 - ("), 38-(&), 39-('),  46 - (.),  45 - (-) 44 - (,) 58 - (:) , 63 - (?) */
            // Not allow special
            if (
                !(
                    (keyCode >= 48 && keyCode <= 57) ||
                    (keyCode >= 65 && keyCode <= 90) ||
                    (keyCode >= 97 && keyCode <= 122)
                ) &&
                keyCode != 8 &&
                keyCode != 13 &&
                keyCode != 32 &&
                keyCode != 38 &&
                keyCode != 39 &&
                keyCode != 44
            ) {
                e.preventDefault();
            }
        }

        function notallow_specialcharacters_txtarea(e) {
            var keyCode = e.which;
            //alert(keyCode);
            /*  48-57 - (0-9)Numbers, 65-90 - (A-Z), 97-122 - (a-z), 8 - (backspace),  13 - (enter),
             32 - (space), 33 - (!), 34 - ("), 38-(&), 39-('),  46 - (.),  45 - (-) 44 - (,) 58 - (:) , 63 - (?) */
            // Not allow special
            if (
                !(
                    (keyCode >= 48 && keyCode <= 57) ||
                    (keyCode >= 65 && keyCode <= 90) ||
                    (keyCode >= 97 && keyCode <= 122)
                ) &&
                keyCode != 8 &&
                keyCode != 13 &&
                keyCode != 32 &&
                keyCode != 33 &&
                keyCode != 34 &&
                keyCode != 38 &&
                keyCode != 39 &&
                keyCode != 46 &&
                keyCode != 45 &&
                keyCode != 44 &&
                keyCode != 58 &&
                keyCode != 63
            ) {
                e.preventDefault();
            }
        }

        function validateEmail(sEmail) {
            var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
            if (filter.test(sEmail)) {
                return true;
            } else {
                return false;
            }
        }
        $(document).ready(function() {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            $("#register").click(function() {
                if ($("#first_name").val() == "") {
                    $("#first_name").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#first_name").focus();
                    return false;
                }

                if ($("#last_name").val() == "") {
                    $("#last_name").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#last_name").focus();
                    return false;
                }

                if ($("#email_id").val() == "") {
                    $("#email_id").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#email_id").focus();
                    return false;
                }
                /*  var sEmail = $("#email_id").val();
                  if (!validateEmail(sEmail)) {
                      alert('Invalid Email Address');
                      $("#email_id").focus();
                      return false;
                  } */
                if (!emailReg.test($("#email_id").val())) {
                    alert("Invalid Email Address");
                    $("#email_id").focus();
                    return false;
                }

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
                    alert('Enter Correct Sum Value');
                    $("#captchacontact").val('');
                    return false;
                }

                // var dataString = "first_name=" + $("#first_name").val() + "&last_name=" + $("#last_name").val() + "&email_id=" + $("#email_id").val() + "&Pwd=" + $("#Pwd").val();
                //  alert(dataString);

                var data = {
                    first_name: $("#first_name").val(),
                    last_name: $("#last_name").val(),
                    email_id: $("#email_id").val(),
                    Pwd: $("#Pwd").val()
                };
                $("#loading").show();
                $.ajax({
                    type: "POST",
                    url: 'scripts/newaccount.php',
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
                            $("#captchacontact").val('');
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
            var e = randomNumber(1, 10);
            var f = randomNumber(11, 20);
            $('#captcha_contact').html([e, '+', f, '='].join(' '));

            var totalquick = e + f;
            $('#captcha_contactsum').val(totalquick);

        });
    </script>
</body>

</html>