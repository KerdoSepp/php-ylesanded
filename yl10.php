<?php

$name = $_GET['name'] ?? '';
$location = $_GET['location'] ?? '';
$age = $_GET['age'] ?? '';
$answer1 = '';
$answer2 = '';

if (
    $name !== '' &&
    $location !== '' &&
        $age !== '' &&
         is_numeric($age)
) {
    if ($location == "Saaremaa") {
        $answer1 = "Elad saaremaal nice";
    }
else {
    $answer1 = "Ei ela saaremaal";

}
    if ($age >= 18) {
        $answer2 = "Saad autot juhtida";
    }
else {
    $answer2 = "Ei saa autot juhtida";

}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form action="yl10.php" method="get">
    <label for="name">Sisesta enda nimi:</label><br>
    <input type="text" id="name" name="name" value="<?= $name ?>"><br>
    <label for="location">Sisesta enda asukoht:</label><br>
    <input type="text" id="location" name="location" value="<?= $location ?>"><br>
        <label for="location">Sisesta enda vanus:</label><br>
    <input type="text" id="age" name="age" value="<?= $age ?>"><br>
        <input type="submit" value="Saada">
</form>
<?php
if ($answer1 && $answer2 && $name) {
    echo "<p> $answer1</p>";
    echo "<p> $answer2</p>";
    echo "<p>Tere $name!</p>";
}
?>
</body>
</html>


