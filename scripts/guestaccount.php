<?php
	include("../config/db_connection.php");
	include("../config/constants.php");
	include("../common/functions.php");

	$FirstName = clean_tags($_POST['first_name']);
	$LastName =  clean_tags($_POST['last_name']);
	$EmailID =  clean_tags($_POST['email_id']);
	$Mobileno = clean_tags($_POST['contact_no']);
	$City = clean_tags($_POST['city_name']);
	$Zipcode =  clean_tags($_POST['pincode']);
	$Address =  clean_tags($_POST['bill_address']);
	$StateID = clean_tags($_POST['state_id']);

	$SFirstName = clean_tags($_POST['Sfirst_name']);
	$SLastName =  clean_tags($_POST['Slast_name']);
	$SEmailID =  clean_tags($_POST['Semail_id']);
	$SMobileno = clean_tags($_POST['Scontact_no']);
	$SCity = clean_tags($_POST['Scity_name']);
	$SZipcode =  clean_tags($_POST['Spincode']);
	$SAddress =  clean_tags($_POST['ship_address']);
	$SStateID = clean_tags($_POST['Sstate_id']);

	$sessid = session_id();

	$err = 0;
	// https://www.nicesnippets.com/blog/check-if-a-string-contains-a-special-character-in-php
	$FirstName1 = preg_match('/[\'^£$%&*()}{@#~?><,|=_+¬-]/', $FirstName);
	$LastName1 = preg_match('/[\'^£$%&*()}{@#~?><,|=_+¬-]/', $LastName);
	$SFirstName1 = preg_match('/[\'^£$%&*()}{@#~?><,|=_+¬-]/', $SFirstName);
	$SLastName1 = preg_match('/[\'^£$%&*()}{@#~?><,|=_+¬-]/', $SLastName);

	if ($FirstName1) {
		$err++;
	}
	if ($LastName1) {
		$err++;
	}
	if ($SFirstName1) {
		$err++;
	}
	if ($SLastName1) {
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

		$userdata = array(
			'FirstName' => $FirstName,
			'LastName' => $LastName,
			'EmailID' => $EmailID,
			'Pwd' => '',
			'UserType' => 2,
			'Status' => 0,
			'IPAddress' => $ip,
			'CreateDate' => date('Y-m-d'),
			'WebMobile' => 1,
			'RegDate' => date('Y-m-d H:i:s')
		);

		$usersql = 	 "INSERT INTO users (
													FirstName, 
													LastName,
													EmailID,
													Pwd,
													UserType,
													RegDate,
													IPAddress,
													CreateDate,
													WebMobile,
													Status
												) 
													VALUES 
												(
													:FirstName,
													:LastName, 
													:EmailID, 
													:Pwd, 
													:UserType,
													:RegDate,
													:IPAddress,
													:CreateDate,
													:WebMobile, 
													:Status
												)";
		$stmt1 = $pdo->prepare($usersql);
		$stmt1->execute($userdata);
		$lastinsert_id  = $pdo->lastInsertId();


		if ($lastinsert_id != 0) {
			$_SESSION['sess_cipluserid'] = $lastinsert_id;
			$_SESSION['sess_ciplusername'] = 'Guest';
			$_SESSION['sess_ciplusertype'] = 2;

			// **********  BILL Address ***************
			$CountryID = 1;
			$billdata = array(
				'UserID' => $lastinsert_id,
				'FirstName' => $FirstName,
				'LastName' => $LastName,
				'EmailID' => $EmailID,
				'Mobileno' => $Mobileno,
				'Address' => $Address,
				'City' => $City,
				'Zipcode' => $Zipcode,
				'CountryID' => $CountryID,
				'StateID' => $StateID
			);



			$billsql = "INSERT INTO billaddress (
												UserID,
												FirstName, 
												LastName,
												EmailID,
												Mobileno,
												Address,
												City,
												Zipcode,
												CountryID,
												StateID
											) 
												VALUES 
											(
												:UserID,
												:FirstName,
												:LastName, 
												:EmailID, 
												:Mobileno, 
												:Address,
												:City,
												:Zipcode,
												:CountryID,
												:StateID
											)";
			$stmt2 = $pdo->prepare($billsql);
			$stmt2->execute($billdata);
			// **********  SHIP Address ***************
			$SCountryID = 1;
			$shipdata  = array(
				'SUserID' => $lastinsert_id,
				'SFirstName' => $SFirstName,
				'SLastName' => $SLastName,
				'SEmailID' => $SEmailID,
				'SMobileno' => $SMobileno,
				'SAddress' => $SAddress,
				'SCity' => $SCity,
				'SZipcode' => $SZipcode,
				'SCountryID' => $SCountryID,
				'SStateID' => $SStateID
			);
			$shipsql = "INSERT INTO shipaddress (
													SUserID,
													SFirstName, 
													SLastName,
													SEmailID,
													SMobileno,
													SAddress,
													SCity,
													SZipcode,
													SCountryID,
													SStateID
												) 
													VALUES 
												(
													:SUserID,
													:SFirstName,
													:SLastName, 
													:SEmailID, 
													:SMobileno, 
													:SAddress,
													:SCity,
													:SZipcode,
													:SCountryID,
													:SStateID
												)";
			$stmt3 = $pdo->prepare($shipsql);
			$ins_ship = $stmt3->execute($shipdata);

			if ($ins_ship) {

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
			} else {
				$msg = 'Query ShipAddress Insertion Error';
				echo '<font color="#FF0000">' . $msg . '</font>';
			}
		} else {
			$msg = 'Query Guest User Insertion Error';
			echo '<font color="#FF0000">' . $msg . '</font>';
		}
	} // if Empty values
	else {

		$msg = 'Invalid Data. Contact Admin';
		echo '<font color="#FF0000">' . $msg . '</font>';
	}
