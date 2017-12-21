<?php

function open()
{
    $dbhost = "localhost";
    $dbuser = "awarrier99";
    $dbpass = "MYSQLPass1399";
    $db = "everchange_login";
    
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connection failed: %s\n". $conn -> error);
    
    return $conn;
}

function close($conn)
{
    $conn -> close();
}

?>