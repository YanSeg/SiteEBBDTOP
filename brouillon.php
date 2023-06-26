<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta http-equiv="cache-control" content="max-age=604800" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="author" content="Bootstrap-ecommerce by Vosidiy" />

  <title>BIG MECHA SHOP</title>
  <link href="http://localhost/SiteECommerce/css/style.css" rel="stylesheet">
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />

  <!-- jQuery -->
  <script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

  <!-- Bootstrap4 files-->
  <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

  <!-- Font awesome 5 -->
  <link href="fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet" />

  <!-- custom style -->
  <link href="css/ui.css" rel="stylesheet" type="text/css" />
  <link href="css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

  <!-- custom javascript -->
  <script src="js/script.js" type="text/javascript"></script>
</head>

<body>


  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://localhost/SiteECommerce/listedesproduits.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/SiteECommerce/listedesproduits.php">Action</a>
          <a class="dropdown-item" href="http://localhost/SiteECommerce/listedesproduits.php">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://localhost/SiteECommerce/listedesproduits.php">Something else here</a>
        </div>
      </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  </header>





<?php

  include  "template/footer.php";
?>





// echo "le Prénom du clien est  ".  $item->getFirstname();
// echo "<br>";
// echo "le nom du clien est  ".  $item->getLastname();
// echo "<br>";
// echo "Son mail est  " . $item->getemail();





// function displayCustomer(Customer $var)
// {
//     include "template/affichageClient.php";
// }




// function displayCustomers ($customers)
// {
//     foreach ($customers as $itemData) {
//         $itemData = new Customers(
//             $itemData['id'],
//             $itemData['first_name'],
//             $itemData['last_name'],
//             $itemData['email']
//         );

//        var_dump($itemData);

//     }
// }





// class Catalogue
// {

//     protected array $items;

//     public function __construct()
//     {
//         $this->items = $this->fetchItemsFromDatabase();
//     }
//     protected function fetchItemsFromDatabase(): array
//     {
//         // Logique pour récupérer les données des items depuis la base de données
//         // Ici, nous simulons simplement un tableau d'objets Item
//         $dataFromDatabase = [
//             ['nom' => 'Chien', 'prix' => 30000, 'urlImage' => 'jhsdbjhsd', 'poids' => 10, 'stock' => 10, 'disponible' => true],
//             ['nom' => 'Chat', 'prix' => 20000, 'urlImage' => 'abcde', 'poids' => 8, 'stock' => 5, 'disponible' => false],
//             // ...
//         ];

//         $items = [];
//         foreach ($dataFromDatabase as $itemData) {
//             $item = new Item(
//                 $itemData['nom'],
//                 $itemData['prix'],
//                 $itemData['urlImage'],
//                 $itemData['poids'],
//                 $itemData['stock'],
//                 $itemData['disponible']
//             );
//             $items[] = $item;
//         }

//         return $items;
//     }

//     public function getItems(): array
//     {
//         return $this->items;
//     }
// }

// Dans cet exemple, la classe Catalogue possède une propriété $items qui est un tableau d'objets Item.
// Dans le constructeur, la méthode fetchItemsFromDatabase() est appelée pour récupérer les données des items depuis la base de données et créer les objets Item correspondants. 
// La méthode fetchItemsFromDatabase() est simulée ici, mais vous devrez implémenter la logique réelle pour récupérer les données depuis votre base de données.
// Une fois que vous avez instancié un objet Catalogue, vous pouvez utiliser la méthode getItems() pour obtenir le tableau d'objets Item du catalogue. Par exemple :




// $catalogue = new Catalogue();
// $items = $catalogue->getItems();

// foreach ($items as $item) {
//     $item->displayItem();
// }
// // Cela itérera sur tous les objets Item du catalogue et affichera les informations de chaque item en utilisant la méthode displayItem().
