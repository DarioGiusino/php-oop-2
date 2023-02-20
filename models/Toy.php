<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    public $materials;

    public function __construct($_label, $_description, $_category, $_price, $materials)
    {
        parent::__construct($_label, $_description, $_category, $_price);

        $this->materials = $materials;
    }
}
