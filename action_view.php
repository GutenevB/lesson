<?php
include_once 'users.php';
if (isset($_POST['address']) && isset($_POST['name'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $s = new Users();
    $s->saveUser($name, $address);
    header("Location: /index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add user</title>
</head>
<body>
<div id="map"></div>
<form method="post">

    <h2>Add user</h2>
    <input type="text" name="name" placeholder="|Name"> </br>
    <input id="address" type="text" name="address" placeholder="|Address"> </br>

    <input type="submit" value="Submit"></br>
</form>

</body>
</html>