<!DOCTYPE html>
<html>
<head>
    <title>Busreis</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <input type="number" name="age" id="age">
    <input type="submit" name="submit" value="Bereken Prijs">
</form>
<?php
if (isset($_POST['submit'])) {
$bedrag = 10;
$leeftijd = $_POST['age'];
    // controleren of leeftijd groter is dan 3
    if ($leeftijd <= 3){
       $nieuw = 0;
    // controleren of leeftijd tussen 3 en 12 is en 50% van bedrag maakt.
    } elseif ($leeftijd > 3 && $leeftijd <= 12) {
       $nieuw = floor($bedrag)/2;
    // controleren of leeftijd tussen 12 en 65 is en 50% van bedrag maakt.
    } elseif ($leeftijd > 12 && $leeftijd < 66) {
        $nieuw = 10;
    } else {
       $nieuw = floor($bedrag - 0)/2;
    }
}
echo ('<p> Uw leeftijd is:'.$leeftijd. '<br> Hiervoor betaalt u:' .$nieuw.'');
?>
</body>
</html>
