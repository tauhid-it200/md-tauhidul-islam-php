<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "pgdit_17";

    $connection = mysqli_connect($host, $user, $password, $db);

    if (!$connection) {
        die("Could not connect database" . mysqli_connect_error());
    }
