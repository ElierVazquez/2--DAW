using Microsoft.Xna.Framework.Graphics;
using System.Collections.Generic;

namespace prueba.core;

public class ContentLoader
{
    public static Dictionary<string, Texture2D> LoadTextureDictionary()
    {
        Dictionary<string, Texture2D> textures = new Dictionary<string, Texture2D>();
        textures.Add("KNWH", prueba.CalaBoka.contentManager.Load<Texture2D>("KNWH"));
        return textures;
    }
}