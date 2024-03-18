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

<?php

//4 - Utilizando 4 variáveis, sendo:
//a) uma para o nome do seu time
//b) uma para ano
//c) uma para a frase 1 (essa frase pode ser qualquer texto que faça sentido a você, sobre o seu time)
//d) variável para a frase 2 (que pode ser qualquer frase que faça sentido para você, sobre o seu time)

$nome = "Time Borboleta ";
$ano = "  2024 ";
$frase1= "No reino dos campos, onde a brisa acaricia delicadamente as pétalas das flores, surge um time que voa com a graciosidade das borboletas.
 Unidos pela beleza da natureza e pela determinação de alcançar altos voos, somos o Time Borboleta. " ;
$frase2 = "Com a leveza das asas de uma borboleta, voamos rumo à vitória, transformando cada desafio em uma bela conquista! ";


echo "$nome . $ano . $frase1 . $frase2";

?>

</body>
</html>