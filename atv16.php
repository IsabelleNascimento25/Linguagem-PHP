<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Realizar fatorial
    </title>
    </head>
<body>
<form method="" action="">
    <h1>Calculando Fatorial Crescente</h1>
    <br>

        <input name="num" type="number">
        <button type="submit"> Enter </button>
    </form>

<br>
  
    

    <?php
 if ((isset($_GET['num']))) {
    $num = $_GET['num'];
    
    function calcularFatorial($num) {
        $fatorial = 1;

        for ($i = 1; $i <= $num; $i++) {
            $fatorial *= $i;
        }
        return $fatorial;
    }
    echo "O fatorial de $num é " . calcularFatorial($num);
 }
 
 ?>
<br>
<form method="" action="">
    <h1>Calculando Fatorial Descrecente</h1>
    <br>

        <input name="num2" type="number">
        <button type="submit"> Enter </button>
    </form>

    
 <?php
 if ((isset($_GET['num2']))) {
    $num2 = $_GET['num2'];
    
    function calcularFatorial($num2) {
        $fatorial = 1;

        for($i = $num2; $i > 1; $i--) {
            $fatorial *= $i;
        }
        return $fatorial;
    }
    echo "O fatorial de $num2 é " . calcularFatorial($num2);
 }
?>



</body>
</html>

