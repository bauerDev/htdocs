<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays</h1>

    <?php
        $frutas = ["Manzana",
                    "Pera",
                    "Naranja"];

        //Cambio de elemento en la posición tercera

        $frutas[2] = "Durazno";

        //Añadir elementos. Para imprimir todo el array hace falta print, echo solo accede a una posición

        $frutas[] = "Limón";
        print_r($frutas);

        //Arrays asociativos: son pares clave-valor en un formato tipo JSON

        $usuario = [
            'nombre' => 'Ana',
            'email' => 'ana@correo.es',
            'edad' => 25
        ];
        
        print_r($usuario);

        //LLamar a un elemento del array (print sin r sólo imprime una cosa)

        print $usuario["nombre"];

        //Cambiar valor en array asociativo:

        $usuario["edad"] = 26;

        //Array con valores y sumar

        $suma = [2, 4];

        $sumatorio = $suma[0] + $suma[1];

        echo $sumatorio;

        //Recorrer array normal con foreach

        foreach($frutas as $fruta){
            echo "$fruta";
        }

        //Recorrer array asociativo

        foreach($usuario as $clave => $valor){
            echo "$clave: $valor<br>";
        }

        if (isset($_POST['nombre'])){
            echo "Datos Recibidos (con foreach):";
            echo "";

            //Recorremos POST como cualquier otro array asociativo

            foreach ($_POST as $clave => $valor){
                echo "$clave: $valor";
            }
        }

        //Cambio de tipo de variable

        $soloEuros=5;
        $centimos=43;
        $dinero=$soloEuros+($centimos/100);
        print $dinero;

        // ejercicio prueba

        


    
    ?>
</body>
</html>