<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>

<body>
    <pre>

    <?php
    require_once "Visitante.php";
    require_once "Aluno.php";
    require_once "Bolsista.php";
    // $pessoa = new Pessoa();

    $visitante1 = new Visitante();
    $visitante1->setNome("Juvenal");
    $visitante1->setIdade(33);
    $visitante1->setSexo("M");

    print_r($visitante1);

    $aluno = new Aluno();
    $aluno->setNome("Pedro");
    $aluno->setIdade(16);
    $aluno->setSexo("M");
    $aluno->setMatricula(11111);
    $aluno->setCurso("Informática");
    $aluno->pagarMensalidade();
    print_r($aluno);

    $bolsista = new Bolsista();
    $bolsista->setMatricula(1112);
    $bolsista->setNome("Jubileu");
    $bolsista->setBolsa(12.5);
    $bolsista->setCurso("Administração");
    $bolsista->setIdade(17);
    $bolsista->pagarMensalidade();
    print_r($bolsista);
    ?>

</pre>

</body>