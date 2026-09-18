<?php

$kroon = "";
$converted = "";

$rate = 15.6466;

if (isset($kroon)) {
$converted = round(($_GET['kroon']/$rate), 2);
}

if (isset($kroon)) {
$kroon = $_GET['kroon'];
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
<form action="yl1.php" method="get">
    <label for="kroon">Sisesta summa kroonides:</label><br>
    <input type="text" id="kroon" name="kroon" value="<?= $kroon ?>"><br>
</form>
<?php
if ($converted) {
    echo "<p>$converted Eurot</p>";
}
?>
</body>
</html>


