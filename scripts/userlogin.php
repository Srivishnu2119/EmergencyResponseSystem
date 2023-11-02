<?php
	include("../config/db_connection.php");
	include("../config/constants.php");
	include("../common/functions.php");
	$errorMSG = 0;
	$EmailID =  clean_tags($_POST['email_id']);
	$password = clean_tags($_POST['Pwd']);
	$Pwd =  md5($password);

	/* EMAIL */
	if (empty($_REQUEST["email_id"])) {
		$errorMSG++;
	}
	// Password
	if (empty($_REQUEST["Pwd"])) {
		$errorMSG++;
	}
	if ($errorMSG == 0) {
		//$EmailID =  'pavan@charissoftware.in';
		//$Pwd =  'e10adc3949ba59abbe56e057f20f883e';
		$sessid = session_id();

		$sta = 1;
		$UserType = 1;
		$loginsql = "SELECT * from users   where  EmailID=?  and Pwd=?  and UserType=?  and Status=? ";
		$lstmt  = $pdo->prepare($loginsql);
		$lstmt->bindParam(1, $EmailID, PDO::PARAM_STR, 50);
		$lstmt->bindParam(2, $Pwd, PDO::PARAM_STR, 50);
		$lstmt->bindParam(3, $UserType, PDO::PARAM_INT, 1);
		$lstmt->bindParam(4, $sta, PDO::PARAM_INT, 1);
		$lstmt->execute();
		$lcount = $lstmt->rowCount();

		if ($lcount  == 1) {

			$userdata = $lstmt->fetch(PDO::FETCH_OBJ);

			$_SESSION['sess_cipluserid'] = $userdata->USERID;
			$_SESSION['sess_ciplusername'] = $userdata->FIRSTNAME . ' ' . $userdata->LASTNAME;
			$_SESSION['sess_ciplemailid'] = $userdata->EMAILID;
			$_SESSION['sess_ciplusertype'] = $userdata->USERTYPE;
		

			$check_cart = "SELECT * from carttemp   where  Sid=? ";
			$stmt5  = $pdo->prepare($check_cart);
			$stmt5->bindParam(1, $sessid, PDO::PARAM_STR, 50);
			$stmt5->execute();
			$cartdata = $stmt5->fetchAll(PDO::FETCH_OBJ);
			$cnt = 0;
			foreach ($cartdata as $row) {
				$cnt += $row->QTY;
			}
			$cartqty = $cnt;

			$_SESSION['CARTCNT'] = $cartqty;


			if ($_SESSION['CARTCNT'] > 0)
				echo 1;
			else
				echo 2;
		} // if login user
		else {
			$msg = 'Invalid Credentials';
			echo '<font color="#FF0000">' . $msg . '</font>';
		}
	} else {
		$msg = 'Fill all the  vlues';
		echo '<font color="#FF0000">' . $msg . '</font>';
	}
