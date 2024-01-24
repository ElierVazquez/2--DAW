namespace ChessAPI.Model
{
    public class Board
    {
        private Piece[,] _boardPieces;

        public Board(string board)
        {
            //+TODO Inicializa _boardPieces con la información de board
            _boardPieces = new Piece[8,8];
            List<string> pieces = new List<string>();
            string[] stringAux;
            string[] auxArray;

            stringAux = board.Split(";");

            for (int i = 0; i < stringAux.GetLength(0); i++)
            {
                auxArray = stringAux[i].Split(",");
                
                for (int j = 0; j < auxArray.GetLength(0); j++) {
                    pieces.Add(auxArray[j]);
                }
            }

            for (int row = 0; row < _boardPieces.GetLength(0); row++)
            {
                for (int col = 0; col < _boardPieces.GetLength(1); col++)
                {
                    if (pieces[(row + col)] == "ROBL")
                    {
                        _boardPieces[row, col] = new Rook(Piece.ColorEnum.BLACK);
                    }
                    else if (pieces[(row + col)] == "ROWH")
                    {
                        _boardPieces[row, col] = new Rook(Piece.ColorEnum.WHITE);
                    }
                    else if (pieces[(row + col)] == "KNBL")
                    {
                        _boardPieces[row, col] = new Knight(Piece.ColorEnum.BLACK);
                    }
                    else if (pieces[(row + col)] == "KNWH")
                    {
                        _boardPieces[row, col] = new Knight(Piece.ColorEnum.WHITE);
                    }
                    else if (pieces[(row + col)] == "BIBL")
                    {
                        _boardPieces[row, col] = new Bishop(Piece.ColorEnum.BLACK);
                    }
                    else if (pieces[(row + col)] == "BIWH")
                    {
                        _boardPieces[row, col] = new Bishop(Piece.ColorEnum.WHITE);
                    }
                    else if (pieces[(row + col)] == "QUBL")
                    {
                        _boardPieces[row, col] = new Queen(Piece.ColorEnum.BLACK);
                    }
                    else if (pieces[(row + col)] == "QUWH")
                    {
                        _boardPieces[row, col] = new Queen(Piece.ColorEnum.WHITE);
                    }
                    else if (pieces[(row + col)] == "KIBL")
                    {
                        _boardPieces[row, col] = new King(Piece.ColorEnum.BLACK);
                    }
                    else if (pieces[(row + col)] == "KIWH")
                    {
                        _boardPieces[row, col] = new King(Piece.ColorEnum.WHITE);
                    }
                    else if (pieces[(row + col)] == "PABL")
                    {
                        _boardPieces[row, col] = new Pawn(Piece.ColorEnum.BLACK);
                    }
                    else if (pieces[(row + col)] == "PAWH")
                    {
                        _boardPieces[row, col] = new Pawn(Piece.ColorEnum.WHITE);
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

            string[] boardPiecesW = {"|ROWH|", "|BIWH|", "|KNWH|", "|PAWH|", "|QUWH|"};
            string[] boardPiecesB = {"|ROBL|", "|BIBL|", "|KNBL|", "|PABL|", "|QUBL|"};

            for (int row = 0; row < _boardPieces.GetLength(0); row++)
            {
                for (int col = 0; col < _boardPieces.GetLength(1); col++)
                {
                    Piece pieceAux = _boardPieces[row, col];
                    if (pieceAux != null && pieceAux.GetCode() != "|KIWH|" && pieceAux.GetCode() != "|KIBL|")
                    {
                        if (boardPiecesW.Contains(pieceAux.GetCode()))
                        {
                            contWhite += pieceAux.GetScore();
                        } else if (boardPiecesB.Contains(pieceAux.GetCode())) {
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