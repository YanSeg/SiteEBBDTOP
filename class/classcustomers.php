<?php


class Customers
{

    public array $items;

    public function __construct(array $customers)
    {
        $this->items = $customers;
    }
}

class Customer
{
    protected int $idcustomers;
    protected string $first_name;
    protected string $last_name;
    protected string $email;

    public function __construct(int $idcustomers, string $first_name, string $last_name, string $email)
    {
        $this->idcustomers = $idcustomers;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
    }

    function getIdcustomers(): int
    {
        return $this->idcustomers;
    }
    function getFirstname(): string
    {
        return $this->first_name;
    }
    function getLastname(): string
    {
        return $this->first_name;
    }
    function getemail(): string
    {
        return $this->email;
    }
}


function displayCustomers(Customers $customers)
{

    echo '<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">FirstName</th>
        <th scope="col">LastName</th>
        <th scope="col">Email</th>
      </tr>
    </thead> <tbody>';
    
    
    foreach ($customers->items as $itemData) :
 
        $item = new Customer(
            $itemData['idcustomers'],
            $itemData['first_name'],
            $itemData['last_name'],
            $itemData['email']

        );

        include "template/affichageClient.php";

        endforeach;
        echo '</tbody></table>';
}


