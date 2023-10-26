<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chess</title>
    <link rel="stylesheet" href="style/chess_game_styles.css">
    <script src="js/movablePieces.js"></script>
</head>
<body>
    <?php
        $board = "ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL;PABL,PABL,PABL,PABL,PABL,PABL,PABL,PABL;0,0,0,0,0,0,0,0;0,0,0,0,0,0,0,0;0,0,0,0,0,0,0,0;0,0,0,0,0,0,0,0;PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH;ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH";

        function DrawChessGame($board)
        {
            $rowsGame = explode(";", $board);
            $game = array();

            for ($i = 0; $i < count($rowsGame); $i++)
            {
                $game[$i] = explode(",", $rowsGame[$i]);
            }

            echo "<div id=\"board\">";

            for ($row = 0; $row < 8; $row++)
            {
                for ($column = 0; $column < 8; $column++)
                {
                    if (($row + $column) % 2== 0)
                    {
                        echo "<div id=\"section$row|$column\" class=\"White section\">";
                            if ($game[$row][$column] != 0)
                            {
                                echo "<img draggable=\"true\" src=\"img/{$game[$row][$column]}.png\" class=\"piece\">";
                            }
                        echo "</div>";
                    }
                    else
                    {
                        echo "<div id=\"section$row|$column\" class=\"Black section\">";
                            if ($game[$row][$column] != 0)
                            {
                                echo "<img draggable=\"true\" src=\"img/{$game[$row][$column]}.png\" class=\"piece\">";
                            }
                        echo "</div>";
                    }
                }
            }

            echo "</div>";
        }

        DrawChessGame($board);
    ?>
</body>
</html>