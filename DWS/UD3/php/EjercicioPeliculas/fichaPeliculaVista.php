<!doctype html>
<html>
<head>
    <style>
        * {
            text-align: center;
        }

        p {
            border: 1px solid black;
            width: 66%;
            min-height: 5vh;
            position: relative;
            transform: translate(-50%);
            margin-left: 50%;
            margin-bottom: 0;
            margin-top: 0;
            padding: 1%;
        }
    </style>
</head>

<body>
    <?php
        ini_set('display_errors', 'On');
        ini_set('html_errors', 0);
        require("peliculasReglasNegocio.php");
        $id = $_GET["ID"];
        $peliculasBL = new PeliculasReglasNegocio();
        $datosPeliculas = $peliculasBL->obtener($id);

        foreach ($datosPeliculas as $pelicula)
        {
            echo "<h1>";
            print($pelicula->getTitulo());
            echo "</h1>";

            echo "<p>";
            print("Año: ".$pelicula->getAnyo());
            echo "</p>";

            echo "<p>";
            print("Duración: ".$pelicula->getDuracion());
            echo "</p>";

            echo "<p>";
            print("Sinopsis: ".$pelicula->getSinop());
            echo "</p>";

            echo "<p>";
            print("Votos: ".$pelicula->getVotos());
            echo "</p>";
        }
    ?>
</body>

</html>