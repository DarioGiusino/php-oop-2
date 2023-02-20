<?php
include_once __DIR__ . '/models/Product.php';
include_once __DIR__ . '/models/Category.php';
include_once __DIR__ . '/models/Food.php';
include_once __DIR__ . '/models/Kennel.php';
include_once __DIR__ . '/models/Toy.php';

$dog_category = new Category('Cani');
$cat_category = new Category('Gatti');

$cibo = new Food('scatola di tonno', 'cibo a base di pesce', $dog_category, 10, '120g', 'pane, acqua');
$cuccia = new Kennel('Cuccia Rodi', 'cuccia rettangolare', $cat_category, 29, '15x17cm', 'red');
$gioco = new Toy('pallina', 'pallina rotonda', $dog_category, 12, 'plastica e metallo');

var_dump($cibo);
var_dump($cuccia);
var_dump($gioco);

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1 class="text-center my-4">Your animal eShop</h1>
    </header>

    <main>
        <div class="container">
            <div class="row row-cols-3">
                <div class="col mb-4">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>