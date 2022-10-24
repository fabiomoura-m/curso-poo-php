<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Prático com Objetos</title>
</head>

<body>
    <pre>
    <?php
    require_once 'ContaBanco.php';

    $pessoa1 = new ContaBanco(); // Jubileu
    $pessoa2 = new ContaBanco(); // Creuza


    $pessoa1->abrirConta('cc');
    $pessoa1->setNumConta(1111);
    $pessoa1->setDono("Jubileu");

    $pessoa2->abrirConta("cp");
    $pessoa2->setNumConta(2222);
    $pessoa2->setDono("Creuza");

    $pessoa1->depositar(300);
    $pessoa2->depositar(500);

    $pessoa2->sacar(100);

    $pessoa1->pagarMensal();
    $pessoa2->pagarMensal();

    $pessoa1->sacar(338);
    $pessoa2->sacar(530);

    $pessoa1->fecharConta();
    $pessoa2->fecharConta();

    print_r($pessoa1);
    print_r($pessoa2);
    ?>
    </pre>
</body>

</html>