<?php
class Car
{
    public $name;
    public $color;
    function get_name($name)
    {
        $this->name = $name;
    }
    function set_name()
    {
        return $this->name;
    }
    function get_color($color)
    {
        $this->color = $color;
    }
    function set_color()
    {
        return $this->color;
    }
}
$audi = new Car();
$audi->get_name("audi");
$audi->get_color("blue");
echo $audi->set_name();
echo $audi->set_color();

?>
