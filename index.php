<?php

$user = "";
$location = "";

if (isset($user) && isset($location)) {
$user = $_GET['user'];
$location = $_GET['location'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting</title>
</head>
<body>
<form action="index.php" method="get">
    <label for="user">Name:</label><br>
    <input type="text" id="user" name="user" value="<?= $user ?>"><br>
    <label for="location">Location:</label><br>
    <input type="text" id="location" name="location" value="<?= $location ?>"><br>
    <input type="submit" value="Submit">
</form>
<?php
if ($user) {
    echo "<p>Hello $user";

    if ($location) {
        echo " from $location";
    }

    echo "</p>";
}
?>
</body>
</html>



