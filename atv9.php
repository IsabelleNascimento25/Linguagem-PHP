<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<form method="" action="">
        <input name="total" type="number">
        <button type="submit">Calcular Porcentagem</button>
    </form>
 
    <?php
        if (isset($_GET['total'])) {
            //Escreva um algoritmo que receba um valor, calcule e mostre para usuário 15% deste valor.
           
            $total = $_GET['total'];
             // valor original
       $percentual = 15.0 / 100.0; // 15%
       $valor_final = ($percentual * $total);
       
       // resolvendo erro
       $resultado = $valor_final;
        echo "15% de ". $total, " sera: " . $resultado;

        }
    ?>
 

</form>

<?php
