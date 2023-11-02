<?php
date_default_timezone_set('Asia/Kolkata');
function page_name()
{
    return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}
function clean($data)
{
    $data = trim($data);
    $data = str_replace('"', "", $data);
    $data = str_replace("\"", "", $data);
    $data = str_replace("\\", "", $data);
    $data = stripslashes($data);
    $data = addslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function clean_tags($data)
{
    $data = trim($data);
    $data = str_replace("<script", "", $data);
    $data = str_replace("&lt;script", "", $data);
    $data = str_replace("</script>", "", $data);
    $data = str_replace("&lt;/script&gt;", "", $data);
    $data = str_replace("javascript", "", $data);
    $data = str_replace(".js", "", $data);
    $data = str_replace("base64", "", $data);
    $data = addslashes($data);
    return $data;
}
function get_random_string()
{
    $length = 8;
    $return = "";
    $characters = "ABCDEFGHJKLMNPRQSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789";
    $num_characters = strlen($characters) - 1;
    while (strlen($return) < $length) {
        $return .= $characters[mt_rand(0, $num_characters)];
    }
    return $return;
}
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
function writeLog($data)
{
    $page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

    $fileName = date("Y-m-d") . " _ " . $page . ".txt";

    $fp = fopen("logs/" . $fileName, 'a+');

    $data = date("Y-m-d H:i:s") . " _ " . $data . "\n";

    fwrite($fp, $data);

    fclose($fp);
}
function getDatesFromRange($start, $end, $format = 'Y-m-d')
{

    // Declare an empty array 
    $array = array();

    // Variable that store the date interval 
    // of period 1 day 
    $interval = new DateInterval('P1D');

    $realEnd = new DateTime($end);
    $realEnd->add($interval);

    $period = new DatePeriod(new DateTime($start), $interval, $realEnd);

    // Use loop to store date into array 
    foreach ($period as $date) {
        $array[] = $date->format($format);
    }

    // Return the array elements 
    return $array;
}
function maincategory($pdo)
{
    $sql = "SELECT * from category";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    return  $catdata = $statement->fetchAll(PDO::FETCH_OBJ);
}

function smtpmailer($to, $from, $from_name, $subject, $body, $is_gmail = true)
{
    define('SMTPUSER', 'no-reply@booksandreports.com');
    define('SMTPPWD', 'Reports@321');
    define('SMTPSERVER', 'md-in-21.webhostbox.net');
    global $error;
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->IsHTML();
    $mail->SMTPAuth = true;
    if ($is_gmail) {
        $mail->SMTPSecure = 'ssl';
        $mail->Host = SMTPSERVER;
        $mail->Port = 465;
        $mail->Username = SMTPUSER;
        $mail->Password = SMTPPWD;
    } else {
        $mail->Host = SMTPSERVER;
        $mail->Username = SMTPUSER;
        $mail->Password = SMTPPWD;
    }

    $mail->SetFrom($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    $mail->WordWrap = 50;
    $mail->isHTML(true);

    if (!$mail->Send()) {
        $error = 'Mail error: ' . $mail->ErrorInfo;
        return 0;
    } else {
        $error = 'Message sent!';
        return 1;
    }
}
function smtpmailercc($to, $from, $from_name, $subject, $body, $is_gmail = true)
{
    define('SMTPUSER', 'no-reply@booksandreports.com');
    define('SMTPPWD', 'Reports@321');
    define('SMTPSERVER', 'md-in-21.webhostbox.net');
    global $error;
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->IsHTML();
    $mail->SMTPAuth = true;
    if ($is_gmail) {
        $mail->SMTPSecure = 'ssl';
        $mail->Host = SMTPSERVER;
        $mail->Port = 465;
        $mail->Username = SMTPUSER;
        $mail->Password = SMTPPWD;
    } else {
        $mail->Host = SMTPSERVER;
        $mail->Username = SMTPUSER;
        $mail->Password = SMTPPWD;
    }

    $mail->SetFrom($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    $mail->AddCC("susan@charissoftware.in");
    $mail->AddCC("noreply@charisinitiatives.com");
    $mail->AddReplyTo('noreply@charisinitiatives.com', 'Charisinitiatives');
    $mail->WordWrap = 50;
    $mail->isHTML(true);

    if (!$mail->Send()) {
        $error = 'Mail error: ' . $mail->ErrorInfo;
        return 0;
    } else {
        $error = 'Message sent!';
        return 1;
    }
}
function convert_number_words($number)
{
    if (($number < 0) || ($number > 999999999)) {
        throw new Exception("Number is out of range");
    }

    $Gn = floor($number / 100000);  /* Millions (giga) */
    $number -= $Gn * 100000;
    $kn = floor($number / 1000);     /* Thousands (kilo) */
    $number -= $kn * 1000;
    $Hn = floor($number / 100);      /* Hundreds (hecto) */
    $number -= $Hn * 100;
    $Dn = floor($number / 10);       /* Tens (deca) */
    $n = $number % 10;               /* Ones */

    $res = "";

    if ($Gn) {
        $res .= convert_number_words($Gn) . " Lacs";
    }

    if ($kn) {
        $res .= (empty($res) ? "" : " ") .
            convert_number_words($kn) . " Thousand";
    }

    if ($Hn) {
        $res .= (empty($res) ? "" : " ") .
            convert_number_words($Hn) . " Hundred";
    }

    $ones = array(
        "", "One", "Two", "Three", "Four", "Five", "Six",
        "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen",
        "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen",
        "Nineteen"
    );
    $tens = array(
        "", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty",
        "Seventy", "Eigthy", "Ninety"
    );

    if ($Dn || $n) {
        if (!empty($res)) {
            $res .= " and ";
        }

        if ($Dn < 2) {
            $res .= $ones[$Dn * 10 + $n];
        } else {
            $res .= $tens[$Dn];

            if ($n) {
                //$res .= "-" . $ones[$n];
                $res .= " " . $ones[$n];
            }
        }
    }

    if (empty($res)) {
        $res = "zero";
    }
    return $res;
}
