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

            $str=strtolower(str_replace([" ", ",", "."], "", $str));
        
         
        
            for ($i=0;$i<strlen($str);$i++) {
        
                if ($str[$i]!=$str[strlen($str)-$i-1]) {
        
                    return false;
        
                }
        
            }
        
            return true;
        }
    }