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


        /// DONE Practica 02_1
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
    }
}
