<?php

$number1 = $_GET['number1'] ?? '';;
$answer = '';

if (
    $number1 !== '' &&
    is_numeric($number1)
) {
    if ($number1 % 400 == 0 or $number1 % 4 == 0 and $number1 % 100 >=0) {
        $answer = "liigaasta";
    } else {
        $answer = "ei ole";
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
<form action="yl8.php" method="get">
    <label for="number1">Sisesta esimene number:</label><br>
    <input type="text" id="number1" name="number1" value="<?= $number1 ?>"><br>
        <input type="submit" value="Arvuta">
</form>
<?php
if ($answer) {
    echo "<p>$answer</p>";
}
?>
</body>
</html>


