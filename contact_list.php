<?php

    require "connection.php";
    
    $sql = "SELECT * FROM messages";
    $result = mysqli_query($connection, $sql);
    if (!$result) {
        $notification = "<h3>An unexpected error occured!</h3>" . mysqli_error($connection);
    }
