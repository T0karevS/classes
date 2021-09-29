<?php
//объект планета
class planet
{
     //атрибуты
     private $population, $name, $color;

     //поведение
     public function planetispopulated()
     {
         if(($this->population) > 1)
         {
         echo "населенная людьми планета под названием ".$this->name .'</br>';
         }
         else
         {
            echo "ненаселенная людьми планета, которая называется ".$this->name .'</br>';
         }
     }
     
     //гет
     public function population()
     {
         echo "население: ".$this->population;
         return $this->population; 
     } 
     public function plname()
     {
         return $this->name; 
         
     }
     public function plcolor()
     {
         echo "цвет: ". $this->color;
         return $this->color;
     }
     // конструктор
     public function __construct(int $lyudey, string $imya, string $cvet) 
     {
         $this->population = $lyudey;
         $this->name = $imya;
         $this->color = $cvet;
     }  
}
$planet1 = new planet(7000000000, "Земля", "blue");
$planet1->planetispopulated();
$planet1->population();
echo "</br>";
$planet1->plname();
$planet1->plcolor();
echo "</br>";
$planet2 = new planet(0, "Mapc", "red");
$planet2->planetispopulated();
$planet2->population();
echo "</br>";
$planet2->plname();
$planet2->plcolor();