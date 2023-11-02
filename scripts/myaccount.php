<?php
    include("../config/db_connection.php");
    include("../config/constants.php");
    include("../common/functions.php");

    $FirstName = clean_tags($_POST['first_name']);
    $LastName =  clean_tags($_POST['last_name']);
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

    if ($err == 0) {

        $user_setdata = array(
            'FirstName' => $FirstName,
            'LastName' => $LastName,
            'UserID' => $_SESSION['sess_cipluserid']
        );

        $updatesql = "UPDATE users SET  FirstName=:FirstName,
                     LastName=:LastName WHERE UserID=:UserID";
        $ustmt = $pdo->prepare($updatesql);
        $ustmt->execute($user_setdata);

        $msg = 'Update Success';
        echo '<font color="#0000FF">' . $msg . '</font>';
    } // if Empty values
    else {

        $msg = 'Invalid Data. Contact Admin';
        echo '<font color="#FF0000">' . $msg . '</font>';
    }
