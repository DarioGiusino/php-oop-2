<?php

class Product
{
    public $image;
    public $label;
    public $description;
    public $category;
    public $price;

    public function __construct($_label, $_description, $_category, $_price, $_image = null)
    {
        $this->label = $_label;
        $this->description = $_description;
        $this->category = $_category;
        $this->price = $_price;
        $this->image = $_image;
    }
}
