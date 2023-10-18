using System;

namespace Test
{
    class Program
    {
        static int Act1 (int[,] array)
        {
            int columnas = array.GetLength(0)-1;
            int filas = array.GetLength(1)-1;

            int columna = 1;

            bool suma = true;
            int totalFila = 0;
            int totalFilaAux = 0;

            for (int fila1 = 0; fila1 <= filas; )
            {
                totalFila = totalFila + array[0,fila1];
                return totalFila;
            }
            
            while ((columna<columnas) && suma)
            {
                for (int j = 1; j <= filas; )
                {
                    totalFilaAux = totalFilaAux + array[columnas,filas];
                    return totalFilaAux;
                }

                if (totalFila != totalFilaAux)
                {
                    suma = false;
                }

                totalFilaAux = 0;
                columna++;
            }

            return 0;
        }

        static void Main (string[] args)
        {
            /*
            //Estructuras de repetición
            Console.WriteLine("Estructuras de repetición\n");
            for (int j = 0; j <= 7; j++)
            {
                Console.WriteLine(j);
            }

            Console.WriteLine("\n");
            int n = 10;
            while (n>0)
            {
                n--;
                Console.WriteLine(n);
            }

            // Arrays
            Console.WriteLine("\nArrays\n");
            int[] numbers = new int[2]{5, 25};
            foreach (var item in numbers)
            {
                Console.WriteLine(item);
            }

            Console.WriteLine();
            char[,] board = new char[3,3] {{'-','-','-'},
                                           {'-','-','-'},
                                           {'-','-','-'}};

            /*
            en board.GetLength(0) hace referencia a la primera dimensión
            y en board.GetLength(1) hace referencia a la segunda dimensión,
            por lo que no se referencia a las posiciones.
            */ /*
            int columnas = board.GetLength(0);
            int filas = board.GetLength(1);

            for (int columna = 0; columna < columnas; columna++)
            {
                for (int fila = 0; fila < filas; fila++)
                {
                    Console.Write(board[columna,fila] + "   ");
                }
                Console.WriteLine();
            }

            // Try catch
            Console.WriteLine("\nTry catch\n");
            try
            {
                int x = 10;
                int y = x / 0;
            }
            catch (System.Exception ex)
            {
                Console.WriteLine(ex.Message);
            } */

            int[,] array = new int[2,2] {{1, 2},
                                        {2, 0}};

            Console.WriteLine(Act1(array));
        }
    }
}