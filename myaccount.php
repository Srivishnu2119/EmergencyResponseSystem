<?php
include("config/db_connection.php");
include("config/constants.php");
include("common/functions.php");
include("common/loginsession.php");

$login_id = $_SESSION['sess_userid'];

$scriptPath = "python/getprofile.py";
$arg1 = escapeshellarg($login_id);
$python_output = shell_exec("python $scriptPath $arg1");
//print_r(($python_output));
//echo $python_output;
$res = json_decode($python_output, true);
$usename = $res['result']['first_name'] . ' ' . $res['result']['last_name'];

$msg = '';
if ($_POST['act'] == "MYACCOUNT") {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $contactno = $_POST['mobileno'];
    $email_id = $_POST['email_id'];
    $address = addslashes($_POST['address']);
    $city_name = $_POST['city_name'];
    $zipcode = $_POST['zipcode'];

    // Use escapeshellarg to escape arguments and prevent injection
    $Arg1 = escapeshellarg($first_name);
    $Arg2 = escapeshellarg($last_name);
    $Arg3 = escapeshellarg($contactno);
    $Arg4 = escapeshellarg($address);
    $Arg5 = escapeshellarg($city_name);
    $Arg6 = escapeshellarg($zipcode);

    $pythonScript = 'python/updateprofile.py';

    // Build the command string
    $command = "python $pythonScript $Arg1 $Arg2 $Arg3 $Arg4 $Arg5 $Arg6";

    $output = array();
    $returnVar = 0;

    // Execute the command
    exec($command, $output, $returnVar);

    // Check the return value to see if the command was successful
    if ($returnVar === 0) {
        //echo "Python script executed successfully.";
        // $output will contain the output of the Python script
        // print_r($output);
        $msg = '<font color="#0000FF" >' . $output[0] . '</font>';
    } else {
        $msg = '<font color="#FF0000">Error executing Python script.</font>';
    }
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
    <title>My Account </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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


    <section class="terms-area section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">

                        <h3 style="letter-spacing: 2px; font-size:24px; font-weight:400 !important;">MY ACCOUNT
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- order history start -->
    <section class="order-histry-area section-tb-padding">
        <div class="container" style="margin-bottom: 450px;">
            <div class="row">
                <div class="col">
                    <div class="order-history">
                        <div class="profile">

                            <?php include('common/myaccount.php'); ?>
                        </div>
                        <form name="frmaccount" id="frmaccount" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <input type="hidden" name="act" id="act" value="">
                            <div class="order-info wow fadeInLeft animated" style="background: #f7f7f7; padding: 10px; min-height:310px; ">

                                <table class="table" border="0">

                                    <tbody>
                                        <?php
                                        if ($msg != '') {
                                            echo  $msg;
                                        }

                                        ?>
                                        <tr>
                                            <td>

                                                <p style="width:45%">First Name</p>
                                                <input type="text" name="first_name" id="first_name" placeholder="First Name" maxlength="30" onKeyPress="return notallow_specialcharacters_txtbox(event)" style="width:55%" value="<?php echo $res['result']['first_name']; ?>" tabindex="1">

                                            </td>
                                            <td>

                                                <p style="width:45%">Last Name</p>
                                                <input type="text" name="last_name" id="last_name" placeholder="Last Name" maxlength="30" onKeyPress="return notallow_specialcharacters_txtbox(event)" style="width:55%" value="<?php echo $res['result']['last_name']; ?>" tabindex="2">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                                <p style="width:45%">Contactno</p>
                                                <input type="text" name="contactno" id="contactno" placeholder="Contactno" maxlength="30" onKeyPress="return notallow_specialcharacters_txtbox(event)" style="width:55%" value="<?php echo $res['result']['contactno']; ?>" tabindex="3">

                                            </td>
                                            <td>

                                                <p style="width:45%">Email ID</p>
                                                <input type="text" name="email_id" id="email_id" placeholder="Email ID" maxlength="50" style="width:55%" value="<?php echo $res['result']['email_id']; ?>" readonly>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                                <p style="width:45%">Address</p>
                                                <textarea name="address" id="address" placeholder="Address" style="width:55%"><?php echo stripslashes(nl2br($res['result']['address'])); ?></textarea>

                                            </td>
                                            <td>

                                                <p style="width:45%">City Name</p>
                                                <input type="text" name="city_name" id="city_name" placeholder="City Name" maxlength="30" onKeyPress="return notallow_specialcharacters_txtbox(event)" style="width:55%" value="<?php echo $res['result']['city_name']; ?>" tabindex="6">

                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">

                                                <p style="width:20%">Zipcode</p>
                                                <input type="text" name="zipcode" id="zipcode" placeholder="Zipcode" maxlength="70" style="width:80%" readonly value="<?php echo $res['result']['zipcode']; ?>" tabindex="7">

                                                </ul>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td colspan="2">

                                                <div class="add-link" style="margin-top: 15px;">
                                                    <a href="#" id="myaccount" class="btn btn-style1" tabindex="4" style="width:200px">SAVE CHANGES <i class="fa fa-long-arrow-right"></i></a>
                                                </div>

                                                </ul>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- order history end -->
    <!-- order history end -->

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


        $(document).ready(function() {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            $("#myaccount").click(function() {
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
                if ($("#contact_no").val() == "") {
                    $("#contact_no").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#contact_no").focus();
                    return false;
                }

                if ($("#address").val() == "") {
                    $("#address").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#address").focus();
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
                if ($("#zipcode").val() == "") {
                    $("#zipcode").css({
                        "border": "1px solid",
                        "color": "#F00"
                    });
                    $("#zipcode").focus();
                    return false;
                }
                $("#act").val('MYACCOUNT');
                $("#frmaccount").submit();
                return true;

            });
        });
    </script>

</body>

</html>