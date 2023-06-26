<?php
require_once  "template/header.php";
require_once  "my-functions.php";
require_once "lesproduits.php";

require_once "class/catalog.php";



$catalog = new Catalogue (getProducts());
displayCatalogue($catalog);


include "template/footer.php";

?>