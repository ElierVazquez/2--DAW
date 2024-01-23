public class BoardScore
{
    private int _materialValorWhite = 0;

        private int _materialValorBlack = 0;

        private string _messageDist = "";

        public BoardScore(int materialValorWhite, int materialValorBlack, string messageDist)
        {
            this._materialValorWhite = materialValorWhite;
            this._materialValorBlack = materialValorBlack;
            this._messageDist = messageDist;
        }

        public int GetMaterialValorWhite()
        {
            return this._materialValorWhite;
        }

        public int GetMaterialValorBlack()
        {
            return this._materialValorBlack;
        }

        public string GetMessageDist()
        {
            return this._messageDist;
        }
}