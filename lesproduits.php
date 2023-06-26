<?php
// function getProducts()
// {
//     return  [

//         "DOG" => [
//             'nom' => "Dog",
//             'prixTTC' => 300000,
//             'weight' => 7000,
//             'remise' => 3000,
//             'image' => "http://localhost/SiteECommerce/image/dog.png"
//         ],

//         "COC" => [


//             'nom' => "cocinelle",
//             'prixTTC' => 3000,
//             'weight' => 3,
//             'remise' => 300,
//             'image' => "http://localhost/SiteECommerce/image/coci.png"

//         ],

//         "CAT" => [
//             'nom' => "chat",
//             'prixTTC' => 170000,
//             'weight' => 3000,
//             'remise' => 30000,
//             'image' => "http://localhost/SiteECommerce/image/cat.png"

//         ]
//     ];
// }



function getProduct($key)
{
    $products = getProducts();

    if (!isset($products[$key])) {
        throw new Exception("Le produit $key n'existe pas");
    }

    return $products[$key];
}




function getTransporteurs()
{
    return [

        "Chronopost" => [
            '1' => 1545,
            '2' => 3000,
            '3' => 0

        ],
        "Poste" =>   [
            '1' => 300,
            '2' => 510,
            '3' => 10000

        ]
    ];
}


function getTransporteur($key){
    $transpo = getTransporteurs();

    if (!isset($transpo[$key])) {
        throw new Exception("Le produit $key n'existe pas");
    }

    return $transpo[$key];

}

