<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chess</title>
    <link rel="stylesheet" href="../../css/chess_game_styles.css">
    <script src="../../js/movablePieces.js"></script>
</head>
<body>
    <?php
        $board = "1r1k1/p1p2pp1/1q1p3p/1P3P2/1P6/2n1Q3/PB4PP/4R1K1";
        // rnbqkbnr/pppppppp/8/8/8/8/PPPPPPPP/RNBQKBNR
        // 

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

            // for ($row = 0; $row < 8; $row++)
            // {
            //     $game[$row] = str_split($rowsGame[$row]);

            //     $count = count($game[$row]);

            //     if ($count < 8) 
            //     {
            //         for ($i = 0; $i < $count; $i++)
            //         {
            //             $game[$row][$count+$i] = "0";
            //         }
            //     }

            //     for ($column = 0; $column < 8; $column++)
            //     {
            //         $auxPiece = $game[$row][$column+1];
            //         switch ($game[$row][$column])
            //         {
            //             case "1":
            //                 $num = intval($game[$row][$column]);
            //                 $game[$row][$column] = "0";
            //                 break;
            //             case "2":
            //                 $num = intval($game[$row][$column]);
            //                 array_splice($game[$row], $column, $num-1, "0");
            //                 break;
            //             case "3":
            //                 $num = intval($game[$row][$column]);
            //                 array_splice($game[$row], $column, $num-1, "0");
            //                 break;
            //             case "4":
            //                 $num = intval($game[$row][$column]);
            //                 array_splice($game[$row], $column, $num-1, "0");
            //                 break;
            //             case "5":
            //                 $num = intval($game[$row][$column]);
            //                 array_splice($game[$row], $column, $num, "0");
            //                 break;
            //             case "6":
            //                 $num = intval($game[$row][$column]);
            //                 for ($cont = 0; $cont < $num; $cont++)
            //                 {
            //                     $game[$row][$column+$cont] = "0";
            //                 }
            //                 break;
            //             case "7":
            //                 $num = intval($game[$row][$column]);
            //                 for ($cont = 0; $cont < $num; $cont++)
            //                 {
            //                     $game[$row][$column+$cont] = "0";
            //                 }
            //                 break;
            //             case "8":
            //                 $num = intval($game[$row][$column]);
            //                 for ($cont = 0; $cont < $num; $cont++)
            //                 {
            //                     $game[$row][$column+$cont] = "0";
            //                 }
            //                 break;
            //         }
            //     }
            // }

            // for ($row = 0; $row < 8; $row++)
            // {
            //     for ($column = 0; $column < 8; $column++)
            //     {
            //         echo $game[$row][$column];
            //     }
            //     echo "<br>";
            // }

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
                    echo "<img src=\"../../img/P.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["R"] - $contPieces["R"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/R.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["N"] - $contPieces["N"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/N.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["B"] - $contPieces["B"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/B.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["Q"] - $contPieces["Q"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/Q.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["K"] - $contPieces["K"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/K.png\">";
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
                            echo "<img src=\"../../img/{$game[$row][$column]}.png\" class=\"piece\">";
                        }
                        else 
                        {
                            echo $game[$row][$column];
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
                    echo "<img src=\"../../img/p.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["r"] - $contPieces["r"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/r.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["n"] - $contPieces["n"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/n.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["b"] - $contPieces["b"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/b.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["q"] - $contPieces["q"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/q.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["k"] - $contPieces["k"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/k.png\">";
                echo "</div>";
            }

            echo "</div>";

            echo "</div>";
        }

        DrawChessGame($board);
    ?>
</body>
</html>