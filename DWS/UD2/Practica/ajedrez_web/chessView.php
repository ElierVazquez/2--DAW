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
        $board = "rnbqkbnr/pppppppp/8/00000000/00000000/00000000/PPPPPPPP/RNBQKBNR";


        function DrawChessGame($board)
        {
            $contPieces = array
            (
                "p" => 0,
                "r" => 0,
                "n" => 0,
                "b" => 0,
                "q" => 0,
                "k" => 0,
                "P" => 0,
                "R" => 0,
                "N" => 0,
                "B" => 0,
                "Q" => 0,
                "K" => 0
            );

            $boardPieces = array
            (
                "p" => 8,
                "r" => 2,
                "n" => 2,
                "b" => 2,
                "q" => 1,
                "k" => 1,
                "P" => 8,
                "R" => 2,
                "N" => 2,
                "B" => 2,
                "Q" => 1,
                "K" => 1
            );

            $rowsGame = explode("/", $board);
            $game = array();

            $sectionColor = "";

            for ($row = 0; $row < count($rowsGame); $row++)
            {
                $game[$row] = str_split($rowsGame[$row]);

                for ($column = 0; $column < count($game[$row]); $column++)
                {
                    if ($game[$row][$column] == range(1, 8))
                    {
                        // Aquí
                    }
                }
            }

            echo "<div id=\"game\">";

            for ($row = 0; $row < 8; $row++)
            {
                for ($column = 0; $column < 8; $column++)
                {
                    switch ($game[$row][$column])
                    {
                        case "P":
                            $contPieces["P"]++;
                            break;
                        case "R":
                            $contPieces["R"]++;
                            break;
                        case "N":
                            $contPieces["N"]++;
                            break;
                        case "B":
                            $contPieces["B"]++;
                            break;
                        case "Q":
                            $contPieces["Q"]++;
                            break;
                        case "K":
                            $contPieces["K"]++;
                            break;
                    }
                }
            }

            echo "<div id=\"blackCatches\">";

            for ($i = 0; $i < ($boardPieces["P"] - $contPieces["P"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/P.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["R"] - $contPieces["R"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/R.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["N"] - $contPieces["N"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/N.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["B"] - $contPieces["B"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/B.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["Q"] - $contPieces["Q"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/Q.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["K"] - $contPieces["K"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/K.png\">";
                echo "</div>";
            }

            echo "</div>";

            echo "<div id=\"board\">";

            for ($row = 0; $row < 8; $row++)
            {
                for ($column = 0; $column < 8; $column++)
                {
                    if (($row + $column) % 2== 0)
                    {
                        $sectionColor = "White";
                    }
                    else
                    {
                        $sectionColor = "Black";
                    }

                    echo "<div id=\"section$row|$column\" class=\"{$sectionColor} section\">";
                        if ($game[$row][$column] != 0)
                        {
                            echo "<img draggable=\"true\" src=\"img/{$game[$row][$column]}.png\" class=\"piece\">";
                        }
                    echo "</div>";
                }
            }

            echo "</div>";

            for ($row = 0; $row < 8; $row++)
            {
                for ($column = 0; $column < 8; $column++)
                {
                    switch ($game[$row][$column])
                    {
                        case "p":
                            $contPieces["p"]++;
                            break;
                        case "r":
                            $contPieces["r"]++;
                            break;
                        case "n":
                            $contPieces["n"]++;
                            break;
                        case "b":
                            $contPieces["b"]++;
                            break;
                        case "q":
                            $contPieces["q"]++;
                            break;
                        case "k":
                            $contPieces["k"]++;
                            break;
                    }
                }
            }

            echo "<div id=\"whiteCatches\">";

            for ($i = 0; $i < ($boardPieces["p"] - $contPieces["p"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/p.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["r"] - $contPieces["r"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/r.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["n"] - $contPieces["n"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/n.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["b"] - $contPieces["b"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/b.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["q"] - $contPieces["q"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/q.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["k"] - $contPieces["k"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/k.png\">";
                echo "</div>";
            }

            echo "</div>";

            echo "</div>";
        }

        DrawChessGame($board);
    ?>
</body>
</html>