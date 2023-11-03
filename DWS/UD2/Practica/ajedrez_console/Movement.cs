namespace ChessAPI
{
    public class Movement
    {
        private BoardPosition _fromBoardPosition;
        private BoardPosition _toBoardPosition;

        public Movement(BoardPosition fromBoardPosition, BoardPosition toBoardPosition)
        {
            _fromBoardPosition = fromBoardPosition;
            _toBoardPosition = toBoardPosition;
        }

        public bool IsValid()
        {
            if (_toBoardPosition.Column > 7 || _toBoardPosition.Row > 7)
            {
                return false;
            }
            else if (_toBoardPosition.Column < 0 || _toBoardPosition.Row < 0)
            {
                return false;
            }
            else if (_fromBoardPosition.Column > 7 || _fromBoardPosition.Row > 7)
            {
                return false;
            }
            else if (_fromBoardPosition.Column < 0 || _fromBoardPosition.Row < 0)
            {
                return false;
            }

            return true;
        }

        // Añadidos Getters para extraer las filas y columnas del movimiento
        public int GetFromPositionRow()
        {
            return this._fromBoardPosition.Row;
        }

        public int GetFromPositionColumn()
        {
            return this._fromBoardPosition.Column;
        }

        public int GetToPositionRow()
        {
            return this._toBoardPosition.Row;
        }

        public int GetToPositionColumn()
        {
            return this._toBoardPosition.Column;
        }
    }
}
