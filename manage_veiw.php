<?php

include_once 'users.php';
$tabl = new Users();


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <script type="text/javascript">
        function Delete(){
            return confirm('Удалить пользователя?')
        }
    </script>
    <meta charset="UTF-8">
    <title>Manage</title>
</head>
<body>
<form method="post" action="">
    <span><a href="index.php">Back</a> </span>
    <span><a href="action_view.php">Add new user</a> </span>
    <table border="2" width="40%">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th colspan="2">Action</th>
        </thead>
        <?php foreach ($tabl->getUsers() as $value) {
            ?>
        <tbody>
        <tr>
            <td><?php echo $value['0'] ?></td>
            <td><?php echo $value['1'] ?></td>
            <td><?php echo $value['2'] ?></td>
                <td><a href="edit_user.php?id=<?php echo $value[0] ?>">Edit</a> </span></td>
                <td><a onclick="return Delete();" href="delete_user.php?del=<?php echo $value[0] ?>">Delete</a></span></td>

        </tr>
        </tbody>
        <?php }?>>
    </table>
</form>
</body>
</html>
