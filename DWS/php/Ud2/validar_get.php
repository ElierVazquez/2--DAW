<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Desarrollo de aplicaciones web en entorno servidor</title>
</head>

<body>
    <?php

    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);

    require("Ejemplos/funciones_y_condiciones.php");

    $x = validarParametro("name");
    echo $x;

    $bool_vocal = esVocal($x) ? "<br>Es una vocal" : "<br>No es una vocal";
    echo $bool_vocal;

    function validarParametro($param_name)
    {
        $res = "-";
        $name = htmlspecialchars($_GET[$param_name]);

        if (isset($name))
            $res = $name;

        return $res;
    }

    // function esVocal($caracter)
    // {
    //     switch($caracter)
    //     {
    //         case "a":
    //             return true;
    //         case "e":
    //             return true;
    //         case "i":
    //             return true;
    //         case "o":
    //             return true;
    //         case "u":
    //             return true;
    //         default:
    //             return false;
    //     }
    // }

    ?>
</body>

</html>