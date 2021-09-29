<?php
//объект карандаш
class pencil
{
    //атрибуты
    private $color, $length, $price;

    //поведение
    public function write()
    {
        echo "текст написанный этим карандашом за ". $this->price ." рублей".'</br>';
        
    }
    
    //гет
    public function pencilcolor()
    {
        echo $this->color;
        return $this->color; 
    } 
    public function pencillength()
    {
        echo $this->length;
        return $this->length; 
        
    }
    public function pencilprice()
    {
        echo $this->price;
        return $this->price;
    }
    // конструктор
    public function __construct(string $cvet, int $dlina, int $cena) 
    {
        $this->color = $cvet;
        $this->length = $dlina;
        $this->price= $cena;
    }  
}
$pencil1 = new pencil( '#000000', 10 , 30000);
    $pencil1->write();
    $pencil1->pencilcolor();
    echo '</br>';
    $pencil1->pencillength();
    echo '</br>';
    $pencil1->pencilprice();
    
?>