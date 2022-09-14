<?php namespace Farm;
abstract class Product
{
    private $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function GetName()
    {
       return $this->name;
    }
}
class Milk extends Product
{
    public function __construct()
    {
        parent::__construct("Молоко");
    }
 }
class Egg extends Product
{
    public function __construct()
    {
        parent::__construct("Яйцо");
    }
 }
