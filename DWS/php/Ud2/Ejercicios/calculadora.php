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
            return $this->factorial($n)/$this->factorial($k)*$this->factorial($n - $k);
        }
    }