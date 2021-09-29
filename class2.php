<?php
//объект cat
class Cat
{
    //атрибуты
    private $name, $color, $age;

    //поведение
    public function voice()
    {
        echo "meoooow".'</br>';
        
    }
    
    //гет
    public function nameofacat()
    {
        echo $this->name;
        return $this->name; 
    } 
    public function catage()
    {
        echo $this->age;
        return $this->age; 
        
    }
    public function catcolor()
    {
        echo $this->color;
        return $this->color;
    }
    //конструктор
    public function __construct(string $imya, int $vozrast, string $cvet) 
    {
        $this->name = $imya;
        $this->age = $vozrast;
        $this->color = $cvet;
    }  
}
$mycat = new Cat( 'barsik','54','ginger');
    $mycat->voice();
    $mycat->nameofacat();
    echo '</br>';
    $mycat->catage();
    echo '</br>';
    $mycat->catcolor();
    
?>