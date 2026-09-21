<?php

$number1 = $_GET['number1'] ?? '';
$answer = '';

if (
    $number1 !== '' &&
    is_numeric($number1)
) {
    if ($number1 % 2 == 0) {
        $answer = "even";
    } else {
        $answer = "odd";
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
<form action="yl7.php" method="get">
    <label for="number1">Sisesta esimene number:</label><br>
    <input type="text" id="number1" name="number1" value="<?= $number1 ?>"><br>
        <input type="submit" value="Arvuta">
</form>
<?php
if ($answer) {
    echo "<p>Number is: $answer</p>";
}
?>
</body>
</html>


