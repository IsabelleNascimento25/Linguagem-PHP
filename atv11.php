<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>atividade 2</title>
</head>
<body>
    <?php
        $num = 5000;
        function teste_escopo1()
        {
           // $num += 5;
           // echo $num . "<br>";
        }
        echo $num . "<br>";
        teste_escopo1();
    ?>

</body>
</html>