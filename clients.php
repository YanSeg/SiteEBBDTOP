<?php
require_once  "template/header.php";
require_once  "my-functions.php";
require_once "lesproduits.php";
require_once "class/item.php";
require_once "class/catalog.php";
require_once "class/classcustomers.php";



$customers = new Customers (getCustomers());
displayCustomers($customers);


include "template/footer.php";

?>