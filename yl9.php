<?php

$number1 = $_GET['number1'] ?? '';
$number2 = $_GET['number2'] ?? '';
$number3 = $_GET['number3'] ?? '';
$answer = '';

if (
    $number1 !== '' &&
    $number2 !== '' &&
        $number3 !== '' &&
    is_numeric($number1) &&
    is_numeric($number2)&&
    is_numeric($number3)
) {
    if ( $number1 <= 1 or $number1 <= 1 or $number1 <= 1) {
        $answer = "See pole kolmnurk";
    } elseif ($number1 == $number2 && $number2 == $number3) {
        $answer = "Võrdkülgne";
}
elseif ($number1 == $number2 or $number2 == $number3 or $number3 == $number1) {
        $answer = "Võrdhaarne";
} 
else {
    $answer = "Erikülgsed";
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
<form action="yl9.php" method="get">
    <label for="number1">Sisesta esimene number:</label><br>
    <input type="text" id="number1" name="number1" value="<?= $number1 ?>"><br>
    <label for="number2">Sisesta teine number:</label><br>
    <input type="text" id="number2" name="number2" value="<?= $number2 ?>"><br>
        <label for="number2">Sisesta kolmas number:</label><br>
    <input type="text" id="number3" name="number3" value="<?= $number3 ?>"><br>
        <input type="submit" value="Arvuta">
</form>
<?php
if ($answer) {
    echo "<p>$answer</p>";
}
?>
</body>
</html>


