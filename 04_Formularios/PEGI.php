<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    Workflow de Alejandra:
        Primero, guardar los elementos del POST en variables auxialiares
        Segundo, hacer todas las comprobaciones pertinentes
        Tercero, si todas las comprobaciones son correctas, se crean las variables "reales" en base a las auxiliares
        Cuarto, hago las operaciones que tenga que hacer dentro de la condicion isset(...) de las variables "reales"
    -->
    <?php
    /**
     * PEGIs = 3, 7, 12, 16, 18
     */
    ?>

    <form action="" method="post">
        <label for="pegi">PEGI</label>
        <input type="number" name="numero" id="pegi" placeholder="18">
        <input type="hidden" name="accion" value="pegi">
        <input type="submit" value="Dale">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["accion"] == "pegi") {
        $tmp_pegi = $_POST["numero"];
        if ($tmp_pegi != "") {
            if (is_numeric($tmp_pegi)) {
                if ($tmp_pegi > 0) {
                    if ($tmp_pegi == 3 || $tmp_pegi == 7 || $tmp_pegi == 13 || $tmp_pegi == 16 || $tmp_pegi == 18) {
                        $pegi = $tmp_pegi;
                    } else {
                        echo "<p>Ese PEGI no existe.</p>";
                    }
                } else {
                    echo "<p>PEGI no puede ser negativo.</p>";
                }
            } else {
                echo "<p>PEGI debe ser un número.</p>";
            }
        } else {
            echo "<p>Introduce un valor.</p>";
        }
        
        if (isset($pegi)) {
            echo "<p>Me alegro por ti</p>";
        }
    }
    ?>
</body>
</html>