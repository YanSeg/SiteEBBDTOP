<?php
require_once  "template/header.php";
require_once  "my-functions.php";
require_once "lesproduits.php";



class Item
{
    protected int $idproducts;
    protected string $name;
    protected int $price;
    protected string $imageUrl;
    protected int $weight;
    protected int $stock;
    protected bool $available;

    public function __construct(int $idproducts, string $name, int $price, string $imageUrl, int $weight, int $stock, bool $available)
    {
        $this->idproducts = $idproducts;
        $this->name = $name;
        $this->price = $price;
        $this->imageUrl = $imageUrl;
        $this->weight = $weight;
        $this->stock = $stock;
        $this->available = $available;
    }

    function getId(): int
    {
        return $this-> idproducts;
    }

    function getName(): string
    {
        return $this-> name;
    }
    function getPrice(): int
    {
        return $this->price;
    }
    function getImage(): string
    {
        return $this->imageUrl;
    }
    function getWeight(): int
    {
        return $this->weight;
    }
    function getStock(): int
    {
        return $this->stock;
    }

    function getAvailable(): bool
    {
        return $this->available;
    }


    function setName(string $name): string{
        return $this->name = $name;
    }

}




function displayItem (Item $item): void
{
// include template/... 
    echo '<div>';
    echo '<h2>' . $item->getName() . '</h2>';
    echo '<p>Price: ' . $item->getPrice() . '</p>';
    echo '<img src="' . $item->getImage() . '" alt="' . $item->getName() . '">';
    echo '<p>Weight: ' . $item->getWeight() . '</p>';
    echo '<p>Stock: ' . $item->getStock() . '</p>';
    echo '<p>Available: ' . ($item->getAvailable() ? 'Yes' : 'No') . '</p>';
    echo '</div>';
}

