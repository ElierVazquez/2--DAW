using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;
using Microsoft.Xna.Framework.Input;
using Microsoft.Xna.Framework.Content;
using System.Collections.Generic;
using prueba.core;

namespace prueba;

public class CalaBoka : Game
{
    private GraphicsDeviceManager _graphics;
    public static SpriteBatch spriteBatch;
    static public ContentManager contentManager;
    private GameState gameState;

    public CalaBoka()
    {
        _graphics = new GraphicsDeviceManager(this);
        Content.RootDirectory = "Content";
        IsMouseVisible = true;
        contentManager = Content;
    }

    protected override void Initialize()
    {
        // TODO: Add your initialization logic here

        base.Initialize();
    }

    protected override void LoadContent()
    {
        CalaBoka.spriteBatch = new SpriteBatch(GraphicsDevice);

        Dictionary<string, Texture2D> textures = ContentLoader.LoadTextureDictionary();
        gameState = new GameState(textures);
        // TODO: use this.Content to load your game content here
    }

    protected override void Update(GameTime gameTime)
    {
        if (GamePad.GetState(PlayerIndex.One).Buttons.Back == ButtonState.Pressed || Keyboard.GetState().IsKeyDown(Keys.Escape))
            Exit();

        // TODO: Add your update logic here

        base.Update(gameTime);
    }

    protected override void Draw(GameTime gameTime)
    {
        GraphicsDevice.Clear(Color.Black);

        // TODO: Add your drawing code here
        gameState.Draw();

        base.Draw(gameTime);
    }
}
