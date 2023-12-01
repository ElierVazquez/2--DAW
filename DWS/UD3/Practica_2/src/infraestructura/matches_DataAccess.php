<?php
    class Matches_DataAccess 
    {
        function __construct()
        {}

        function toSet($title, $whitePlayer, $blackPlayer)
        {
            $connection = mysqli_connect('localhost', 'root', '12345678');
            if (mysqli_connect_errno())
            {
                echo 'Error connecting to MySQL: '.mysqli_connect_error();
            }

            mysqli_select_db($connection, "chess_game");

            $sanitized_title = mysqli_real_escape_string($connection, $title);
            $insert_match = mysqli_prepare($connection, "INSERT INTO T_Matches(title, white, black, startDate, state) VALUES (?, {$whitePlayer}, {$blackPlayer}, NOW(), \"En curso\")");
            $insert_match->bind_param("s", $sanitized_title);
            $insert_match->execute();
        }
    }