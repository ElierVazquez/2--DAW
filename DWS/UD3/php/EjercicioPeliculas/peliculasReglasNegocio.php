<?php

require("peliculasAccesoDatos.php");

class PeliculasReglasNegocio
{
    private $_ID;
    private $_Titulo;
    private $_Anyo;
    private $_Duracion;
    private $_Sinopsis;
    private $_Votos;

	function __construct()
    {
    }

    function init($id,$titulo,$anyo,$duracion,$sinopsis,$votos)
    {
        $this->_ID = $id;
        $this->_Titulo = $titulo;
        $this->_Anyo = $anyo;
        $this->_Duracion = $duracion;
        $this->_Sinopsis = $sinopsis;
        $this->_Votos = $votos;
    }

    function getID()
    {
        return $this->_ID;
    }

    function getTitulo()
    {
        return $this->_Titulo;
    }

    function getAnyo()
    {
        return $this->_Anyo;
    }

    function getDuracion()
    {
        return $this->_Duracion;
    }

    function getSinop()
    {
        return $this->_Sinopsis;
    }

    function getVotos()
    {
        return $this->_Votos;
    }

    function obtenerPelis($id_categoria)
    {
        $peliculasDAL = new PeliculasAccesoDatos();
        $rs = $peliculasDAL->obtenerPelis($id_categoria);
		$listaPeliculas =  array();
        foreach ($rs as $pelicula)
        {
            $oPeliculasReglasNegocio = new PeliculasReglasNegocio();
            $oPeliculasReglasNegocio->Init($pelicula['ID'],$pelicula['titulo'],$pelicula['año'],$pelicula['duracion'],$pelicula['sinopsis'],$pelicula['votos']);
            array_push($listaPeliculas,$oPeliculasReglasNegocio);
        }
        
        return $listaPeliculas;
    }

    function obtener($id)
    {
        $peliculasDAL = new PeliculasAccesoDatos();
        $rs = $peliculasDAL->obtener($id);
		$listaPeliculas =  array();
        foreach ($rs as $pelicula)
        {
            $oPeliculasReglasNegocio = new PeliculasReglasNegocio();
            $oPeliculasReglasNegocio->Init($pelicula['ID'],$pelicula['titulo'],$pelicula['año'],$pelicula['duracion'],$pelicula['sinopsis'],$pelicula['votos']);
            array_push($listaPeliculas,$oPeliculasReglasNegocio);
        }
        
        return $listaPeliculas;
    }
}

