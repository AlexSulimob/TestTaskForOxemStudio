<?php namespace Farm;

include 'Farm/farm.php';
include 'Farm/animals.php';
include 'Farm/products.php';

$farm1 = new Farm();

for ($i=0; $i < 10; $i++) { 
    $farm1->AddAnimal(new Cow());
}
for ($i=0; $i < 20; $i++) { 
    $farm1->AddAnimal(new Chicken());
}
echo "Всего на ферме животных\n";
$farm1->GetInfoAboutAnimals();

for ($i=0; $i < 7; $i++) { 
    $farm1->GatherProducts();
}
echo "\nЗа неделю всего было собрано:\n";
$farm1->GetInfoAboutProduct();

echo "\nПоехали купить животных...";
for ($i=0; $i < 5; $i++) { 
    $farm1->AddAnimal(new Chicken());
}
$farm1->AddAnimal(new Cow());

echo "\nПосле покупки на ферме стало:\n";
$farm1->GetInfoAboutAnimals();

for ($i=0; $i < 7; $i++) { 
    $farm1->GatherProducts();
}
echo "\nЧерез 2 недели было собрано:\n";
$farm1->GetInfoAboutProduct();