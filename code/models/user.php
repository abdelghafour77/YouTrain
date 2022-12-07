<?php
require 'connection.php';
session_start();

class User extends Connection
{
    public $first_name;
    public $last_name;
    public $email;
    public $password;

    function __construct($email, $password, $first_name = null, $last_name = null)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
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
                $_SESSION['password'] = $result['password'];
                header('location:../index.php');
            } else {
                $_SESSION['message'] = 'Mot de passe incorrect';
                header('location:../login.php');
            }
        }
        die;
    }
}
