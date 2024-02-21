using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;
using System.Collections.Generic;
using prueba.core;

namespace prueba.core;

public class GameState
{
    public Dictionary<string, Texture2D> textures;
    public Player player;
    public GameState(Dictionary<string, Texture2D> textures)
    {
        this.textures = textures;
        Vector2 initialPlayerPosition = new Vector2(200, 400);
        this.player = new Player(initialPlayerPosition,Config.PLAYERSIZE,this.textures["KNWH"]);
    }

    public void Draw()
    {
        prueba.CalaBoka.spriteBatch.Begin();
        this.player.Draw();
        prueba.CalaBoka.spriteBatch.End();
    }
}