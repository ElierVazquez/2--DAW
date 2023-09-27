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

            int cont = 1;
            int num = 0;

            if (cont==0)
            {
                throw new Exception("error");
            }

            while (cont <= x)
            {
                num+=2;
                cont++;
                Console.WriteLine(Factorial(num));
            }

        }

        static void Main(string[] args)
        {
            
            quieroElDiez(10);

        }
    }
}