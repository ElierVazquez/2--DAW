<?php

    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);

    function getParam ()
    {
        $frase = $_GET["frase"];

        if ($frase == null)
        {
            throw new Exception("nullException in GET");
        }

        return $frase;
    }

    echo getParam();
    function cambioVocalA ($frase)
    {
        $arrayLetras = str_split($frase);

        for ($x = 0; $x < strlen($frase); $x++)
        {
            if ($arrayLetras[$x] == "e" || $arrayLetras[$x] == "i" || $arrayLetras[$x] == "o" || $arrayLetras[$x] == "u")
            {
                $arrayLetras[$x] = "a";
            }
        }

        return implode($arrayLetras);
    }

    function cambioVocalE ($frase)
    {
        $arrayLetras = str_split($frase);

        for ($x = 0; $x < strlen($frase); $x++)
        {
            if ($arrayLetras[$x] == "a" || $arrayLetras[$x] == "i" || $arrayLetras[$x] == "o" || $arrayLetras[$x] == "u")
            {
                $arrayLetras[$x] = "e";
            }
        }

        return implode($arrayLetras);
    }

    function cambioVocalI ($frase)
    {
        $arrayLetras = str_split($frase);

        for ($x = 0; $x < strlen($frase); $x++)
        {
            if ($arrayLetras[$x] == "a" || $arrayLetras[$x] == "e" || $arrayLetras[$x] == "o" || $arrayLetras[$x] == "u")
            {
                $arrayLetras[$x] = "i";
            }
        }

        return implode($arrayLetras);
    }
    function cambioVocalO ($frase)
    {
        $arrayLetras = str_split($frase);

        for ($x = 0; $x < strlen($frase); $x++)
        {
            if ($arrayLetras[$x] == "a" || $arrayLetras[$x] == "e" || $arrayLetras[$x] == "i" || $arrayLetras[$x] == "u")
            {
                $arrayLetras[$x] = "o";
            }
        }

        return implode($arrayLetras);
    }
    function cambioVocalU ($frase)
    {
        $arrayLetras = str_split($frase);

        for ($x = 0; $x < strlen($frase); $x++)
        {
            if ($arrayLetras[$x] == "a" || $arrayLetras[$x] == "e" || $arrayLetras[$x] == "i" || $arrayLetras[$x] == "o")
            {
                $arrayLetras[$x] = "u";
            }
        }

        return implode($arrayLetras);
    }

    function pintarFrases()
    {
        echo "<br />".cambioVocalA(getParam());
        echo "<br />".cambioVocalE(getParam());
        echo "<br />".cambioVocalI(getParam());
        echo "<br />".cambioVocalO(getParam());
        echo "<br />".cambioVocalU(getParam());
    }

    pintarFrases();