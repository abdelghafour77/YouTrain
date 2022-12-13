<?php
require 'connection.php';
// session_start();

class User extends Connection
{
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $age;
    public $password;


    function __construct($email = null, $password = null, $first_name = null, $last_name = null, $phone = null, $age = null, $id = null)

    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->age = $age;
        $this->phone = $phone;
        $this->id = $id;
    }


    public function registration()
    {
        $ins = "INSERT INTO `users` (first_name,last_name,email,password)VALUES(?,?,?,?)";
        $stmt = $this->connect()->prepare($ins);
        $stmt->execute([$this->first_name, $this->last_name, $this->email, $this->password]);
        header('location:../login.php');
    }


    public function login()
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->email]);
        $result = $stmt->fetch();
        //var_dump($result);
        //die;
        if (!isset($result["password"])) {
            $_SESSION['message'] = "Email incorrect";
            header('location: ../login.php');
        } else {
            // for hashed password
            $res = password_verify($this->password, $result["password"]);
            // $res = ($result["password"] == $this->password) ? true : false;
            if ($res) {
                $_SESSION['id'] = $result['id'];
                $_SESSION['first_name'] = $result['first_name'];
                $_SESSION['last_name'] = $result['last_name'];
                $_SESSION['age'] = $result['age'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['phone'] = $result['phone'];
                // $_SESSION['password'] = $result['password'];
                header('location:../index.php');
            } else {
                $_SESSION['message'] = 'Mot de passe incorrect';
                header('location:../login.php');
            }
        }
        die;
    }
    public function updateUser()
    {

        $_SESSION['id'] = $_POST['id'];
        $_SESSION['first_name'] = $_POST['first_name'];
        $_SESSION['last_name'] = $_POST['last_name'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['password'] = $_POST['password'];

        $upd = "UPDATE `users` SET `first_name`= ? ,`last_name`= ? ,`age`= ? ,`email`= ? ,`phone`= ? ,`password`= ?  WHERE `id` = ?";
        $stmt = $this->connect()->prepare($upd);
        $stmt->execute([$this->first_name, $this->last_name, $this->age, $this->email, $this->phone, $this->password, $this->id]);
        // var_dump($this);
        // die;
        header('location:../edituser.php');

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
        $sql = "SELECT * FROM users wehre id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->id]);
        $result = $stmt->fetch();
        return $result;
    }
}
