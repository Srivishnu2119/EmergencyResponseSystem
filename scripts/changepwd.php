<?php
	include("../config/db_connection.php");
	include("../config/constants.php");
	include("../common/functions.php");
	$Pwd = trim($_POST['Pwd']);
	$user_setdata = array(
		'Pwd' => md5($Pwd),
		'UserID' => $_SESSION['sess_cipluserid']
	);

	$updatesql = "UPDATE users SET  Pwd=:Pwd WHERE UserID=:UserID";
	$ustmt = $pdo->prepare($updatesql);
	if ($ustmt->execute($user_setdata)) {

		$msg = 'Password changed successfully';
		echo '<font color="#0000FF">' . $msg . '</font>';
	} // if Empty values
	else {

		$msg = 'Invalid Data. Contact Admin';
		echo '<font color="#FF0000">' . $msg . '</font>';
	}
