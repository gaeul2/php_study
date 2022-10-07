<?php

class Entree
{
    public $name;
    public $ingredients = array();

    public function __construct($name, $ingredients)
    {
        $this->name = $name;
        $this->ingredients = $ingredients;

    }

    public function hasIngredient($ingredient)
    {
        return in_array($ingredient, $this->ingredients);
    }
}

$soup = new Entree('닭고기 수프', array('닭고기', '물'));
$sandwich = new Entree('닭고기 샌드위치', array('닭고기', '빵'));

print "$soup->name\n";
var_dump($soup->ingredients);