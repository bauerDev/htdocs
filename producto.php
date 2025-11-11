<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Prueba</title>
</head>
<body>
    <?php

        $nombreProducto = "PC Gaming Model X";
        $precioBase = 800.50;
        $stock = 8;
        $enOferta = true;
        $precioFinal = 0;

        echo '<h1> Nombre del producto: '.$nombreProducto .'</h1>';
        echo '<p>Precio base: '.$precioBase.'</p>';
        echo "<p>Precio base: ".$precioBase."</p>";

        if ($enOferta){
            $precioFinal = $precioBase*0.90;
            echo "En oferta! <br>";
            echo "Precio final: ".$precioFinal."€";
        } else{
            $precioFinal = $precioBase;
            echo "Precio final: ".$precioFinal."€";
        }

        if ($stock == 0){
            echo "<p>Producto Agotado </p>";
        } elseif ($stock>0 && $stock<10){
            echo "<p>Últimas unidades! </p>";
        } else{
            echo "<p>En stock </p>";
        }

        $cont = 0;

    ?>

        <select name="selector" id="selector">
        <?php
            while ($cont <= $stock){
            echo "<option>$cont</option>";
            $cont++;
            }
        ?>
        </select>

    <?php

        include 'definiciones.php';
        print "<br><br> Modulo: ".$modulo." del ciclo: ".$ciclo."<br>";

        function precioConIva(){
            global $precio;
            $precioIva = $precio*1.18;
            print "El precio con IVA es ".$precioIva;
        }
        $precio=10;
        precioConIva(); 


    ?>
</body>
</html>