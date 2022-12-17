<?php
require 'connection.php';

class User extends Connection
{
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $age;
    public $password;

    function __construct($email = null, $password = null, $first_name = null, $last_name = null, $phone = null, $age = null, $id = null, $admin = null)

    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->age = $age;
        $this->phone = $phone;
        $this->id = $id;
        $this->admin = $admin;
    }
    function setId($id)
    {
        $this->id = $id;
    }

    public function registration()
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->email]);
        $result = $stmt->fetch();

        if ($result['id'] == '') {
            $ins = "INSERT INTO `users` (first_name,last_name,email,password)VALUES(?,?,?,?)";
            $stmt = $this->connect()->prepare($ins);
            $stmt->execute([$this->first_name, $this->last_name, $this->email, $this->password]);
            header('location:../login.php');
            $_SESSION['type_message'] = "success";
            $_SESSION['message'] = "Registration has been added successfully !";
        } else {
            $_SESSION['type_message'] = "error";
            $_SESSION['message'] = "Email already exists!!";
            header('location:../signup.php');
        }
    }


    public function login()
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->email]);
        $result = $stmt->fetch();
        if (!isset($result["password"])) {
            $_SESSION['type_message'] = "error";
            $_SESSION['message'] = "Email incorrect";
            header('location: ../login.php');
        } else {
            $res = password_verify($this->password, $result["password"]);
            if ($res) {
                $_SESSION['id'] = $result['id'];
                $_SESSION['first_name'] = $result['first_name'];
                $_SESSION['last_name'] = $result['last_name'];
                $_SESSION['age'] = $result['age'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['phone'] = $result['phone'];
                $_SESSION['admin'] = $result['admin'];
                header('location:../index.php');
            } else {
                $_SESSION['type_message'] = "error";
                $_SESSION['message'] = 'Password incorrect';
                header('location:../login.php');
            }
        }
        die;
    }
    public function updateUser()
    {

        if ($_SESSION['id'] == $this->id) {
            $_SESSION['id'] = $_POST['id'];
            $_SESSION['first_name'] = $_POST['first_name'];
            $_SESSION['last_name'] = $_POST['last_name'];
            $_SESSION['age'] = $_POST['age'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['phone'] = $_POST['phone'];
            $_SESSION['password'] = $_POST['password'];
        }
        if (isset($_POST['admin'])) {
            $upd = "UPDATE `users` SET `first_name`= ? ,`last_name`= ? ,`age`= ? ,`email`= ? ,`phone`= ? ,`password`= ? ,`admin`=?  WHERE `id` = ?";
            $stmt = $this->connect()->prepare($upd);
            $stmt->execute([$this->first_name, $this->last_name, $this->age, $this->email, $this->phone, $this->password, $this->admin, $this->id]);
        } else {
            $upd = "UPDATE `users` SET `first_name`= ? ,`last_name`= ? ,`age`= ? ,`email`= ? ,`phone`= ? ,`password`= ?  WHERE `id` = ?";
            $stmt = $this->connect()->prepare($upd);
            $stmt->execute([$this->first_name, $this->last_name, $this->age, $this->email, $this->phone, $this->password, $this->id]);
        }
        if ($stmt) {
            $_SESSION['type_message'] = "success";
            $_SESSION['message'] = 'Information are updated';
        } else {
            $_SESSION['type_message'] = "error";
            $_SESSION['message'] = 'Retry again !';
        }
        header('location:../users.php');
        die;
    }

    public function allUsers()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    public function getUser()
    {
        $sql = "SELECT * FROM users where id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->id]);
        $result = $stmt->fetch();
        return $result;
    }
    public function deleteUser()
    {
        $dele = "DELETE FROM users WHERE id = ?";
        $stmt = $this->connect()->prepare($dele);
        $stmt->execute([$this->id]);
        if ($stmt) {
            $_SESSION['type_message'] = "success";
            $_SESSION['message'] = 'Account are deleted';
        } else {
            $_SESSION['type_message'] = "error";
            $_SESSION['message'] = 'Retry again !';
        }
        if ($this->id == $_SESSION['id']) {
            session_destroy();
        } else {
            header('location: index.php');
            die;
        }
    }
}
