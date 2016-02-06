<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 04.02.16
 * Time: 0:15
 */
include 'DataBase.php';

class Users
{
    public $base;
    public $id;

    public function __construct()
    {
        $this->base = new DataBase();
    }

    public function saveUser($name, $address)
    {
        $save = "INSERT INTO user_map(`name`,`address`)
                VALUE('$name','$address')";
        $this->base->execute($save);
        return true;

    }

    public function getUser($get)
    {
        $this->id = $get;
        $edit = "SELECT * FROM `user_map` WHERE `id`= $this->id";
        $this->base->execute($edit);
        return $this->base->fetchAll();

    }

    public function getUsers()
    {
        $users = "SELECT * FROM `user_map` ";
        $this->base->execute($users);
        return $this->base->fetchAll();
    }

    public function updateUser($id,$name,$address)
    {
        $update = "UPDATE `user_map` SET `user_map`.`name` = '$name', `user_map`.`address` = '$address'
                   WHERE `user_map`.`id` = '$id'";
        $this->base->execute($update);
        return true;
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM user_map WHERE `user_map`.`id`= $id ";
        return $this->base->execute($sql);

    }


}
