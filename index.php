<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>PHP Snacks</title>
</head>
<body>

    <!-- SNACK 1 -->

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

<!-- SNACK 2 -->
<div class="mt-5 ms-3">
<form action="process.php" method="GET">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="mail">Email:</label>
        <input type="email" id="mail" name="mail" required><br><br>

        <label for="age">Età:</label>
        <input type="text" id="age" name="age" required><br><br>

        <input type="submit" value="Invia">
    </form>

</div>

 

</body>
</html>