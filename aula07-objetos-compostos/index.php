<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos Compostos em PHP</title>
</head>

<body>

    <h1>Projeto Ultra Emoji Combat</h1>

    <pre>
    <?php
    require_once "Lutador.php";
    require_once "Luta.php";

    $lutadores = array();
    $lutadores[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1);
    $lutadores[1] = new Lutador("Pustscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    $lutadores[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
    $lutadores[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.8, 13, 0, 2);
    $lutadores[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
    $lutadores[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

    foreach ($lutadores as $lutador) {
        $lutador->status();
    }

    $lutadores[3]->perderLuta();
    // $lutadores[3]->setCategorias();
    $lutadores[3]->apresentar();
    $lutadores[3]->status();

    // AULA 08 - AGREGAÇÃO ENTRE OBJETOS
    $UEC01 = new Luta();
    $UEC01->marcarLuta($lutadores[0], $lutadores[1]);
    $UEC01->lutar();
    $lutadores[0]->status();
    $lutadores[1]->status();
    ?>

    
    </pre>


</body>

</html>