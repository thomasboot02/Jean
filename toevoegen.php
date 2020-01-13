<?php
if ( isset($_POST)) {
 
    $Lidnr = strip_tags($_POST['Lidnr']);
    $Naam = strip_tags($_POST['Naam']);
    $Adres = strip_tags($_POST['Adres']);
    $Postcode = strip_tags($_POST['Postcode']);
    $Woonplaats = strip_tags($_POST['Woonplaats']);
    $Telefoonnummer = strip_tags($_POST['Telefoonnummer']);
    $Emailadres = strip_tags($_POST['Emailadres']);
    
    if (empty(Naam) || empty(Telefoonnummer)) {
        die('invoerfout! Naam of telefoonnummer is niet gevuld');
    }
 
    $servername = "45.13.252.1";
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
    $sql = "INSERT INTO Leden (Lidnr, Naam, Adres, Postcode, Woonplaats, Telefoonnummer, Emailadres)
    VALUES ('{$Lidnr}', '{$Naam}', '{$Adres}', '{$Postcode}', '{$Woonplaats}', '{$Telefoonnummer}', '{$Emailadres}')";
 
    if ($conn->query($sql) === TRUE) {
        echo "U bent nu ingeschreven!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
 
?>
