<?php
require_once 'connection.php';

class User extends Connection
{
  public $first_name;
  public $last_name;
  public $email;
  public $phone;
  public $age;
  public $password;

  public function __construct($first_name, $last_name, $email, $phone = null, $age = null, $password)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email = $email;
    $this->phone = $phone;
    $this->age = $age;
    $this->password = $password;
  }
  public function sign_up()
  {
    $sql = "SELECT email FROM users WHERE email = ? ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$this->email]);
    $result = $stmt->fetch();
    if (isset($result["id"])) {
      $_SESSION['message'] = "Email deja ajouter";
      header('location: ../views/sign_up.php');
    } else {
      $sql = "INSERT INTO users (first_name,last_name,email,phone,age,password)values(?,?,?,?,?,?)";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$this->first_name, $this->last_name, $this->email, $this->phone, $this->age, $this->password]);
      $_SESSION['message'] = "Sign up with success";
      header('location: ../views/login.php');
    }
    die;
  }
}
