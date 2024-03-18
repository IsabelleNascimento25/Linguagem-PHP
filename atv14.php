
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Par, Ímpar ou Redondo</title>
</head>
<body>
    <h1>Código para verificação Redondo ou não</h1>
    <!-- Criar um código para verificar se o número é par, ímpar ou redondo. -->
   
    <?php
    if (isset($_GET['num'])) {
        $num = $_GET['num'];
 
 
        if ($num % 10 == 0) {
            echo " O número informado é redondo.";
        }else
         echo "O número informado NÃO é redondo.";
        }
    
    ?>
     
    <form method="get" action="">
        <input name="num" type="number">
        <button type="submit">Enter</button>
    </form>
</body>
</html>
</body>

</html>

