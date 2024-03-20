<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet'href='css/atv17.css' type='text/css'>
    <title>Tabuada</title>
    <script src='main.js'></script>
</head>
<body>
    <h1>Tabuada</h1>
    <section>
        <br>
        <span>Sistema de tabuada</span>
        <div>
            <form action="" method="post">
                <input type="number" name="numero">
                <br><br>
                <input type="submit"> 
            </form>
        </div>
        <div >
            <!-- Código de PHP do projeto -->
            <?php
               $num = filter_input(INPUT_POST ,"numero");
               if($num){
                for ($i=0; $i <= 10; $i++) { 
                 echo "$num x $i = ". ($num * $i) . "<br>";
                }
                }else {
                  //  echo "Informe um número para a tabuada";
                    echo "<Script>alert('Informe um número para a tabuada');</script>";
                }
            

            ?>
        </div>   
    </section>
   
</body>
</html>


    