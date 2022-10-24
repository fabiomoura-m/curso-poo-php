<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo Parte01</title>
</head>

<body>
    <pre>

    <?php
    require_once "Mamifero.php";
    require_once "Reptil.php";
    require_once "Peixe.php";
    require_once "Ave.php";
    require_once "Canguru.php";
    require_once "Cachorro.php";
    require_once "Cobra.php";
    require_once "Tartaruga.php";
    require_once "GoldFish.php";
    require_once "Arara.php";

    $mamifero = new Mamifero();
    $ave = new Ave();
    $reptil = new Reptil();
    $canguru = new Canguru();
    $cachorro = new Cachorro();
    $tartatura = new Tartaruga();

    // $mamifero->setPeso(33.5);
    $mamifero->locomover();
    $cachorro->locomover();
    $canguru->locomover();
    $tartatura->locomover();

    $mamifero->emitirSom();
    $cachorro->emitirSom();
    $canguru->emitirSom();

    ?>

</pre>

</body>