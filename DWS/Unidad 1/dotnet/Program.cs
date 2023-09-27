namespace MyApp // Note: actual namespace depends on the project name.
{
    class Program
    {

        public static long Factorial(long x)
        {
            long res = -1;
            if (x==0)
                res = 1;
            else
            {
                if (x>0)
                {
                    res = x;
                    while (x>1)
                    {
                        res = res * (x - 1);
                        x--;
                    }
                }
                else
                {
                    throw new Exception("error");
                }
            }

            return res;

        }

        public static void quieroElDiez(int x)
        {

            int cont = 0;
            int num = 0;

            while (cont <= x)
            {
                if (cont==0)
                {
                    num+=2;
                    cont++;
                    continue;
                }

                Console.WriteLine(Factorial(num));
                num+=2;
                cont++;
            }

        }

        static void Main(string[] args)
        {
            
            quieroElDiez(10);

        }
    }
}