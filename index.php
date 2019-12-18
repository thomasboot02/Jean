<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);

$sql = "SELECT Naam-begeleider FROM Begeleiders" ;
$result = mysql_query($sql);
$naam = mysql_fetch_assoc($result);

echo $naam['naam']
?>