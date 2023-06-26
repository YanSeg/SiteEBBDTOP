<?php


$sqlquery_products = "SELECT * FROM products";
$sqlquery_transporters = "SELECT * FROM transporters";



class db  extends PDO {
  
  public $db;

  public function __construct()
  {
    $this->getPDO();
  }

  protected function getPDO()
  { 
    try {
      $this->db = new PDO('mysql:host=localhost;dbname=bddecommerce;charset=utf8', 'MAESTRO', 'MAESTRO//1234');
    } catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
  }


  public function GetTableBdd($sqlquery)
  {
    $fonct = $this->db->prepare($sqlquery);
    $fonct->execute();
    $fonct = $fonct->fetchAll(PDO::FETCH_ASSOC);
    return $fonct;
  }
}

?>