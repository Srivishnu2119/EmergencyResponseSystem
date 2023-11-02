<?php
include("../config/db_connection.php");
include("../config/constants.php");
if ($_SESSION['sess_cipluserid'] == "") {
    echo '<script>location.href="logout.php"</script>';
    exit;
}
