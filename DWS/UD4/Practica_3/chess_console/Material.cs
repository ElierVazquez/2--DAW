using ChessAPI.Model;

namespace ChessAPI
{
    internal class Material
    {
        private int _materialValorWhite = 0;

        private int _materialValorBlack = 0;

        private string _messageDist = "";

        public Material(int materialValorWhite, int materialValorBlack, string messageDist)
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

        public int GetMessageDist()
        {
            return this._messageDist;
        }
    }
}