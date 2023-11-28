<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 2</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    // Verifica dei requisiti
    if (strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
}
?>

</body>
</html>