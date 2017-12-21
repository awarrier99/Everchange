<?php

include "connect.php";

$user = $_POST["username"];
$pass = $_POST["pass"];

if(isset($user) && isset($pass))
{
    $conn = open();
    
    $user = $conn->real_escape_string($user);
    $pass = $conn->real_escape_string($pass);

    $result = $conn->query("SELECT * FROM login_table WHERE Username = '$user'");

    if ($result->num_rows == 0)
    {
        echo "The username is incorrect! <br>";
    }

    else
    {
        $tbl_pass = $result->fetch_array()["Password"];
        if ($tbl_pass == $pass)
        {
            echo "Login successful! <br>";
        }
        
        else
        {
            echo "The password is incorrect! <br>";
            echo $tbl_pass;
        }
    }

    $result->close();
    close($conn);
}


?>