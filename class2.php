<?php
//объект мышь
class computermouse
{
    //атрибуты
    public $wire = "провод";
    public $lmb = "левая кнопка мыши";
    public $rmb = "правая кнопка мыши";
    public $mmb = "средняя кнопка мыши";

    // поведение
    public function connect($wire)
    {
        $this->$wire = true;
    } 
    // нажатие лкм
    public function presslmb($lmb)
    {
        $this->$lmb = true;
    } 
    // нажатие лкм
    public function pressrmb($rmb)
    {
        $this->$rmb = true;
    } 
    // нажатие пкм
    public function pressmmb($mmb)
    {
        $this->$mmb = true;
    } 
    // нажатие скм
        
}
//жизненный цикл
$object = new computermouse();
$object->connect("подключение");
$object->presslmb("нажатие левой кнопки");
$object->pressrmb("нажатие правой кнопки");
$object->pressmmb("нажатие средней кнопки");
?>