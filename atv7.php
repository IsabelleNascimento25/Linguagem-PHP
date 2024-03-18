<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Exercicio 4 </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <form method="" action="">
        <input name="n1" type="number">
        <input name="n2" type="number">
        <button type="submit"> Enter </button>
    </form>
    <?php

    //Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.
    if ((isset($_GET['n1']))) {
        $n1 = $_GET['n1'];
        

        if (isset($_GET['n2'])) {
            $n2 = $_GET['n2'];
          


            $resultado = $n1 + $n2;
            $resu2 = $resultado * $n1;

            echo "O resultado da soma dos números multipliacado pelo primeiro número informado é " . $resu2;
        }
    }
    ?>

</body>

</html>