<!DOCTYPE html>
<html>
 
<head>
    <title>WE-Sport Gameplay </title>
    <link rel="stylesheet" type="text/css" href="Website.css">
</head>
 
<body>
    <nav id="balk" align="center">
        <div id="buttonholder">
            <a href="index.php">Home</a>
            <a href="Opvragen.php">Opvragen</a>
            <a href="Aanmelden.php">Aanmelden</a>
            <a href="extra.php">Hoe het werkt</a>
        </div>
    </nav>
    <div id="main" style="text-align: justify;">
        <h1 align="center">Hoe gaat het te werk?</h1>
        <div align="center">
            <video width="640" height="360" controls="controls" autoplay="autoplay" loop="loop">
        <source src="henk.mp4" type="video/mp4" />
        </video>    
 
</script>
 
 
 <div id="poll">
<h3>Ben je overtuigd?</h3>
<form>
Ja:
<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
<br>Nee:
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
</form>
</div>
 
        
    </div>
 
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
 
 
echo '<html>';
echo '<head>';
echo '<title>Kalender</title>';
 
echo '</head>';
echo '<body>';
 
 
// Tijdzone voor Nederland
date_default_timezone_set('Europe/Amsterdam');
// Huidige datum en tijd als een integer
$iDatumEnTijd = time();
// Aparte stringvariabelen voor de dag, de maand en het jaar
$sDag   = date('d', $iDatumEnTijd);
$sMaand = date('m', $iDatumEnTijd);
$sJaar  = date('Y', $iDatumEnTijd);
 
// Eeste dag van de maand
$iEersteDagVanDeMaand = mktime(0, 0, 0, $sMaand, 1, $sJaar);
 
/**
*https://www.w3schools.com/php/func_date_mktime.asp
 * Titel van de kalender
 * 
 * Deze procedure genereert een string met een lange maandnaam en het 
 * jaar.  Met date('F') krijgen we een lange maandnaam in het Engels: 
 * January, February, March enzovoort.  Voor besturingssystemen die 
 * geen Nederlands ondersteunen, vervangen we deze strings door 
 * Nederlandstalige maandnamen: Januari, Februari, Maart enzovoort.
 */
$sKalenderkop = date('F', $iEersteDagVanDeMaand);
$aEngels = array(
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
);
$aNederlands = array(
    'Januari',
    'Februari',
    'Maart',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Augustus',
    'September',
    'Oktober',
    'November',
    'December'
);
$sKalenderkop = str_replace($aEngels, $aNederlands, $sKalenderkop);
$sKalenderkop .= ' ' . $sJaar;
unset($aEngels, $aNederlands);
 
// Bepalen met welke weekdag de maand begint
$sEersteWeekdag = date('D', $iEersteDagVanDeMaand) 
// Aantal lege cellen in de eerste week
switch ($sEersteWeekdag) {
    case 'Mon':
        $iLegeCellen = 0;
        break;
    case 'Tue':
        $iLegeCellen = 1;
        break;
    case 'Wed':
        $iLegeCellen = 2; break;
    case 'Thu':
        $iLegeCellen = 3;
        break;
    case 'Fri':
        $iLegeCellen = 4;
        break;
    case 'Sat':
        $iLegeCellen = 5;
        break;
    case 'Sun':
        $iLegeCellen = 6;
        break;
}
 
// Aantal dagen in de huidige maand (28 t/m 31)
//https://www.php.net/manual/en/function.cal-days-in-month.php
 
$iAantalDagenInDezeMaand = cal_days_in_month(CAL_GREGORIAN, $sMaand, $sJaar);
 
// Begin van de tabel in (X)HTML
//https://developer.mozilla.org/nl/docs/Web/HTML/Element/abbr
 
echo "<table border=1 cellspacing=2>";
echo '<thead>';
echo '<tr><th colspan="7">' . $sKalenderkop . '</th></tr>';
echo '<tr>';
echo '<th><abbr title="maandag">ma</abbr></th>';
echo '<th><abbr title="dinsdag">di</abbr></th>';
echo '<th><abbr title="woensdag">wo</abbr></th>';
echo '<th><abbr title="donderdag">do</abbr></th>';
echo '<th><abbr title="vrijdag">vr</abbr></th>';
echo '<th><abbr title="zaterdag">za</abbr></th>';
echo '<th><abbr title="zondag">zo</abbr></th>';
echo '</tr>';
echo '</thead>';
 
// Weken en dagen
echo '<tbody>';
echo '<tr>';
 
// Dag van de week tellen van 1 t/m 7
$iWeekdag = 1;
 
// Aantal lege cellen toevoegen
while ($iLegeCellen > 0) {
    echo '<td>&nbsp;</td>';
    $iLegeCellen = $iLegeCellen - 1;
    $iWeekdag++;
}
 
// Dag van de maand van 1 t/m 31
$iDagnummer = 1;
// Alle dagen in de maand een voor een weergeven
while ($iDagnummer <= $iAantalDagenInDezeMaand)
{
    echo '<td>' . $iDagnummer . '</td>';
    $iDagnummer++;
    $iWeekdag++;
 
    // Na 7 dagen een nieuwe rij beginnen voor een nieuwe week
    if ($iWeekdag > 7) {
        echo '</tr><tr>';
        $iWeekdag = 1;
    }
}
 
// Einde van de tabel afmaken met lege cellen
while ($iWeekdag > 1 && $iWeekdag <= 7) {
    echo '<td>&nbsp;</td>';
    $iWeekdag++;
}
echo '</tr>';
echo '</tbody>';
echo '</table>';
 
 
echo '</body>';
echo '</html>';
