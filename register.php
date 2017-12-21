<?php

include "connect.php";

$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
$uname = $_POST["username"];
$email = $_POST["email"];
$pass = $_POST["pass"];

if (isset($fname) && isset($lname) && isset($uname) && isset($email) && isset($pass)) {
    $conn = open();
    
    $fname = $conn->real_escape_string($fname);
    $lname = $conn->real_escape_string($lname);
    $uname = $conn->real_escape_string($uname);
    $email = $conn->real_escape_string($email);
    $pass = $conn->real_escape_string($pass);
    
    $result = $conn->query("INSERT INTO login_table (id, First_Name, Last_Name, Username, Email, Password) VALUES (NULL, '$fname', '$lname', '$uname', '$email', '$pass')");
    if ($result)
    {
        echo "Registered successfully!";
    }
    
    else
    {
        echo "An error occurred. Try again.";
    }
    
    close($conn);
}


?>