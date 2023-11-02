<?php
  include("../config/db_connection.php");
  include("../config/constants.php");
  include("../common/functions.php");
  require_once('../class.phpmailer.php');
  $EmailID = trim($_POST['EmailID']);
  $sessid = session_id();
  $UserType = 1;
  $check_user = "SELECT * from users   where EmailID=? and UserType=?  and Status=1";
  $stmt5  = $pdo->prepare($check_user);
  $stmt5->bindParam(1, $EmailID, PDO::PARAM_STR, 70);
  $stmt5->bindParam(2, $UserType, PDO::PARAM_INT, 1);
  $stmt5->execute();
  $cnt = $stmt5->rowCount();

  if ($cnt == 1) {
    $row = $stmt5->fetch(PDO::FETCH_OBJ);
    $from = FROM_EMAIL;
    $to = $EmailID;
    $from_name = FROM_NAME;
    $subject = "Charisinitiatives  - Reset Password";
    $RandID = rand(10000, 99999);
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
                     <p>Dear " . $row->FIRSTNAME . " " . $row->LASTNAME . ",</p>                         
                        </td>
                    </tr>
					<tr>

                        <td  style='text-align:justify;  padding:0 40px;'>

                                <p>  If you had made this request then please click the below link to reset  your password. If not please mail us at support@charisinitiatives.com</p>                    

                            <a href='" . SITE_URL . "resetpwd.php?rid=" . $RandID . "'>Reset Password.</a>

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
      $msg = 'Password reset link sent successfully';
      $setdata = array(
        'EmailID' => $EmailID,
        'RandID' => $RandID
      );

      $updatesql = "UPDATE users SET  RandID=:RandID WHERE EmailID=:EmailID";
      $stmt = $pdo->prepare($updatesql);
      $stmt->execute($setdata);
    } else {
      $msg = 'Mail not sent';
    }
    echo '<font color="#0000FF">' . $msg . '</font>';
  } // if login user
  else {
    $msg = 'EmailID not exists';
    echo '<font color="#FF0000">' . $msg . '</font>';
  }
