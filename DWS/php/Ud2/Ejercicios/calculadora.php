<?php

    class calculadora
    {

        function __construct()
        {
            
        }

        function factorial($x)
        {
            $res = -1;

            if ($x == 0)
            {
                $res = 1;
            }
            else
            {
                if ($x > 0)
                {
                    $res = $x;
                    while ($x > 1)
                    {
                        $res = $res * ($x - 1);
                        $x--;
                    }
                }
                else
                {
                    throw new Exception("error");
                }
            }

            return $res;
        }

        function coeficienteBinomial($n, $k)
        {
            return $this->factorial($n)/($this->factorial($k)*$this->factorial($n - $k));
        }

        function convierteBinarioDecimal ($num)
        {
            return bindec($num);
        }

        function sumaNumerosPares ($array)
        {
            $suma = 0;

            foreach ($array as $x)
            {
                if ($array[$x-1] % 2 == 0)
                {
                    $suma = $suma + $array[$x-1];
                }
            }

            return $suma;
        }

        function esPalindromo ($str)
        {
            if (strlen($str)<2) {

                return false;
        
            }
            
            for ($i=0;$i<strlen($str);$i++) {
        
                if ($str[$i]!=$str[strlen($str)-$i-1]) {
        
                    return false;
        
                }
        
            }
        
            return true;
        }

        function sumaMatrices ($m1, $m2)
        {
            $m1Col = count($m1);
            $m1Fil = count($m1[0]);

            $m2Col = count($m2);
            $m2Fil = count($m2[0]);

            if ($m1Col != $m2Col || $m1Fil != $m2Fil)
            {
                $bool = false;
            }
            else
            {
                $bool = true;
            }

            $m3 = array();

            if ($bool)
            {
                for ($x = 0; $x < $m1Col; $x++)
                {
                    for ($y = 0; $y < $m1Fil; $y++)
                    {
                        $m3[$x][$y] = $m1[$x][$y] + $m2[$x][$y];
                    }
                }
            }
            else
            {
                echo "Algo va mal mameluco.";
            }

            return $m3;
        }

        function pintarMatriz ($matrix)
        {
            $columnas = count($matrix);
            $filas = count($matrix[0]);

            for ($x = 0; $x < $columnas; $x++)
            {
                echo implode(", ", $matrix[$x])."<br/>";
            }
        }
    }