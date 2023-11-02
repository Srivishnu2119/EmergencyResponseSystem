<?php
include("../config/db_connection.php");
include("../config/constants.php");
include("../common/functions.php");
require_once('../class.phpmailer.php');

$FirstName = clean_tags($_POST['first_name']);
$LastName =  clean_tags($_POST['last_name']);
$EmailID =  clean_tags($_POST['email_id']);
$Pwd =  clean_tags($_POST['Pwd']);
$err = 0;
// https://www.nicesnippets.com/blog/check-if-a-string-contains-a-special-character-in-php
$FirstName1 = preg_match('/[\'^£$%&*()}{@#~?><,|=_+¬-]/', $FirstName);
$LastName1 = preg_match('/[\'^£$%&*()}{@#~?><,|=_+¬-]/', $LastName);
if ($FirstName1) {
  $err++;
}
if ($LastName1) {
  $err++;
}
if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
{
  $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
{
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
  $ip = $_SERVER['REMOTE_ADDR'];
}

if ($err == 0) {

  $CreateDate = date('Y-m-d');
  $RandID = rand(10000, 99999);
  $usertype = 1;
  $stat = 0;

  $checkusersql = "SELECT * from users   where IPAddress=? and CreateDate=? and UserType=? and Status=? ";
  $stmt5  = $pdo->prepare($checkusersql);
  $stmt5->bindParam(1, $ip, PDO::PARAM_STR, 20);
  $stmt5->bindParam(2, $CreateDate, PDO::PARAM_STR, 12);
  $stmt5->bindParam(3, $usertype, PDO::PARAM_INT, 1);
  $stmt5->bindParam(4, $stat, PDO::PARAM_INT, 1);
  $stmt5->execute();
  $chkipdata = $stmt5->rowCount();
  if ($chkipdata == 0) {

    $sessid = session_id();
    $UserID = 0;
    $usertype = 1;
    $checkusersql1 = "SELECT * from users   where EmailID=?  and UserType=? ";
    $stmt1  = $pdo->prepare($checkusersql1);
    $stmt1->bindParam(1, $EmailID, PDO::PARAM_STR, 70);
    $stmt1->bindParam(2, $usertype, PDO::PARAM_INT, 1);
    $stmt1->execute();
    $cnt1 = $stmt1->rowCount();
    if ($cnt1  == 0) {
      $usertype = 2;
      $checkusersql2 = "SELECT * from users   where EmailID=?  and UserType=? ORDER BY UserID DESC LIMIT 0,1";
      $stmt2  = $pdo->prepare($checkusersql2);
      $stmt2->bindParam(1, $EmailID, PDO::PARAM_STR, 70);
      $stmt2->bindParam(2, $usertype, PDO::PARAM_INT, 1);
      $stmt2->execute();
      $cnt2 = $stmt2->rowCount();

      if ($cnt2 == 1) {

        $guestuser = $stmt2->fetch(PDO::FETCH_OBJ);

        $user_setdata = array(
          'FirstName' => $FirstName,
          'LastName' => $LastName,
          'EmailID' => $EmailID,
          'Pwd' => md5($Pwd),
          'RandID' => $RandID,
          'UserType' => 1,
          'RegDate' => date('Y-m-d H:i:s'),
          'IPAddress' => $ip,
          'CreateDate' => date('Y-m-d'),
          'WebMobile' => 1,
          'Status' => 0,
          'UserID' => $guestuser->USERID
        );

        $updatesql = "UPDATE users SET  FirstName=:FirstName, LastName=:LastName,EmailID=:EmailID,Pwd=:Pwd,RandID=:RandID,UserType=:UserType,RegDate=:RegDate,IPAddress=:IPAddress,CreateDate=:CreateDate,WebMobile=:WebMobile,Status=:Status WHERE UserID=:UserID";
        $ustmt = $pdo->prepare($updatesql);
        if ($ustmt->execute($user_setdata)) {
          $UserID = $guestuser->USERID;
        }
      } // $cnt2 == 1
      else {

        $userdata = array(
          'FirstName' => $FirstName,
          'LastName' => $LastName,
          'EmailID' => $EmailID,
          'Pwd' => md5($Pwd),
          'RandID' => $RandID,
          'UserType' => 1,
          'RegDate' => date('Y-m-d H:i:s'),
          'IPAddress' => $ip,
          'CreateDate' => date('Y-m-d'),
          'WebMobile' => 1,
          'Status' => 0
        );


        $insertsql = "INSERT INTO users (FirstName, LastName,EmailID,Pwd,RandID,UserType,RegDate,IPAddress,CreateDate,WebMobile,Status) VALUES (:FirstName, :LastName, :EmailID, :Pwd, :RandID, :UserType, :RegDate, :IPAddress, :CreateDate, :WebMobile, :Status)";
        $istmt = $pdo->prepare($insertsql);
        $istmt->execute($userdata);
        $UserID = $pdo->lastInsertId();
        if ($lastinsert_id != 0) {
          $UserID = $lastinsert_id;
        }
      }
      if ($UserID != 0) {

        $from = FROM_EMAIL;
        $to = $EmailID;
        $from_name = FROM_NAME;
        $subject = "Charisinitiatives - Registration Mail";

        $body = "<div style='background:#fff; width:450px; height:400px; padding:10px;'>
             <table  style='margin-top:10px; font-family:arial; width:100%;''  cellspacing='0' cellpadding='0'>
              <thead style='text-align:left;'> <tr>
                        <th  width='20%' height='50' style='border-bottom:1px solid #f1f1f1'>
                        <img src='" . SITE_URL . "assets/charisInivitiatives-logo.png' style='width:200px;'/>
                        </th>                      
                    </tr>                    
                </thead>
                <tbody>
                    <tr>
                        <td  style='text-align:left;  padding-left:40px; padding-top:10px;'>
                     <p>Dear " . $FirstName . " " . $LastName . ",</p>                         
                        </td>
                     </tr>
					          <tr>

                        <td  style='text-align:justify;  padding:0 40px;'>

                                <p>  Thank you for registering. Please click the below link to activate your account.</p>                    

                            <a href='" . SITE_URL . "activate.php?rid=" . $RandID . "'>Activate your account by clicking here.</a>

                        </td>

                    </tr>
                     <tr>
                        <td  style='text-align:left;  padding-left:40px; padding-top:20px;'>
                                <p>Thanks & Regards,</p>
                              <p style='font-size: 14px;''><b>CHARIS INITIATIVES PVT LTD.</b></p>                              
                        </td>
                    </tr>   
                </tbody>
               </table>
             </div>";

        if (smtpmailer($to, $from, $from_name, $subject, $body, $is_gmail = true)) {
          $msg3 = 'Successfully Registered! Please check your email to activate your account.';
          $msg2 = '<font color="#0000FF">' . $msg3 . '</font>';
          $msg1 = "$$$1";
          echo $msg = $msg2 . $msg1;
        } else {

          if (!smtpmailer($to, $from, $from_name, $subject, $body, false)) {

            if (!empty($error)) {
              $msg3 = 'Mail Not Sent.';
              $msg2 = '<font color="#FF0000">' . $msg3 . '</font>';
              $msg1 = " $$$0";
              echo $msg = $msg2 . $msg1;
            }
          } else {
            $msg3 = 'Successfully Registered! Please check your email to activate your account.';
            $msg2 = '<font color="#0000FF">' . $msg3 . '</font>';
            $msg1 = " $$$1";
            echo $msg = $msg2 . $msg1;
          }
        }
      } else {
        $msg3 = 'Query  Insertion Error';
        $msg2 = '<font color="#FF0000">' . $msg3 . '</font>';
        $msg1 = " $$$0";
        echo $msg = $msg2 . $msg1;
      }
    } // else part   
    else {
      $msg3 = 'Email Address Already Exist';
      $msg2 = '<font color="#FF0000">' . $msg3 . '</font>';
      $msg1 = " $$$0";
      echo $msg = $msg2 . $msg1;
    }
  } // if check user
  else {

    $msg3 = 'Oops! Something Went Wrong. Please contact admin.';
    $msg2 = '<font color="#FF0000">' . $msg3 . '</font>';
    $msg1 = " $$$0";
    echo  $msg = $msg2 . $msg1;
  }
} // if Empty values
else {

  $msg3 = 'Invalid Data. Contact Admin';
  $msg2 = '<font color="#FF0000">' . $msg3 . '</font>';
  $msg1 = " $$$0";
  echo  $msg = $msg2 . $msg1;
}
