<!DOCTYPE html>
<html>

<head>
    <title>WE-Sport Aanmelden </title>
    <link rel="stylesheet" type="text/css" href="Website.css">
</head>

<body>
    <nav id="balk" align="center">
        <div id="buttonholder">
            <a href="index.php">Home</a>
            <a href="Opvragen.php">Opvragen</a>
            <a href="Aanmelden.php">Aanmelden</a>
            <a href="Hoehetwerkt.php">Hoe het werkt</a>
        </div>
    </nav>
    <div id="main" style="text-align: justify;">
        <h1 align="center">Contact</h1>
<form action="toevoegen.php" method="post">
        <table style = "width:400px">
        <tr>
        <td>
        Lidnr:
        </td>
        <td>
         <input type="text" name="Lidnr">
         </td>
        </tr>
        <tr>
        <td>
        Naam:
        </td>
        <td>
         <input type="text" name="Naam">
         </td>
        </tr>
        <tr>
        <td>
        Adres:
        </td>
        <td><input type="text" name="Adres"></td>
        </tr>
        <tr>
        <td>
        Postcode:
        </td>
        <td><input type="text" name="Postcode"></td>
        </tr>
        <tr>
        <td>
        Woonplaats:
        </td>
        <td><input type="text" name="Woonplaats"></td>
        </tr>
        <tr>
        <td>
        Telefoonnummer:
        </td>
        <td><input type="text" name="Telefoonnummer"></td>
        </tr>
        <tr>
        <td>
        Emailadres:
        </td>
        <td><input type="text" name="Emailadres"></td>
        </tr>
        </table>
        <input type="submit">
        
    
    </form>
 
    </body>

</html>