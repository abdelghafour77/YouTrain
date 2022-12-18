<?php

require_once 'connection.php';



class CradPayment extends Connection
{
  public function __construct($id, $card_number, $full_name, $cvv, $date_exp)
  {
    $this->id = $id;
    $this->card_number = $card_number;
    $this->full_name = $full_name;
    $this->cvv = $cvv;
    $this->date_exp = $date_exp;
  }
  public function add()
  {

    $sql = "SELECT * from card_payments where id=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$this->id]);
    $res = $stmt->fetchAll();

    if (count($res) == 0) {
      $sql = "INSERT INTO `card_payments`
        (`id`, `card_number`, `full_name`, `cvv`, `date_exp`)
        VALUES 
        (?,?,?,?,?)";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$this->id, $this->card_number, $this->full_name, $this->cvv, $this->date_exp]);
    } else {
      $sql = "UPDATE `card_payments` 
              SET 
              `card_number`=?,
              `full_name`=?,
              `cvv`=?,
              `date_exp`=?
              WHERE
              `id`=?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$this->card_number, $this->full_name, $this->cvv, $this->date_exp, $this->id]);
    }
    return $stmt;
  }
}
