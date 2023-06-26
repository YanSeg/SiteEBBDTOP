<?php

require_once "item.php";


class Categories extends Item
{

    protected string $categoryName;
    protected int $categoryNumber;

    public function __construct(int $idproducts, string $name, int $price, string $imageUrl, int $weight, int $stock, bool $available, int $categoryNumber, string $categoryName)
    {
        parent::__construct($idproducts, $name, $price, $imageUrl,  $weight,  $stock, $available);
        $this->categoryName = $categoryName;
        $this->categoryNumber = $categoryNumber;
    }


    function getCategoryName(): string
    {
        return $this->categoryName;
    }

    function getCateoryNumber(): int
    {
        return $this->categoryNumber;
    }
}


function categorie(Categories $item): void
{
    // include template/... 
    echo '<div>';
    echo '<h2>' . $item->getName() . '</h2>';
    echo '<p>Price: ' . $item->getPrice() . '</p>';
    echo '<img src="' . $item->getImage() . '" alt="' . $item->getName() . '">';
    echo '<p>Weight: ' . $item->getWeight() . '</p>';
    echo '<p>Stock: ' . $item->getStock() . '</p>';
    echo '<p>Available: ' . ($item->getAvailable() ? 'Yes' : 'No') . '</p>';
    echo '<p>Nom de la de ca tégorie: ' . $item->getCategoryName() . '<p>';
    echo '</div>';
}
