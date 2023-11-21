<!doctype html>
<html>
<head>

</head>

<body>
    <h1> Listado de peliculas </h1>
    <?php
        ini_set('display_errors', 'On');
        ini_set('html_errors', 0);
        require("peliculasReglasNegocio.php");
        $id = $_GET["ID"];
        $peliculasBL = new PeliculasReglasNegocio();
        $datosPeliculas = $peliculasBL->obtener($id);

        foreach ($datosPeliculas as $pelicula)
        {
            echo "<p>";
            print("Título: ".$pelicula->getTitulo());
            echo "</p>";

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