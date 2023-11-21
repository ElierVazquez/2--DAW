<!doctype html>
<html>
<head>

</head>

<body>
    <h1> Listado de peliculas </h1>
    <?php
        require("peliculasReglasNegocio.php");
        $id_categoria = $_POST["id_categoria"];
        $peliculasBL = new PeliculasReglasNegocio();
        $datosPeliculas = $peliculasBL->obtenerPelis($id_categoria);
        
        foreach ($datosPeliculas as $pelicula)
        {
            $id_peli = $pelicula->getID();

            echo "<div>";
            echo "<a href=\"fichaPeliculaVista.php?ID=$id_peli\">";
            print($pelicula->getTitulo());
            echo "</a>";
            echo "</div>";
        }
    ?>
</body>

</html>