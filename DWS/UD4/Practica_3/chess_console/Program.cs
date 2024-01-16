using ChessAPI.Model;

namespace ChessAPI
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Begin Chess Console Test...");
            ChessGame chess = new ChessGame();
            chess.DrawBoard();
            Console.WriteLine();

            chess.TryToMove();

            chess.DrawBoard();
            Console.WriteLine();
            var code = chess.GetBoardAsStringToChessWeb();
            Console.WriteLine(code);
            Console.WriteLine("End. Chess Console Test...");
        }
    }
}