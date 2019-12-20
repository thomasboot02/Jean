<?php
if ( isset($_POST)) {
 
    $Naam = strip_tags($_POST['Naam']);
    $Telefoonnummer = strip_tags($_POST['Telefoonnummer']);
    $Emailadres = strip_tags($_POST['Emailadres']);
 
    if (empty(Naam) || empty(Telefoonnummer)) {
        die('invoerfout! Naam of telefoonnummer is niet gevuld');
    }
 
    $servername = "127.0.0.1";
    $username = "u392629804_usergroep2";
    $password = "mrMbF]C4";
    $schema = "u392629804_groep2";
 
    // Create connection
    $conn = new mysqli($servername, $username, $password, $schema);
 
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 
    // Insert data
    $sql = "INSERT INTO Leden (Naam, Telefoonnummer, Emailadres)
    VALUES ('{$Naam}', '{$Telefoonnummer}', '{$Emailadres}')";
 
    if ($conn->query($sql) === TRUE) {
        echo "U bent nu ingeschreven!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
 
?>
