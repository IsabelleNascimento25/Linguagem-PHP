
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

// A partir do PHP 7 
// a virgula so é necessaria nos dois primeiros
define('ANIMALS', array (
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // imprime "cat"
?>
<br>
<?php
// A partir do PHP 7 

define('SUCULENTA', array (
    'Suculenta Sedum',
    'Crassula Ovata',
    'Graptopetalum Paraguayense',
    'Monilaria Obconica',
    'Echeveria Purpusorum'
));
echo SUCULENTA[1] ; // imprime "cat"
?>
<br>
<?php

// A partir do PHP 7 

define('GELADEIRA', array (
    'ovo',
    'agua',
    'alface',
    'sardinha',
    'chocolate'
));
echo GELADEIRA[1]; // imprime "cat"
?>


</body>
</html>


