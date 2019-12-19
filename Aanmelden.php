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
            <a href="Gameplay.php">Gameplay</a>
            <a href="Aanmelden.php">Aanmelden</a>
        </div>
    </nav>
    <div id="main" style="text-align: justify;">
        <h1 align="center">Contact</h1>
        <div class="formulier">
            <form method="post" action="mailto:jean.v.d.berge@outlook.com">
                Naam:<br>
                <input class="input" name="naam" size="39" maxlength="40" placeholder="Uw naam.." ><br>
                Adres:<br>
                <input class="input" name="adres" size="39" maxlength="30" placeholder="Uw adres.."><br>
                Postcode:<br>
                <input class="input" name="postcode" size="39" maxlength="10" placeholder="Uw postcode.."><br> 
                Woonplaats:<br>
                <input class="input" name="woonplaats" size="39" maxlength="30" placeholder="Uw woonplaats.."><br> 
                Telefoonnummer:<br>
                <input class="input" name="telefoonnummer" size="39" maxlength="20" placeholder="Uw telefoonnummer.."><br> 
                E-mail:<br>
                <input class="input" name="e-mail" size="39" maxlength="40" placeholder="Uw e-mailadres.."><br> 
                Bericht:<br>
                <textarea class="input"v rows="9" cols="41" placeholder="Uw bericht/vraag.."></textarea>
                <br>
                <div id="buttonholder">
                    <input class="buttoninput" type="submit" value="Verzenden">
                    <input class="buttoninput" type="reset" value="resetten">
                </div>
            </form>
        </div>
        
    
        <div>
            <table width="100%">
                <tr>
                    <th>Namen</th>
                    <th>E-mail</th>
                    <th>Tel</th>
                    <th>Adres</th>
                </tr>
                <tr>
                    <td>R.C. Ruis</td>
                    <td><a href="mailto:" robruis2002@gmail.com>robruis2002@gmail.com</a></td>
                    <td>+31613201478</td>
                    <td><a href="https://www.google.nl/maps/place/Manneegeul+3,+Goes/@51.516371,3.9129383,682m/data=!3m2!1e3!4b1!4m5!3m4!1s0x47c4620d8f93eb19:0xda6d724244d9537f!8m2!3d51.516371!4d3.915127" target="blank ">Manneegeul 3 Goes</a></td>
                </tr>
                <tr>
                    <td>T.H.M. Boot</td>
                    <td><a href="mailto:" thomasboot02@gmail.com>thomasboot02@gmail.com</a></td>
                    <td>+31618896805</td>
                    <td><a href="https://www.google.nl/maps/place/Korenbloem+49,+Kapelle/@51.4880747,3.9721066,682m/data=!3m2!1e3!4b1!4m5!3m4!1s0x47c4630ac381c937:0xace0ef2d19941e9d!8m2!3d51.4880747!4d3.9742953" target="blank ">Korenbloem 49 Kapelle</a></td>
                </tr>
                <tr>
                    <td>J.P. Bart</td>
                    <td> <a href="mailto:" jaapjanbart@gmail.com>jaapjanbart@gmail.com<a></td>
                <td>+31629383626 </td>
                <td><a href="https://www.google.nl/maps/place/Vroonland+19,+4401+JW+Yerseke/@51.496624,4.0358283,682m/data=!3m2!1e3!4b1!4m5!3m4!1s0x47c4645ae8d7762d:0x52297683991c69cf!8m2!3d51.496624!4d4.038017"target="blank ">Vroonland 19 Yeseke</a></td>
                </tr>
                <tr>
                    <td>A.C. Witte</td>
                    <td> <a href="mailto:" wtt@calvijncollege.nl>wtt@calvijncollege.nl<a></td>
                <td>(0118)623640</td>
                <td><a href="https://www.google.co.uk/maps/place/Jazzroute+60,+Middelburg/@51.483127,3.6438357,491m/data=!3m1!1e3!4m5!3m4!1s0x47c490f58d3272fb:0xdae4b009133e5c2e!8m2!3d51.483127!4d3.6460244" target="blank ">Jazzroute 60 Middelburg</a></td>
                </tr>
                <tr>
                    <td>J.M.J. van den Berge</td>
                    <td><a href="mailto:" jean.v.d.berge@outlook.com>jean.v.d.berge@outlook.com</a></td>
                    <td>+31624838546</td>
                    <td><a href="https://www.google.com/maps/place/Capelleweg+13,+4416+PN+Kruiningen/@51.4681765,4.0378085,682m/data=!3m2!1e3!4b1!4m5!3m4!1s0x47c464e70dee67ff:0x6108edbfffbf84a0!8m2!3d51.4681765!4d4.0399972" target=" blank ">Capelleweg 13 Kruiningen</a></td>
                </tr>
            </table>
        </div>
<?php
include 'db_connection.php';
$conn = OpenCon();
$sql = "SELECT Naam-begeleider FROM Begeleiders" ;
$result = mysql_query($sql);
CloseCon($conn);

?>

</body>

</html>