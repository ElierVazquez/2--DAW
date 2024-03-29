using ChessAPI.Model;

namespace ChessAPI
{
    internal class Board
    {
        public Piece[,] board;

        public Board()
        {
            board = new Piece[8, 8];

            board[0,0] = new Rook(Piece.ColorEnum.BLACK);
            board[0,1] = new Knight(Piece.ColorEnum.BLACK);
            board[0,2] = new Bishop(Piece.ColorEnum.BLACK);
            board[0,3] = new Queen(Piece.ColorEnum.BLACK);
            board[0,4] = new King(Piece.ColorEnum.BLACK);
            board[0,5] = new Bishop(Piece.ColorEnum.BLACK);
            board[0,6] = new Knight(Piece.ColorEnum.BLACK);
            board[0,7] = new Rook(Piece.ColorEnum.BLACK);

            for (int cont = 0; cont < board.GetLength(1); cont++)
            {
                board[1,cont] = new Pawn(Piece.ColorEnum.BLACK);
            }

            for (int cont = 0; cont < board.GetLength(1); cont++)
            {
                board[6,cont] = new Pawn(Piece.ColorEnum.WHITE);
            }

            board[7,0] = new Rook(Piece.ColorEnum.WHITE);
            board[7,1] = new Knight(Piece.ColorEnum.WHITE);
            board[7,2] = new Bishop(Piece.ColorEnum.WHITE);
            board[7,3] = new Queen(Piece.ColorEnum.WHITE);
            board[7,4] = new King(Piece.ColorEnum.WHITE);
            board[7,5] = new Bishop(Piece.ColorEnum.WHITE);
            board[7,6] = new Knight(Piece.ColorEnum.WHITE);
            board[7,7] = new Rook(Piece.ColorEnum.WHITE);
        }
        
        public Piece GetPiece(int row, int column)
        {
            return board[row, column];
        }

        public void Move(Movement movement)
        {
            if (movement.IsValid())
            {
                _Move(movement);
            }
        }

        private void _Move(Movement movement)
        {
            
            Piece fromPiece = board[movement.GetFromPositionRow(), movement.GetFromPositionColumn()];

            board[movement.GetToPositionRow(), movement.GetToPositionColumn()] = fromPiece;
            board[movement.GetFromPositionRow(), movement.GetFromPositionColumn()] = null;
        }

        public void Draw()
        {
            for (int row = 0; row < board.GetLength(0); row++)
            {
                for (int column = 0; column < board.GetLength(1); column++)
                {
                    if (board[row,column] != null)
                        Console.Write(board[row, column].GetCode());
                    else
                    {
                        if (((row+1+column+1) % 2) == 0)
                        {
                            Console.Write("|0000|");
                        }
                        else
                        {
                            Console.Write("|XXXX|");
                        }
                    }
                }
                Console.WriteLine();
            }
        }
        
        public string GetBoardState()
        {
            string result = string.Empty;

            for (int i = 0; i < board.GetLength(0); i++)
            {
                for (int j = 0; j < board.GetLength(1); j++)
                {
                    if (board[i, j] != null)
                    {
                        result += board[i, j].GetCode();
                    }
                    else
                    {
                        result += "0";
                    }

                    if (j == board.GetLength(1) - 1)
                    {
                        result += ";";
                    }
                    else
                    {
                        result += ",";
                    }
                }
            }

            result = result.Replace("|", "");
            result = result.Remove(result.Length - 1);
            
            return result;

        }


    }
}
