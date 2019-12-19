<?php
function OpenCon()
{
    $dbhost = "127.0.0.1";
    $dbuser = "root";
    $dbpass = "1234";
    $db = "u392629804_groep2";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n".$conn->error);

    return $conn;
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
}

function CloseCon($conn)
{
    $conn -> close();
}
echo "Connected Successfully";
?>