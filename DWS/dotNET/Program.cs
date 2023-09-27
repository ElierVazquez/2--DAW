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

        static void Main(string[] args)
        {
            
            for (long num = 2; num <= 20; num = num + 2)
            {
                Console.WriteLine(Factorial(num));
            }

        }
    }
}