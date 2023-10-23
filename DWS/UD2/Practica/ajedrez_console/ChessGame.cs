namespace ChessAPI
{
    internal class ChessGame
    {
        private Board board;


        public ChessGame()
        {
            board = new Board();
        }

        public void DrawBoard()
        {
            this.board.Draw();
        }

        public void TryToMove()
        {
            // DONE Practica 02_6
            BoardPosition fromPosition = new BoardPosition(1,0);
            BoardPosition toPosition = new BoardPosition(3,0);
            Movement movement = new Movement(fromPosition, toPosition);
            
            this.board.Move(movement);
        }

        public string GetBoardAsStringToChessWeb()
        {
            return board.GetBoardState();
        }

    }
}
