<?php
    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);

    require("calculadora.php");

    function test1 ()
    {
        $calculadora = new calculadora();
        $x = $calculadora->factorial(10);

        return $x;
    }

    function test2 ()
    {
        $calculadora = new calculadora();
        $x = $calculadora->coeficienteBinomial(5, 3);

        return $x;
    }

    function test3 ()
    {
        $calculadora = new calculadora();
        $x = $calculadora->convierteBinarioDecimal(101101000101);

        return $x;
    }

    function test4 ()
    {
        $calculadora = new calculadora();
        $x = $calculadora->sumaNumerosPares(array(1, 2, 3, 4, 5, 6));

        return $x;
    }

    function test5 ()
    {
        $calculadora = new calculadora();
        $x = $calculadora->esPalindromo("apapa");

        return $x;
    }

    echo "Factorial de 10: ".test1()."<br/>";
    echo "Coeficiente binomial de 5 y 3: ".test2()."<br/>";
    echo "Decimal del binario 101101000101: ".test3()."<br />";
    echo "Suma de números pares: ".test4()."<br />";
    echo "La palabra apapa es palindromo: ".test5();