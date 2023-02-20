<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product
{
    public $measures;
    public $color;

    public function __construct($_label, $_description, $_category, $_price, $measures, $color)
    {
        parent::__construct($_label, $_description, $_category, $_price);

        $this->category = $_category;
        $this->measures = $measures;
        $this->color = $color;
    }
}