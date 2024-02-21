using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;
using System.Collections.Generic;

namespace prueba.core;

public class Player
{
    public int size;
    public Texture2D texture;
    public Vector2 position;
    public Player(Vector2 position, int size, Texture2D texture)
    {
        this.position = position;
        this.size = size;
        this.texture = texture;
    }

    public void Draw()
    {
        Microsoft.Xna.Framework.Rectangle rect = new Microsoft.Xna.Framework.Rectangle((int)position.X, (int)position.Y, this.size, this.size);
        CalaBoka.spriteBatch.Draw(this.texture, rect, Color.White);
    }
}