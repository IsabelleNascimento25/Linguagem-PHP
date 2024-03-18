<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>atividade 3 </title>
</head>
<body>
    <?php
    date_default_timezone_set("America/Sao_Paulo");
$t = date("H");
if ($t < "20") {
    echo $t;
    echo "</br> Tenha um ótimo dia! ";
if ($t > "20 ") {
    echo $t;
    echo "</br> Tenha uma ótima noite ";

    // tem que colocar o fuzuorario do brasil
    
}
}
    ?>

</body>
</html>