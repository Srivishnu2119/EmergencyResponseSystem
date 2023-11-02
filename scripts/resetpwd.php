<?php
	include("../config/db_connection.php");
	include("../config/constants.php");
	include("../common/functions.php");
	$Pwd = trim($_POST['Pwd']);
	$RandID = trim($_POST['RandID']);
	$usersql = "SELECT * from users where RandID=? and UserType=1 and Status=1";
	$rstmt = $pdo->prepare($usersql);
	$rstmt->bindParam(1, $RandID, PDO::PARAM_STR, 10);
	$rstmt->execute();
	$check = $rstmt->rowCount();
	if ($check == 1) {

		$user_setdata = array(
			'Pwd' => md5($Pwd),
			'RandID' => $RandID,
			'URandID' => 0
		);

		$updatesql = "UPDATE users SET  Pwd=:Pwd,RandID=:URandID WHERE RandID=:RandID";
		//	$updatesql = "UPDATE users SET  Pwd='" . $Pwd . "', RandID=0 WHERE RandID='" . $RandID . "'";
		$ustmt = $pdo->prepare($updatesql);
		$ustmt->execute($user_setdata);

$msg = 'Password changed successfully. click <a href="login">here</a> to login';
		echo '<font color="#0000FF">' . $msg . '</font>';
	} // if login user
	else {
		$msg = 'User not exists';
		echo '<font color="#FF0000">' . $msg . '</font>';
	}
