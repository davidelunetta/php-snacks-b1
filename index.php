<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks</title>
</head>
<body>
<?php

// Array delle partite con squadra di casa, squadra ospite, e punteggio
$partite = array(
    array("squadra_casa" => "Olimpia Milano", "squadra_ospite" => "Cantù", "punteggio_casa" => 55, "punteggio_ospite" => 60),
    array("squadra_casa" => "Virtus Bologna", "squadra_ospite" => "Fortitudo Bologna", "punteggio_casa" => 70, "punteggio_ospite" => 65),
    array("squadra_casa" => "Reyer Venezia", "squadra_ospite" => "Dinamo Sassari", "punteggio_casa" => 62, "punteggio_ospite" => 58),
    array("squadra_casa" => "Venezia", "squadra_ospite" => "Reggiana", "punteggio_casa" => 90, "punteggio_ospite" => 70),
);

// Stampa le partite a schermo
foreach ($partite as $partita) {
    echo $partita['squadra_casa'] . " - " . $partita['squadra_ospite'] . " | " . $partita['punteggio_casa'] . "-" . $partita['punteggio_ospite'] . "<br>";
}
?>

</body>
</html>