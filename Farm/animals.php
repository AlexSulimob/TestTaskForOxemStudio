<?php namespace Farm;
abstract class Animal
{
    abstract public function GetProduct();
    private $typeAnimal;
    private $id;

    protected $minProductsPerDay;
    protected $maxProductsPerDay;

    public function __construct(string $typeAnimal, int $minProductsPerDay, int $maxProductsPerDay)
    {
        $this->minProductsPerDay = $minProductsPerDay;
        $this->maxProductsPerDay = $maxProductsPerDay;
        $this->typeAnimal = $typeAnimal;
    }

    public function GetType()
    {
       return $this->typeAnimal;
    }
    public function SetId(int $id)
    {
        $this->id = $id;
    }
}


class Cow extends Animal
{
    public function __construct(int $minProductsPerDay = 8, int $maxProductsPerDay = 12)
    {
        parent::__construct("Корова", $minProductsPerDay, $maxProductsPerDay);
    }

    public function GetProduct() {
        $amount = rand($this->minProductsPerDay, $this->maxProductsPerDay);
        $products = array();

        for ($i=0; $i < $amount; $i++) { 
            array_push($products, new Milk());
        }
        return $products;
    }
}
class Chicken extends Animal
{
    public function __construct(int $minProductsPerDay = 0, int $maxProductsPerDay = 1)
    {
        parent::__construct("Курица", $minProductsPerDay, $maxProductsPerDay);
    }

    public function GetProduct() {
        $amount = rand($this->minProductsPerDay, $this->maxProductsPerDay);
        $products = array();
        for ($i=0; $i < $amount; $i++) { 
            array_push($products, new Egg());
        }
        return $products;
    }
}