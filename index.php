<?php
include_once __DIR__ . '/data/data.php';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eShop</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1 class="text-center my-4">Negozio per Animali</h1>
    </header>

    <main>
        <div class="container">
            <div class="row row-cols-3">
                <?php foreach ($products as $product) : ?>
                    <div class="col mb-4">
                        <div class="card">
                            <img src="assets/cat_food.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Monge Grill Grain Free</h5>
                                <i class="d-block mb-3"><strong>Categoria:</strong> <?= $product->category->name ?> - <strong>Caratteristiche:</strong> <?= $product->getDetails() ?></i>
                                <p class="card-text">Monge Cat Grill 85 gr è il cibo umido in bustina da 85 gr in diversi gusti, grazie al quale il vostro felino riceverà ogni giorno tutto il benessere quotidiano del quale necessita. Le formulazioni sono altamente appetibili, con carne o pesce fresco scelto attentamente da esperti in materia.</p>
                                <strong>Prezzo: € 25</strong>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

</body>

</html>