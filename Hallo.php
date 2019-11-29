<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 

$getal = rand(1000,9999);
$length = 2;

$randomString = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);


echo"De gekozen postcode is ";
echo"$getal";
echo "$randomString.";
    
     ?>
  </body>
</html>