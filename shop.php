<?php


require_once  "template/header.php";
require_once  "my-functions.php";

// require_once "lesproduits.php";

// $products = getProducts();

// var_dump($products);


// function GetTable($db, $prdot){
//     $fonct = $db->prepare($prdot);
//     $fonct->execute();
//     $fonct = $fonct->fetchAll();
//     return $fonct;
//     }
    
// $prod="SELECT * FROM products";
// $produits = GetTable($db, $prod);

// var_dump($produits);


// foreach ( $produits as $produits ){
//     print_r($produits['nom']);
//     print_r($produits['idproducts']);
// }


$db = new db();
$produits =$db->GetTableBdd($sqlquery_products);
var_dump($produits);



?>

<div class="grid">

    <?php
    foreach ( $produits as $key => $product ) :  ?>

<form action="cart.php" method="POST">
        <div class="produit">

            <h3> <?php echo ($product['name']) ?> </h3>

            <p>  <?php echo $key ?>Prix initiale HT: <?php echo formatPrice(priceExcludingVAT($product['price'])) ?> </p>


          

            <p> Prix initiale TTC : <?php echo formatPrice($product['price']) ?> </p>
            <p>
                <strong>Remise étrange de <?php echo  formatPrice($product['delivery']) ?></strong>
            </p>

            <p> Prix Final après remise : <?php echo  formatPrice(discountedPrice($product['price'], $product['delivery'])) ?> </p>


            <img src="<?php echo $product['image_url'] ?>">

            

                <div class="form-group">
                    <label for="quantite">Quantité :</label>
                    <input type="number" min="0" max="100" class="form-control" id="quantite" name="quantite" placeholder="Entrez la quantité">
                </div>

                <div class="boutoncommande">
                    <button class="btn btn-primary"> Ajouter au panier</button>
                </div>
                <input type="hidden" name="product" value="<?= $key?>">

                <!-- <input type="hidden" type=number name="prixHT" id="prixHT" value="<?php echo formatPrice(priceExcludingVAT($product['prixTTC'])) ?>">
                <input type="hidden" type=number name="prixTTC" id="prixTTC" value="<?php $product['prixTTC'] ?>">
                <input type="hidden" type=texte name="prixRemise" id="prixRemise" value="<?php echo  formatPrice(discountedPrice($product['prixTTC'], $product['remise'])) ?>"> -->

            </form>
        </div>
    <?php endforeach;
    ?>
     
</div>



<?php


$affichageTranspo = $db->GetTableBdd($sqlquery_transporters);
var_dump($affichageTranspo);

include  "template/footer.php";
?>