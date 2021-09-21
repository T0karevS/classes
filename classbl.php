<?php
//объект фонарик
class flashlight
{
    //атрибуты
    public $button = "кнопка";
    public $lampochka = "лампочка";
    public $battery = "батарейка";
    // поведение
    public function nobattery($battery)
    {
        $this->$battery = false;
    } 
    // отсутствует батарейка
    public function battery($battery)
    {
        $this->$battery = true;
    }
    // батарейка есть
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
$object->battery("батарейка есть");
$object->vkl("фонарик включен");
$object->vykl("фонарик выключен");
?>