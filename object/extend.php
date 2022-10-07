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

class ComboMeal extends Entree
{

    public function hasIngredient($ingredient)
    {
        foreach ($this->ingredients as $entree) {
            if ($entree->hasIngredient($ingredient)) {
                return true;
            }
        }
        return false;
    }
}