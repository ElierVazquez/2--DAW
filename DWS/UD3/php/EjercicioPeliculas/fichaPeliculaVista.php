<!doctype html>
<html>
<head>

</head>

<body>
    <h1> Listado de peliculas </h1>
    <?php
        require("peliculasReglasNegocio.php");
        $id_categoria = $_GET["id_categoria"];
        $peliculasBL = new PeliculasReglasNegocio();
        $datosPeliculas = $peliculasBL->obtener($id_categoria);
        
        foreach ($datosPeliculas as $pelicula)
        {
            echo "<div>";
            print($pelicula->getTitulo());
            echo "</div>";
        }
    ?>
</body>

</html>