<?php 
session_start();
require_once  "class/classdatabase.php";



?>

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
      <a class="navbar-brand" href="http://localhost/SiteECommerce/shop.php">PETS[sHoP]</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="http://localhost/SiteECommerce/listedesproduits.php"> Liste de nos produits <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/SiteECommerce/affichageUnProduit.php">Affichage un produit</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link disabled" href="http://localhost/SiteECommerce/clients.php"> Nos Clients</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </header>




  <!-- section-header.// -->