<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <title>Pets Store</title>

    <?php
    require_once 'Prodotto.php';
    require_once 'Cibo.php';
    require_once 'Gioco.php';
    require_once 'Cucce.php';
    ?>
</head>

<body>
    <!-- Cucce -->
    <h1>Cucce</h1>
    <div class="card">
        <div class="card-body">
            <?php foreach ($prodotti as $prodotto) { ?>
            <!-- <img src="https://picsum.photos/200/300" class="card-img-top"> -->
            <h5 class="card-title">
                <?= $prodotto->getNome() ?>
            </h5>
            <p class="card-text">
                <?= $prodotto->getDescrizione() ?>
            </p>
            <p class="card-text">
                <?= $prodotto->getCategoria() ?>
            </p>
            <p class="card-text">
                <?= $prodotto->getDimensione() ?>
            </p>
            <p class="card-text">
                <?= $prodotto->getMateriale() ?>
            </p>
            <p class="card-text">
                <?= $prodotto->getPrezzo() . ' $' ?>
            </p>
            <?php } ?>
        </div>
    </div>
    <!-- Giochi -->
    <h1>Giochi</h1>
    <div class="card">
        <div class="card-body">
            <?php foreach ($giochi as $gioco) { ?>
            <!-- <img src="https://picsum.photos/200/300" class="card-img-top"> -->
            <h5 class="card-title">
                <?= $gioco->getNome() ?>
            </h5>
            <p class="card-text">
                <?= $gioco->getDescrizione() ?>
            </p>
            <p class="card-text">
                <?= $prodotto->getCategoria() ?>
            </p>
            <p class="card-text">
                <?= $gioco->getDimensione() ?>
            </p>
            <p class="card-text">
                <?= $gioco->getPrezzo() . ' $' ?>
            </p>
            <?php } ?>
        </div>
    </div>

    <!-- Cibo -->
    <h1>Cibo</h1>
    <div class="card">
        <div class="card-body">
            <?php foreach ($cibi as $cibo) { ?>
            <!-- <img src="https://picsum.photos/200/300" class="card-img-top"> -->
            <h5 class="card-title">
                <?= $cibo->getNome() ?>
            </h5>
            <p class="card-text">
                <?= $cibo->getDescrizione() ?>
            </p>
            <p class="card-text">
                <?= $prodotto->getCategoria() ?>
            </p>
            <p class="card-text">
                <?= $cibo->getMarca() ?>
            </p>
            <p class="card-text">
                <?= $cibo->getEtaAnimale() ?>
            </p>
            <p class="card-text">
                <?= $cibo->getQuantitaConfezione() . ' KG' ?>
            </p>
            <p class="card-text">
                <?= $cibo->getPrezzo() . ' $' ?>
            </p>
            <?php } ?>
        </div>
    </div>

</body>

</html>