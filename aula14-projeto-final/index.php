<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final</title>
</head>

<body>
    <pre>

    <?php
    require_once "Video.php";
    require_once "Gafanhoto.php";
    require_once "Pessoa.php";
    require_once "Visualizacao.php";

    $video[0] = new Video("Aula 1 de POO");
    $video[1] = new Video("Aula 12 de PHP");
    $video[2] = new Video("Aula 15 de HTML5");

    // $pessoa = new Pessoa("Jubileu", 30, "M"); // Erro não é possivel instanciar uma classe abstrata

    $pessoa[0] = new Gafanhoto("Jubileu", 30, "M", "juba");
    $pessoa[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

    print_r($video);
    print_r($pessoa);

    $visualizacao[0] = new Visualizacao($pessoa[0], $video[0]); // agregando classes
    $visualizacao[1] = new Visualizacao($pessoa[0], $video[1]);
    $visualizacao[0]->avaliar();
    $visualizacao[1]->avaliarPorcentagem(85);
    print_r($visualizacao);


    ?>

</pre>

</body>