<?php

class PeliculasAccesoDatos
{
	
	function __construct()
    {
    }

	function obtenerPelis($id_categoria)
	{
		$conexion = mysqli_connect('localhost','root','12345678');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'new_schema');
		$sanitized_categoria_id = mysqli_real_escape_string($conexion, $id_categoria);
		$consulta = mysqli_prepare($conexion, "SELECT ID, titulo, año, duracion, sinopsis, votos FROM T_Peliculas WHERE id_categoria = ?");
		$consulta->bind_param("i", $sanitized_categoria_id);
        $consulta->execute();
        $result = $consulta->get_result();

		$peliculas =  array();

        while ($myrow = $result->fetch_assoc()) 
        {
			array_push($peliculas,$myrow);
        }
		
		return $peliculas;
	}

	function obtener($id)
	{
		$conexion = mysqli_connect('localhost','root','12345678');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'new_schema');
		$sanitized_categoria_id = mysqli_real_escape_string($conexion, $id);
		$consulta = mysqli_prepare($conexion, "SELECT ID, titulo, año, duracion, sinopsis, votos FROM T_Peliculas WHERE ID = ?");
		$consulta->bind_param("i", $sanitized_categoria_id);
        $consulta->execute();
        $result = $consulta->get_result();

		$peliculas =  array();

        while ($myrow = $result->fetch_assoc()) 
        {
			array_push($peliculas,$myrow);
        }
		
		return $peliculas;
	}
}




















