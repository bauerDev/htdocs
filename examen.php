// ROCIO ESCUDERO MARTIN

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Servidor - Rocío Escudero Martín</title>
</head>
<body>
    
<?php

    $nombre_alumno = "Rocío Escudero Martín";
    $modulo = "Desarrollo Web en Entorno Sevidor";
    $nota_media = 7.5;
    $es_matriculado = true;

    echo "<h1>$nombre_alumno</h1><br>";
    echo "<h2>$modulo</h2><br>";
    echo "Mi nota media actual es: $nota_media<br>";
    echo 'Mi nota media actual es: $nota_media<br>';

    //condicional dependiendo de la nota media con if

    if ($nota_media>=9){
        echo "<br>Sobresaliente!<br>";
    } elseif ($nota_media>=7 && $nota_media<9){
        echo "<br>Notable<br>";
    } elseif ($nota_media>=5 && $nota_media<7){
        echo "<br>Aprobado<br>";
    } else {
        echo "<br>Suspenso<br>";
    }

    //condicional ahora para saber si el alumno está matriculado o no

    if($es_matriculado==true){
        echo "<br>Estado: alumno matriculado<br><br>";
    } else {
        echo "<br>Estado: NO matriculado<br>";
    }

    //ahora creamos una tabla con tantas filas como sea la condición del while

    $i = 1;
?>

    <table>
<?php

    while ($i<=5){
        ?>
        <tr>
            <td><?php echo "Fila número: " ?></td>
            <td><?php echo $i ?></td>
        </tr>
        <?php
        $i++;
    }
?>
    </table>

</body>
</html>
