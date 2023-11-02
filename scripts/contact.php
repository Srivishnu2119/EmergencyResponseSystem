<?php
include("../config/db_connection.php");
include("../config/constants.php");
include("../common/functions.php");
require_once('../class.phpmailer.php');
$BrowserName = $_SERVER['HTTP_USER_AGENT'];
$name = clean_tags($_POST['name']);
$mobile =  clean_tags($_POST['mobile']);
$email =  clean_tags($_POST['email']);
$subject =  clean_tags($_POST['subject']);
$message =  clean_tags($_POST['message']);

// Newly written 01mar2023
$err = 0;
// https://www.nicesnippets.com/blog/check-if-a-string-contains-a-special-character-in-php
$name1 = preg_match('/[\'^£$%&*()}{@#~?><,|=_+¬-]/', $name);
$subject1 = preg_match('/[\'^£$%&*()}{@#~?><,|=_+¬-]/', $subject);

$needle = "http";

if ($name1) {
    $err++;
}
if ($subject1) {
    $err++;
}
if (stripos($message, $needle) !== false) {
    $err++;
}

if ($err == 0) {

    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $IPAddress = $ip;
   // $ip = '183.82.115.208';

    $result  = array('countryname' => '', 'city' => '', 'regionName' => '');
    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
    if ($ip_data && $ip_data->geoplugin_countryName != null) {
        $result['countrycode'] = $ip_data->geoplugin_countryCode;
    }

    if ($result['countrycode'] == 'IN') {


        $user_data = array(
            'name' => $name,
            'mobile' => $mobile,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
            'WebMobile' => 1,
            'BrowserName' => $BrowserName,
            'IPAddress' => $IPAddress
        );
        $insertsql = "INSERT INTO contactinfo (
            name, 
            mobile,
            email,
            subject,
            message,
            WebMobile,
            BrowserName,
            IPAddress   
            ) 
            VALUES 
            (
            :name,
            :mobile,
            :email,
            :subject,
            :message,
            :WebMobile,
            :BrowserName,
            :IPAddress
            )";
        $istmt = $pdo->prepare($insertsql);
        $istmt->execute($user_data);
        $lastinsert_id = $pdo->lastInsertId();
        if ($lastinsert_id != 0) {
            $from = FROM_EMAIL;
            $to = "noreply@charisinitiatives.com";
            $from_name = $name;
            $subject = $subject;
            $body = $message;
            if (smtpmailer($to, $from, $from_name, $subject, $body, $is_gmail = true)) {
                $msg2 = 'Email has been sent successfully. Admin will contact you soon';
                $msg = '<font color="#0000FF">' . $msg2 . '</font>';
                $msg1 = "$$$1";
                echo $msg = $msg . $msg1;
            } else {

                if (!smtpmailer($to, $from, $from_name, $subject, $body, false)) {

                    if (!empty($error)) {
                        $msg2 = 'Mail not sent';
                        $msg = '<font color="#FF0000">' . $msg2 . '</font>';
                        $msg1 = "$$$0";
                        echo $msg = $msg . $msg1;
                    } else {

                        $msg2 = 'Email has been sent successfully. Admin will contact you soon';
                        $msg = '<font color="#0000FF">' . $msg2 . '</font>';
                        $msg1 = "$$$1";
                        echo $msg = $msg . $msg1;
                    }
                }
            }
        } else {
            $msg2 = 'Query  Insertion Error';
            $msg = '<font color="#FF0000">' . $msg2 . '</font>';
            $msg1 = "$$$0";
            echo $msg = $msg . $msg1;
        } // else part
    } // if Empty values
    else {

        $msg2 = 'Invalid Data. Contact Admin';
        $msg = '<font color="#FF0000">' . $msg2 . '</font>';
        $msg1 = "$$$0";
        echo $msg = $msg . $msg1;
    }
} else {

    $msg2 = 'Invalid Data. Contact Admin';
    $msg = '<font color="#FF0000">' . $msg2 . '</font>';
    $msg1 = "$$$0";
    echo $msg = $msg . $msg1;
}
