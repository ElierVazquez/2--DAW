<?php
    $connection = mysqli_connect('localhost', 'root', '12345678');
    if (mysqli_connect_errno())
    {
        echo 'Error connecting to MySQL'. mysqli_connect_error();
    }