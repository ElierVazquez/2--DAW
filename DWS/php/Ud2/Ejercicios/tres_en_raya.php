<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tres en raya</title>
    <style>
        #caja {
            width: 75px;
            background-color: red;
        }

        
    </style>
</head>

<body>
    <div id="caja">
        <?php
        $matriz = array(
            array("x", "o", "x"),
            array("o", "x", ""),
            array("o", "", "x")
        );

        $max_filas = count($matriz);

        echo "<table>";

        for ($fila = 0; $fila < $max_filas; $fila++) {
            echo "<tr>";
            $max_columnas_fila = count($matriz[$fila]);
            for ($columna = 0; $columna < $max_columnas_fila; $columna++) {
                echo "<td>";

                echo $matriz[$fila][$columna];

                if ($columna != 2)
                {
                    echo " |";
                }

                if ($fila != 2)
                {
                    echo "<hr />";
                }

                echo "</td>";
            }

            echo "</tr>";
        }

        echo "</table>"
        ?>
    </div>
</body>

</html>