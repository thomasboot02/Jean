<!DOCTYPE html>
<html>

<head>
    <title>WE-Sport Opvragen</title>
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
        <h1 align="center">Soorten E-Sports</h1>
        <ul>
            <li><strong>Real time strategy games (RTS)</strong> zijn de games waarvan het doel is het veroveren van gebied en bezit van de tegenstander en het veiligstellen van je eigen gebied. Je kunt tijdens de game je gebied uitbreiden en veranderen. Het
                soort spel heeft tactisch inzicht nodig en maakt gebruik van uitgebreide technische opties.</li>
            <li><strong>Vechtsport games</strong> zijn de spellen waarin je een online sport-vecht karakter bent die 1 op 1 de strijd aan gaat met een tegenstander, waarbij de karakters verschillende specialiteiten hebben en ontwikkelen. Een speler moet daarbij
                vechttechnieken trainen om goed te worden. De gevechten vinden plaats in een arena.</li>
            <li><strong>First person shooter games (FPS)</strong>, dit is ook een vechtgame, echter niet gebaseerd op sport maar op wapens. Dit kunnen geweren in alle soorten zijn, maar ook messen, granaten enzovoorts. De spellen worden letterlijk gespeeld
                door de ogen van de speler, wat betekent dat je niet een een totaal lichaam in actie ziet waar je naar kijkt, maar je bent het lichaam, dus je ziet je bijvoorbeeld je armen en handen die een mes vasthouden.</li>
            <li><strong>Multi Online Battle Arena games (MOBA)</strong> zijn afgeleid van de RTS games, maar gaan minder over de individuele speler in het team. Je kiest wat je in een team wil zijn, bijvoorbeeld een sniper, en vervult deze rol binnen het
                team dat belangrijker is als geheel. Het verschil met een RTS game is dus het spelen als het team dat je maakt (RTS) tegenover het spelen van een individu binnen een team (MOBA). Het doel van het spel is min of meer hetzelfde, het veroveren
                van gebied.</li>
        </ul>
        <h2 align="center">Populairste e-sports</h2>
        De rangschikking op populariteit wordt gemeten naar het te winnen prijzengeld in toernooien. Opvallend is dat &quot;echte&quot; sport games, zoals het voetbalspel FIFA op nummer 56 staat in het jaar 2016, voorgegaan en gevolgd door alleen maar RTS, FPS,
        MOBA en vecht games. Er is dan ook genoeg discussie over de naam &quot;sports&quot; games. Over het algemeen wordt ingestemd met denksport, omdat er fysiek relatief weinig gebeurt, maar het doet de spelers geen eer aan door het uithoudingsvermogen,
        de uren in training en de timing en behendigheid die je als gamer moet hebben. De populairste games zijn:

<br>
        <table align="center">
            <tr>
                <th>Naam</th>
                <th>Soort</th>
                <th>Prijzengeld</th>
            </tr>
            <tr>
                <td>Dota 2</2>
                </td>
                <td>MOBA</td>
                <td>$88,139,421.00</td>
            </tr>
            <tr>
                <td>League of Legends</td>
                <td>MOBA</td>
                <td>$36,606,421.97</td>
            </tr>
            <tr>
                <td>Counter-Strike Go</td>
                <td>FPS</td>
                <td> $24,118,260.27</td>
            </tr>
            <tr>
                <td>Star Craft 2</td>
                <td>RTS</td>
                <td>$21,199,404.78</td>
            </tr>
            <tr>
                <td>Counter-Strike</td>
                <td>FPS</td>
                <td>$10,765,812.78</td>
            </tr>
        </table>
        
        <?php
$sql = "SELECT Naam, Telefoonnummer, Emailadres FROM Leden";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Naam: " . $row["Naam"]. " - Telefoonnummer: " . $row["Telefoonnummer"]. " - Emailadres: " . $row["Emailadres"]. "<br>";
	}
} else {
    echo "0 results";
}
$conn->close();
?>
    </div>



   
</body>

</html>