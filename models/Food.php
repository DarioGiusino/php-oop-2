<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $category;
    public $weight;
    public $ingredients;

    public function __construct($_label, $_description, $_price, $_category, $_weight, $_ingredients)
    {
        parent::__construct($_label, $_description, $_price);

        $this->category = $_category;
        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
    }
}
