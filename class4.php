<?php
//объект инструмент
class tool
{
    //атрибуты
    private $name, $color, $material;

    //поведение
    public function tooldoc()
    {
        echo 'наименование: '.$this->name.', цвет: '.$this->color.', материал: '.$this->material .'</br>';
        
    }
    
    //гет
    public function toolname()
    {
        echo $this->name;
        return $this->name; 
    } 
    public function toolcolor()
    {
        echo $this->color;
        return $this->color;
        
    }
    public function toolmat()
    {
        echo $this->material;
        return $this->material;
    }
    //конструктор
    public function __construct(string $imya,  string $cvet, string $mat) 
    {
        $this->name = $imya;
        $this->color = $cvet;
        $this->material = $mat;
    }  
}
$lom = new tool( 'лом','красный','металл');
$lom->tooldoc();
$molotok = new tool( 'молоток','черный','металл и дерево');
$molotok->tooldoc();
$otvertka = new tool( 'отвертка','желтый','металл и резина');
$otvertka->tooldoc();
    
?>