<?php
//объект фонарик
class flashlight
{
    //атрибуты
    public $button = "кнопка";
    public $lampochka = "лампочка";
    public $battery = "батарейка";
    // поведение
    // отсутствует батарейка
    public function inputbattery($battery)
    {
        $this->$battery = true;
    }
    // вставить батарейку
    public function vkl($button, $lampochka)
    {
        $this->$button = true;
        $this->$lampochka  = true;
        
    }
    // включение фонарика
    public function vykl($button, $lampochka)
    {
        $this->$button = false;
        $this->$lampochka = false;
    }
    // выключение
    
}
//жизненный цикл
$object = new flashlight();
$object->nobattery("батарейки нет");
$object->inputbattery("батарейка есть");
$object->vkl("фонарик включен");
$object->vykl("фонарик выключен");
?>
