<?php

$number = "";
$output = "";

function calculate($number) {
$number2 = $number.$number;
$number3 = $number.$number.$number;
return $number + $number2 + $number3;
}

if (isset($_GET['number']) && is_numeric($_GET['number'])) {
    $number = $_GET['number'];
    $output = calculate($number);
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
<form action="yl3.php" method="get">
    <label for="number">Sisesta number:</label><br>
    <input type="text" id="number" name="number" value="<?= $number ?>"><br>
</form>
<?php
if ($output) {
    echo "<p>$output</p>";
}
?>
</body>
</html>


