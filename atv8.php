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
        <input name="val1" type="number">
        <input name="val2" type="number">
        <input name="val3" type="number">
        <button type="submit"> Enter </button>
    </form>
    <?php

    //Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.
    if ((isset($_GET['val1']))) {
        $val1 = $_GET['val1'];
        

        if (isset($_GET['val2'])) {
            $val2 = $_GET['val2'];
            

        if (isset($_GET['val3'])) {
            $val3= $_GET['val3'];

$soma  =  $val1 + $val2 + $val3;
$valores = 3 ;
$resultado = $soma / $valores;

echo " A soma dos dois numeros multiplicado pelo primeiro número é " . $resultado;
        }
    }
    }
    
?>

</body>
</html>