<?php
//объект автобус
class bus
{
    //атрибуты
    private $name, $color, $year, $seats, $number;

    //поведение
    public function businfo()
    {
        echo 'название: '.$this->name.', цвет: '.$this->color.',год выпуска: '. $this->busyear.', маршрут: '.$this->number .'</br>';
    }
    
    //гет
    public function busname()
    {
        echo $this->name;
        return $this->name; 
    } 
    public function buscolor()
    {
        echo $this->color;
        return $this->color;
    }
    public function busyear()
    {
        echo $this->year;
        return $this->year;    
    }
    public function busseats()
    {
        echo 'количество мест: '.$this->seats;
        return $this->seats;  
    }
    public function busnumber(Type $var = null)
    {
        echo $this->number;
        return $this->number;  
    }
    //конструктор
    public function __construct(string $imya,string $cvet, int $god, int $sidenya, int $marshrut) 
    {
        $this->name = $imya;        
        $this->color = $cvet;
        $this->year = $god;
        $this->seats = $sidenya;
        $this->number = $marshrut;
    }  
}
$bus1 = new bus( 'gasel','white',2000,13,35);
    $bus1->businfo();
    $bus1->busseats();    
?>