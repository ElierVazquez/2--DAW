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

            BoardPosition from = new BoardPosition(1,0);
            BoardPosition to = new BoardPosition(3,0);
            Movement move = new Movement(from, to);
            chess.TryToMove(move);

            chess.DrawBoard();
            var code = chess.GetBoardAsStringToChessWeb();
            Console.WriteLine(code);
            Console.WriteLine("End. Chess Console Test...");
        }
    }
}