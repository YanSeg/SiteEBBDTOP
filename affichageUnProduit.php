<?php
require_once  "template/header.php";
require_once  "my-functions.php";
require_once "lesproduits.php";
require_once "class/item.php";
require_once "class/itemCategories.php"; 
require_once "class/catalog.php";


$produitChien = new Item (1, 'chien', 30000, 'http://localhost/SiteECommerce/image/dog.png',10,10, true);
// $produitChien->name= "philippe"; marcherais si l'attribut name serait public.
displayItem($produitChien);


echo '<br><br>';
// Exemple d'utilisation de setter 
$produitChien->setName("Martin j'ai fait comme toi!");
displayItem($produitChien);
echo '<br><br>';



$produitChienChien = new Categories (1, 'chien', 30000, 'http://localhost/SiteECommerce/image/dog.png',10,10, true, 3, 'Ceci est un chien' );
categorie($produitChienChien);


include "template/footer.php";

?>