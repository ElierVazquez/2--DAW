namespace ChessAPI.Model
{
    public class Board
    {
        private Piece[,] _boardPieces;

        public Board(string board)
        {
            //+TODO Inicializa _boardPieces con la información de board
            string[] _boardStrings;
            _boardPieces = new Piece[8,8];
            string[] stringAux;
            string aux2 = "";

            stringAux = board.Split(";");

            for (int row = 0; row < _boardPieces.GetLength(0); row++)
            {
                aux2 = stringAux[row];
                // WARNING: arreglar la siguiente linea para meter las piezas
                _boardStrings[row] = aux2.Split(",");
            }

            for (int row = 0; row < _boardPieces.GetLength(0); row++)
            {
                for (int col = 0; col < _boardPieces.GetLength(1); col++)
                {
                    if (_boardStrings[row, col] == "ROBL")
                    {
                        _boardPieces[row, col] = new Rook(Piece.ColorEnum.BLACK);
                    }
                    else if (_boardStrings[row, col] == "ROWH")
                    {
                        _boardPieces[row, col] = new Rook(Piece.ColorEnum.WHITE);
                    }
                    else if (_boardStrings[row, col] == "KNBL")
                    {
                        _boardPieces[row, col] = new Knight(Piece.ColorEnum.BLACK);
                    }
                    else if (_boardStrings[row, col] == "KNWH")
                    {
                        _boardPieces[row, col] = new Knight(Piece.ColorEnum.WHITE);
                    }
                    else if (_boardStrings[row, col] == "BIBL")
                    {
                        _boardPieces[row, col] = new Bishop(Piece.ColorEnum.BLACK);
                    }
                    else if (_boardStrings[row, col] == "BIWH")
                    {
                        _boardPieces[row, col] = new Bishop(Piece.ColorEnum.WHITE);
                    }
                    else if (_boardStrings[row, col] == "QUBL")
                    {
                        _boardPieces[row, col] = new Queen(Piece.ColorEnum.BLACK);
                    }
                    else if (_boardStrings[row, col] == "QUWH")
                    {
                        _boardPieces[row, col] = new Queen(Piece.ColorEnum.WHITE);
                    }
                    else if (_boardStrings[row, col] == "KIBL")
                    {
                        _boardPieces[row, col] = new King(Piece.ColorEnum.BLACK);
                    }
                    else if (_boardStrings[row, col] == "KIWH")
                    {
                        _boardPieces[row, col] = new King(Piece.ColorEnum.WHITE);
                    }
                    else if (_boardStrings[row, col] == "PABL")
                    {
                        _boardPieces[row, col] = new Pawn(Piece.ColorEnum.BLACK);
                    }
                    else if (_boardStrings[row, col] == "PAWH")
                    {
                        _boardPieces[row, col] = new Pawn(Piece.ColorEnum.WHITE);
                    }
                    else if (_boardStrings[row, col] == "0")
                    {
                        continue;
                    }
                }
            }

        } 

        public BoardScore GetScore()
        {
            int contWhite = 0;
            int contBlack = 0;
            string message = "";
            int distance = 0;

            string[] boardPieces = {"|ROWH|", "|BIWH|", "|KNWH|", "|PAWH|", "|QUWH|"};

            for (int row = 0; row < board.GetLength(0); row++)
            {
                for (int col = 0; col < board.GetLength(1); col++)
                {
                    Piece pieceAux = board[row, col];
                    if (pieceAux != null && pieceAux.GetCode() != "|KIWH|" && pieceAux.GetCode() != "|KIBL|")
                    {
                        if (boardPieces.Contains(pieceAux.GetCode()))
                        {
                            contWhite += pieceAux.GetScore();
                        } else {
                            contBlack += pieceAux.GetScore();
                        }
                    }
                }
            }

            distance = Math.Abs(contBlack-contWhite);
            string plural = "";

            if (distance > 1)
            {
                plural = " points.";
            }
            else
            {
                plural = " point.";
            }
            
            if (contWhite > contBlack)
            {
                message = "White is winning by " + distance + plural;
            } 
            else if (contBlack > contWhite)
            {
                message = "Black is winning by " + distance + plural;
            }
            else 
            {
                message = "";
            }

            return new BoardScore(contWhite, contBlack, message);

        }
        
    }
}