using ChessAPI.Model;

namespace ChessAPI
{
    internal class Board
    {
        public Piece[,] board;

        public Board()
        {
            board = new Piece[8, 8];

            //TODO Practica 02_7
            // Este constructor colocará las piezas en el tablero
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
        // TODO Practica 02_3
        //Implementar el método _move, que no realizará ninguna validación
        //simplemente moverá en la matriz la pieza. Realiza modificaciones
        //en otras clases si lo consideras necesario...
        private void _Move(Movement movement)
        {

        }

        // TODO Practica 02_4
        //Este método escribira por consola el tablero,
        //haciendo un salto de línea después de cada fila.
        //Para ver el formato del pintado, leer enunciado de la práctica
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
                        if ((row+1)%(column+1)==0)
                        {
                            Console.Write((row+1)%(column+1));
                        }
                        else
                        {
                            Console.Write((row+1)%(column+1));
                        }
                    }
                }
                Console.WriteLine();
            }
        }
        // TODO Practica 02_5
        //Este método devuelve una cadena con el estado del tablero. Dicha cadena,
        //ha de tener el formato esperado por la parte Web para poder procesarse
        //y pintarse.
        public string GetBoardState()
        {
            string result = string.Empty;
            
            return result;

        }


    }
}
