<?php

include_once "users.php";
if (isset($_GET['del'])){
    $id = $_GET['del'];
    $art = new Users();
    $art->deleteUser($id);

}
header("Location: manage_veiw.php");