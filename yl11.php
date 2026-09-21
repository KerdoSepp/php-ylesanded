<?php

$string = $_GET['string'] ?? '';
$answer = '';

if (
    $string !== ''
) {
if (strlen($string) >= 6 && strlen($string) % 2 == 0) {
    $answer = substr($string, (int)(strlen($string) / 2) - 1, 3);
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
<form action="yl11.php" method="get">
    <label for="string">Sisesta string:</label><br>
    <input type="text" id="string" name="string" value="<?= $string ?>"><br>
        <input type="submit" value="Arvuta">
</form>
<?php
if ($answer) {
    echo "<p>$answer</p>";
}
?>
</body>
</html>


