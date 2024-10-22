<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- -----PARA QUE SALGAN MENSAJES DE ERROR CUANDO LAS COSAS NO ESTÁN BIEN----- -->
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );
    ?>

    <!-- -----DEFINICIÓN DE CONSTANTE GLOBAL----- -->
    <?php
        define("NOMBRE_CONSTANTE", "valor");
    ?>

    <!-- -----LOS CÓDIGOS PHP TRATAN EL HTML COMO UN COMENTARIO, NO LO TIENE EN CUENTA; AUNQUE DOS ETIQUETAS PHP ESTÉN SEPARADAS, ES COMO SI ESTUBIERAN JUNTAS----- -->
    <?php
        // -----CREAR VARIABLE-----
        $variable = "valor";

        // -----var_dump() MUESTRA INFORMACIÓN SOBRE LA VARIABLE-----
        var_dump($variable);

        // -----echo CAGA EL TEXTO QUE LE METAS DENTRO, Y COMO ESTAMOS EN HTML PODEMOS CREAR ETIQUETAS DESDE EL CÓDIGO-----
        echo "<h1>$variable</h1>";
        // -----concatenar-----
        echo "<p>hola " . (1+2) . " que tal</p>";

        // -----date('parametros'), mirar https://www.php.net/manual/es/function.date.php-----
        $dia = date('j');

        // -----rand(x, y) => numeros aleatorios en un rango-----
        $random = rand(1, 4);
    ?>

    <!-- -----ARRAYS----- -->
        <!-- -----LOS ARRAYS EN PHP SON HASHMAPS (PAREJAS KEY/VALUE)----- -->
        <!-- -----SI NO SE ESPECIFICA LA KEY, SE ASIGNA UN VALOR NUMÉRICO EN ORDEN (0, 1, 2, 3, ...)----- -->
    <?php
            // -----DECLARAR ARRAY-----

        // -----Especificando la key-----
        $frutas = array(
            "clave 1" => "Manzana",
            'clave 2' => 'Naranja',
            'clave 3' => "Cereza"
        );
        // -----Sin epecificar la key-----
        $frutas = [
            "Manzana",
            "Naranja",
            "Cereza",
        ];

            // -----RECORRER EL ARRAY-----

        // -----Recorrer con for (EL LENGTH EN PHP ES COUNT(ARRAY))-----
        for($i = 0; $i < count($frutas); $i++){
            echo "<li>$frutas[$i]</li>";
        }
        // -----Recorrer con foreach-----
        foreach($frutas as $fruta){
            echo "<li>$fruta</li>";
        }
        // -----Recorrer con foreach, mostrando key y value-----
        foreach($frutas as $clave => $fruta){
            echo "<li>$clave, $fruta</li>";
        }

        // -----MOSTRAR ARRAY RÁPIDO Y FEO-----
        print_r($frutas);

            // -----AÑADIR/ELIMINAR ELEMENTOS ARRAY-------

        // -----array_push($array, "valor1", "valor2", ...); Añadir elemento/s al fondo del array con las keys numéricas mas bajas que pueda-----
        array_push($frutas, "Mango", "Melocotón");
        // -----añadir por posición/key-----
        $frutas[] = "Sandía";
        $frutas[7] = "Uva";
        $frutas[] = "Melón";

        // -----unset($array["key"]); La posición sigue existiendo vacía-----
        unset($frutas[1]);

            // -----ARREGLAR KEYS VACÍAS DE ARRAY-----

        $frutas = array_values($frutas);

            // -----ORDENAR ELEMENTOS DEL ARRAY-----

        // Los que no son asociativos MACHACAN las keys al usarse
        // sort()
        // rsort(); -> reverse sort
        // asort(); -> asociative sort
        // arsort(); -> reverse asociative sort
        // ksort(); -> key sort
        // krsort(); -> reverse key sort

            // -----ORDENAR MATRICES-----

        $notas = [
            ["Paco", "Desarrollo web servidor"],
            ["Paco", "Desarrollo web cliente"],
            ["Manu", "Desarrollo web servidor"],
            ["Manu", "Desarrollo web cliente"]
        ];

        // -----$_columna_extraida = array_column($array, columna_a_extraer);-----
        $_nombre = array_column($notas, 0);
        $_notas = array_column($notas, 2);
        $_asignatura = array_column($notas, 1);

        // -----array_multisort($columna_extraida1_de_array, forma_de_ordenar, $columna_extraida2_de_array, forma_de_ordenar, ......., $array_original)-----
        array_multisort($_nombre, SORT_ASC, $_notas, SORT_ASC, $_asignatura, SORT_ASC, $notas);
    ?>

    <!-- -----TABLAS Y ARRAYS -->
        <!-- Se pueden hacer con mil echo "....." pero es un coñazo, lo suyo es hacerlo en html y meter php solo cuando sea necesario -->
    <?php
        $personas = [
            "11223344F" => "José Alonso",
            "22331133G" => "Enya García",
            "44332211R" => "Fulgencio Hermenegildo"
        ];
    ?>
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($personas as $dni => $nombre){ ?>
                    <tr>
                        <td><?php echo $dni ?></td>
                        <td><?php echo $nombre ?></td>
                    </tr>
                <?php }
            ?>
        </tbody>
    </table>

    <!-- -----FORMULARIOS----- -->
    <!-- Mirar ejercicio "divisas.php" -->


</head>
<body>
    
</body>
</html>