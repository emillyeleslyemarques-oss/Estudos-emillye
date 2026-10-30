<?php 

//aqui criamos um array de notas
$notas = [7, 8, 9, 10];

//A função count() conta quantos elementos existem no array. Como temos cinco notas, o resultado é 5.
$quantidade = count($notas);

//Somando os valores

        //A função array_sum($notas);
$soma = array_sum($notas);

//Aqui nos calculamos a media

$media = $soma / $quantidade;

//count() **CONTA TODOS OS ELEMENTOS**

//array_sum() **SOMA OS VALORES**

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos Estátisticos no PHP</title>
</head>
<body>
    
</body>
</html>