<?php
include_once __DIR__ . '/models/Product.php';
include_once __DIR__ . '/models/Food.php';

$prodotto = new Food('scatola di tonno', 'cibo a base di pesce', 10, 'Cani', '120g', 'pane, acqua');

var_dump($prodotto);
