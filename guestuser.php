<?php
include("config/db_connection.php");
include("config/constants.php");
include("common/functions.php");
$sta = 1;
$countryid = 1;
$statesql = "SELECT * from state   where    CountryID=?    and Status=? order by Sort ASC";
$stmt  = $pdo->prepare($statesql);
$stmt->bindParam(1, $countryid, PDO::PARAM_INT, 3);
$stmt->bindParam(2, $sta, PDO::PARAM_INT, 1);
$stmt->execute();
$statedata = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("common/googletag_head.php"); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Guest User - Charis Initiatives</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("common/metatags.php"); ?>
    <?php include("common/css.php"); ?>
    <style>
        .section-b-padding {
            padding-bottom: 10px !important;
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


    <section class="cart-page section-tb-padding" style="margin-top: 5px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="wow fadeInLeft animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                        <i class="icon-user"></i> Guest User
                    </h4>
                </div>
            </div>
            <div class="row" style="margin-top: 5px; margin-left: 10px;">
                <div class="col-md-12">
                    <p><b><a href="login" type="button"><u><i class="icon-lock"></i> Are You Registered? Please Click Here</u></a></b></p>
                </div>
            </div>
        </div>
    </section>

    <!-- cart start -->
    <section class="contact section-tb-padding" style="margin-bottom: 200px;">
        <div class="container">
            <span id="spanmsg"></span>
            <form name="frmsame" method="post" action="#">
                <div class="row">
                    <div class="col">
                        <div class="billing-area" style="width:96%; margin: 0px auto;">
                            <div class="billing-title">
                                <h4>Billing Address</h4>
                            </div>
                            <div class="billing-address-1">
                                <ul class="add-name">
                                    <li class="billing-name">
                                        <label>First name</label>
                                        <input type="text" name="first_name" placeholder="First name" id="first_name" maxlength="30" onKeyPress="return notallow_specialcharacters_txtbox(event)">
                                    </li>
                                    <li class="billing-name">
                                        <label>Last name</label>
                                        <input type="text" name="last_name" placeholder="Last name" id="last_name" maxlength="30" onKeyPress="return notallow_specialcharacters_txtbox(event)">
                                    </li>
                                </ul>
                                <ul class="add-name">
                                    <li class="billing-name">
                                        <label>Email Address</label>
                                        <input type="text" name="email_id" placeholder="Email" id="email_id" maxlength="70">
                                    </li>
                                    <li class="billing-name">
                                        <label>Phone No</label>
                                        <input type="text" name="contact_no" placeholder="Phone No" id="contact_no" maxlength="10" onKeyPress="return numbers_backspace(event)">
                                    </li>
                                </ul>
                                <ul class="add-name">
                                    <li class="billing-name">
                                        <label>Billing Address </label>
                                        <textarea name="bill_address" class="form-control" placeholder="Billing Address" id="bill_address" maxlength="500" onKeyPress="return notallow_specialcharacters_txtarea(event)"></textarea>
                                    </li>
                                    <li class="billing-name">
                                        <label>State</label>
                                        <select name="state_id" id="state_id" class="form-control">
                                            <option value="">-Select-</option>
                                            <?php
                                            foreach ($statedata as $state) {
                                            ?>
                                                <option value="<?php echo $state->STATEID; ?>"><?php echo $state->STATENAME; ?></option>
                                            <?php
                                            }
                                            ?>

                                        </select>
                                    </li>

                                </ul>
                                <ul class="add-name">
                                    <li class="billing-name">
                                        <label>City Name</label>
                                        <input type="text" name="city_name" placeholder="City Name" id="city_name" maxlength="30" onKeyPress="return notallow_specialcharacters_txtbox(event)">
                                    </li>

                                    <li class="billing-name">
                                        <label>Pincode</label>
                                        <input type="text" name="pincode" placeholder="Pincode" id="pincode" maxlength="6" onKeyPress="return numbers_backspace(event)">
                                    </li>
                                </ul>

                                <label class="check" style="margin: 10px 0 50px 0;"><input type="checkbox" id="same" name="same" Onclick="javascript:makesame();"> MY BILLING AND
                                    SHIPPING ADDRESS ARE SAME</label>
                            </div>
                            <div class="billing-title">
                                <h4>Shipping Address</h4>
                            </div>
                            <div class="billing-address-1">
                                <ul class="add-name">
                                    <li class="billing-name">
                                        <label>First name</label>
                                        <input type="text" name="Sfirst_name" placeholder="First name" id="Sfirst_name" maxlength="30" onKeyPress="return notallow_specialcharacters_txtbox(event)">
                                    </li>
                                    <li class="billing-name">
                                        <label>Last name</label>
                                        <input type="text" name="Slast_name" placeholder="Last name" id="Slast_name" maxlength="30" onKeyPress="return notallow_specialcharacters_txtbox(event)">
                                    </li>
                                </ul>
                                <ul class="add-name">
                                    <li class="billing-name">
                                        <label>Email</label>
                                        <input type="text" name="Semail_id" placeholder="Email Address" id="Semail_id" maxlength="70">
                                    </li>
                                    <li class="billing-name">
                                        <label>Phone No</label>
                                        <input type="text" name="Scontact_no" placeholder="Phone No" id="Scontact_no" maxlength="10" onKeyPress="return numbers_backspace(event)">
                                    </li>
                                </ul>
                                <ul class="add-name">
                                    <li class="billing-name">
                                        <label>Shipping Address</label>
                                        <textarea name="ship_address" class="form-control" placeholder="Shipping Address" id="ship_address" maxlength="500" onKeyPress="return notallow_specialcharacters_txtarea(event)"></textarea>
                                    </li>
                                    <li class="billing-name">
                                        <label>State</label>
                                        <select name="Sstate_id" id="Sstate_id" class="form-control">
                                            <option value="">-Select-</option>
                                            <?php
                                            foreach ($statedata as $state) {
                                            ?>
                                                <option value="<?php echo $state->STATEID; ?>"><?php echo $state->STATENAME; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </li>
                                </ul>
                                <ul class="add-name">
                                    <li class="billing-name">
                                        <label>City Name</label>
                                        <input type="text" name="Scity_name" placeholder="City Name" id="Scity_name" maxlength="30" onKeyPress="return notallow_specialcharacters_txtbox(event)">
                                    </li>

                                    <li class="billing-name">
                                        <label>Pincode</label>
                                        <input type="text" name="Spincode" placeholder="Pincode" id="Spincode" maxlength="6" onKeyPress="return numbers_backspace(event)">
                                    </li>
                                </ul>

                                <div class="add-link" style="margin-bottom:100px !important;">
                                    <a href="#" id="guestuser" class="btn btn-style1" style="width:200px; ">SUBMIT</a>
                                </div>

                            </div>
                            <!-- <div class="next-button">
                                <a href="index.html">Back</a>
                                <a href="viewcart.html">Next</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- cart end -->
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

            $("#guestuser").click(function() {
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
                var sEmail = $("#email_id").val();
                if (!validateEmail(sEmail)) {
                    alert('Invalid Email Address');
                    $("#email_id").focus();
                    return false;
                }
                if ($("#contact_no").val() == "") {
                    $("#contact_no").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#contact_no").focus();
                    return false;
                }
                if ($("#contact_no").val().length <= 9) {
                    alert("Wrong contact_no");
                    $("#contact_no").focus();
                    return false;
                }
                if ($("#bill_address").val() == "") {
                    $("#bill_address").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#bill_address").focus();
                    return false;
                }
                if ($("#state_id").val() == "") {
                    $("#state_id").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#state_id").focus();
                    return false;
                }

                if ($("#city_name").val() == "") {
                    $("#city_name").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#city_name").focus();
                    return false;
                }
                if ($("#pincode").val() == "") {
                    $("#pincode").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#pincode").focus();
                    return false;
                }


                if ($("#Sfirst_name").val() == "") {
                    $("#Sfirst_name").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#Sfirst_name").focus();
                    return false;
                }

                if ($("#Slast_name").val() == "") {
                    $("#Slast_name").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#Slast_name").focus();
                    return false;
                }

                if ($("#Semail_id").val() == "") {
                    $("#Semail_id").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#Semail_id").focus();
                    return false;
                }
                var sEmail = $("#Semail_id").val();
                if (!validateEmail(sEmail)) {
                    alert('Invalid Delivery Email Address');
                    $("#Semail_id").focus();
                    return false;
                }
                if ($("#Scontact_no").val() == "") {
                    $("#Scontact_no").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#Scontact_no").focus();
                    return false;
                }
                if ($("#Scontact_no").val().length <= 9) {
                    alert("Wrong contact_no");
                    $("#Scontact_no").focus();
                    return false;
                }
                if ($("#ship_address").val() == "") {
                    $("#ship_address").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#ship_address").focus();
                    return false;
                }
                if ($("#Sstate_id").val() == "") {
                    $("#Sstate_id").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#Sstate_id").focus();
                    return false;
                }

                if ($("#Scity_name").val() == "") {
                    $("#Scity_name").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#Scity_name").focus();
                    return false;
                }
                if ($("#Spincode").val() == "") {
                    $("#Spincode").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#Spincode").focus();
                    return false;
                }
                //  var dataString = "first_name=" + $("#first_name").val() + "&last_name=" + $("#last_name").val() + "&email_id=" + $("#email_id").val() + "&contact_no=" + $("#contact_no").val() + "&city_name=" + $("#city_name").val() + "&pincode=" + $("#pincode").val() + "&bill_address=" + $("#bill_address").val() + "&state_id=" + $("#state_id").val() + "&Sfirst_name=" + $("#Sfirst_name").val() + "&Slast_name=" + $("#Slast_name").val() + "&Semail_id=" + $("#Semail_id").val() + "&Scontact_no=" + $("#Scontact_no").val() + "&Scity_name=" + $("#Scity_name").val() + "&Spincode=" + $("#Spincode").val() + "&ship_address=" + $("#ship_address").val() + "&Sstate_id=" + $("#Sstate_id").val();

                var data = {
                    first_name: $("#first_name").val(),
                    last_name: $("#last_name").val(),
                    email_id: $("#email_id").val(),
                    contact_no: $("#contact_no").val(),
                    city_name: $("#city_name").val(),
                    pincode: $("#pincode").val(),
                    bill_address: $("#bill_address").val(),
                    state_id: $("#state_id").val(),
                    Sfirst_name: $("#Sfirst_name").val(),
                    Slast_name: $("#Slast_name").val(),
                    Semail_id: $("#Semail_id").val(),
                    Scontact_no: $("#Scontact_no").val(),
                    Scity_name: $("#Scity_name").val(),
                    Spincode: $("#Spincode").val(),
                    ship_address: $("#ship_address").val(),
                    Sstate_id: $("#Sstate_id").val()
                };

                $.ajax({
                    type: "POST",
                    url: 'scripts/guestaccount',
                    data: data,
                    cache: false,
                    success: function(data) {

                        if (data == 1) {
                            location.href = "cart.php";
                        } else if (data == 2) {
                            location.href = "index.php";
                        } else {
                            $("#spanmsg").html(data);
                        }
                    }
                });

                /*
                                $.ajax({

                                    type: "GET",

                                    url: "scripts/guestaccount.php",

                                    data: dataString,

                                    success: function(data) {
                                        alert(data);
                                        if (data == 1) {
                                            location.href = "cart.php";
                                        } else if (data == 2) {
                                            location.href = "index.php";
                                        } else {
                                            $("#spanmsg").html(data);
                                        }

                                    },

                                    //error: function(XMLHttpRequest, textStatus, errorThrown){alert(XMLHttpRequest.status);}

                                });
                */


                return false;

            });
        });
    </script>
    <script language="javascript" type="text/javascript">
        function makesame() {

            var frm = document.frmsame;



            if (frm.same.checked == true)

            {

                frm.Sfirst_name.value = frm.first_name.value;

                frm.Slast_name.value = frm.last_name.value;

                frm.Semail_id.value = frm.email_id.value;

                frm.ship_address.value = frm.bill_address.value;

                frm.Scity_name.value = frm.city_name.value;

                frm.Spincode.value = frm.pincode.value;

                frm.Sstate_id.value = frm.state_id.value;

                frm.Scontact_no.value = frm.contact_no.value;

            } else

            {

                frm.Sfirst_name.value = "";

                frm.Slast_name.value = "";

                frm.Semail_id.value = "";

                frm.ship_address.value = "";

                frm.Scity_name.value = "";

                frm.Spincode.value = "";

                frm.Sstate_id.value = "";

                frm.Scontact_no.value = "";

            }

        }
    </script>
</body>

</html>