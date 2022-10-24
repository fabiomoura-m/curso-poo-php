<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo Parte02</title>
</head>

<body>
    <pre>

    <?php
    require_once "Animal.php";
    require_once "Mamifero.php";
    require_once "Cachorro.php";
    require_once "Lobo.php";

    $cachorro = new Cachorro();
    $cachorro->emitirSom();
    // $cachorro->reagirFrase("Olá");
    // $cachorro->reagirFrase("Vai apanhar");
    $cachorro->reagirHora(11, 4);
    $cachorro->reagirHora(21, 00);

    print_r($cachorro);

    ?>

</pre>

</body>