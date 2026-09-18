<?php

$radius = $_GET['radius'] ?? '';
$area = "";
$circumference = "";

$pi = pi();

if (isset($radius)) {
    $radius = (float) $radius;
    $area = pi() * $radius ** 2;
    $circumference = 2 * pi() * $radius;
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
<form action="yl2.php" method="get">
    <label for="radius">Enter radius:</label><br>
    <input type="text" id="radius" name="radius" value="<?= $radius ?>"><br>
</form>
<?php
if ($radius) {
    echo "<p>Area: $area</p>";
    echo "<p>Circumference: $circumference</p>";
}
?>
</body>
</html>


