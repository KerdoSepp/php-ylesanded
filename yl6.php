<?php

$number1 = $_GET['number1'] ?? '';
$number2 = $_GET['number2'] ?? '';
$number3 = $_GET['number3'] ?? '';
$biggest = '';

if (
    $number1 !== '' &&
    $number2 !== '' &&
        $number3 !== '' &&
    is_numeric($number1) &&
    is_numeric($number2)&&
    is_numeric($number3)
) {
    if ($number1 > $number2 && $number3) {
        $biggest = $number1;
    } elseif ($number2 > $number1 && $number3) {
        $biggest = $number2;
}
elseif ($number3 > $number1 && $number2) {
        $biggest = $number3;
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
<form action="yl6.php" method="get">
    <label for="number1">Sisesta esimene number:</label><br>
    <input type="text" id="number1" name="number1" value="<?= $number1 ?>"><br>
    <label for="number2">Sisesta teine number:</label><br>
    <input type="text" id="number2" name="number2" value="<?= $number2 ?>"><br>
        <label for="number2">Sisesta kolmas number:</label><br>
    <input type="text" id="number3" name="number3" value="<?= $number3 ?>"><br>
        <input type="submit" value="Arvuta">
</form>
<?php
if ($biggest) {
    echo "<p>Suurim number: $biggest</p>";
}
?>
</body>
</html>


