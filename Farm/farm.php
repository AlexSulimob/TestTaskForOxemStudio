<?php namespace Farm;

class Farm 
{
    private $animals = array();
    private $products = array();

    public function AddAnimal(Animal $animal)
    {
        $animal->SetId(count($this->animals));
        array_push($this->animals, $animal);
    }
    public function GatherProducts()
    {
        foreach ($this->animals as $key => $value) {
            $this->products = array_merge($this->products, $value->GetProduct());
        }
    }
    public function GetInfoAboutAnimals()
    {
        $result = array();
        foreach ($this->animals as $key => $value) {
            $result[$value->GetType()] +=1;
        }

        foreach ($result as $key => $value) {
            echo $key . "  " . $value . "\n";
        }


    }
    public function GetInfoAboutProduct()
    {
        $result = array();
        foreach ($this->products as $key => $value) {
            $result[$value->GetName()] +=1;
        }

        foreach ($result as $key => $value) {
            echo $key . "  " . $value . "\n";
        }

    }

}