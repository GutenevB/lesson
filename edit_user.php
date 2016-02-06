<?php
include_once 'users.php';

$edit = new Users();
if (!empty($_POST)){
    $edit_name = $_POST['edit_name'];
    $edit_address = $_POST['edit_address'];

    if($edit->updateUser($_GET['id'],$edit_name,$edit_address)){
        header("Location: manage_veiw.php");

    }else{
        echo 'Error';
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="post" action="edit_user.php?<?php echo $_SERVER['QUERY_STRING'] ?>">

    <h2>Edit user</h2>
    <?php
    foreach ($edit->getUser($_GET['id']) as $value) {
        echo "<input type=\"text\" name=\"edit_name\" value='$value[1]'><br >";
        echo "<input type=\"text\" name=\"edit_address\" value='$value[2]'><br >";
    }?>

    <input type="submit" value="Submit" name="button"></br>
</form>
</body>
</html>