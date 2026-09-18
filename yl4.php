<?php

$number1 = $_GET['number1'] ?? '';
$number2 = $_GET['number2'] ?? '';
$smaller = '';

if (
    $number1 !== '' &&
    $number2 !== '' &&
    is_numeric($number1) &&
    is_numeric($number2)
) {
    if ($number1 < $number2) {
        $smaller = $number1;
    } else {
        $smaller = $number2;
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
<form action="yl4.php" method="get">
    <label for="number1">Sisesta esimene number:</label><br>
    <input type="text" id="number1" name="number1" value="<?= $number1 ?>"><br>
    <label for="number2">Sisesta teine number:</label><br>
    <input type="text" id="number2" name="number2" value="<?= $number2 ?>"><br>
        <input type="submit" value="Arvuta">
</form>
<?php
if ($smaller) {
    echo "<p>Smaller number: $smaller</p>";
}
?>
</body>
</html>


