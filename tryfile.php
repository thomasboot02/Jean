<?php
include 'db_connection.php';
$conn = OpenCon();
$sql = "SELECT Naam-begeleider FROM Begeleiders" ;
$result = mysql_query($sql);
CloseCon($conn);

?>