<?php
$firstname = "John8";
$lastname = "Doe8";
$email = "johndoe8@email.com";
//$pythonScript = 'python/call_dbconnectionpage1.py';
$pythonScript = 'call_dbconnectionpage1.py';
// Use escapeshellarg to escape arguments and prevent injection
$escapedArg1 = escapeshellarg($firstname);
$escapedArg2 = escapeshellarg($lastname);
$escapedArg3 = escapeshellarg($email);

// Build the command string
$command = "python $pythonScript $escapedArg1 $escapedArg2 $escapedArg3";

$output = array();
$returnVar = 0;

// Execute the command
exec($command, $output, $returnVar);

// Check the return value to see if the command was successful
if ($returnVar === 0) {
    echo "Python script executed successfully.";
    // $output will contain the output of the Python script
    print_r($output);
} else {
    echo "Error executing Python script.";
}
