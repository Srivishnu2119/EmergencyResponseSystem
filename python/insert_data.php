<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
$firstname = "John1";
$lastname = "Doe1";
echo $email = "johndoe1@email.com";
// Validate the data if needed

// Call the Python script to insert data
$python_output = shell_exec("python insert1.py " . escapeshellarg($firstname) . " " . escapeshellarg($lastname) . " " . escapeshellarg($email));

echo "<p>Data inserted: $python_output</p>";
//}
