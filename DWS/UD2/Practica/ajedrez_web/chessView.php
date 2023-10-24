<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chess</title>
    <link rel="stylesheet" href="style/chess_game_styles.css">
</head>
<body>
    <?php
        echo "<div id=\"board\">";

        for ($row = 0; $row < 8; $row++)
        {
            for ($column = 0; $column < 8; $column++)
            {
                if (($row + $column) % 2== 0)
                {
                    echo "<div id=\"section$row|$column\" class=\"section\">
                        <img src=\"img/white_section.png\" alt=\"White section\">
                    </div>";
                }
                else
                {
                    echo "<div id=\"section$row|$column\" class=\"section\">
                        <img src=\"img/black_section.png\" alt=\"Black section\">
                    </div>";
                }
            }
        }

        echo "</div>";
    ?>
</body>
</html>