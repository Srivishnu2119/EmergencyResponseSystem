<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
$firstname = "John55";
$lastname = "Doe55";
$email = "johndoe55@email.com";
//$scriptPath = "/python/to/myscript.py";
$scriptPath = "python/call_dbconnectionpage1.py";

$arg1 = escapeshellarg($firstname);
$arg2 = escapeshellarg($lastname);
$arg3 = escapeshellarg($email);
$python_output = shell_exec("python $scriptPath $arg1 $arg2 $arg3");
/*
$firstname = "John1";
$lastname = "Doe1";
echo $email = "johndoe1@email.com";
// Validate the data if needed

// Call the Python script to insert data
$python_output = shell_exec("python insert1.py " . escapeshellarg($firstname) . " " . escapeshellarg($lastname) . " " . escapeshellarg($email)); 
*/

echo "<p>Data inserted: $python_output</p>";
//}
