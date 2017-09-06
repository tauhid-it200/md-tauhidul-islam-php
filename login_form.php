<?php

    session_start();

    $submit = filter_input(INPUT_POST, "submit");

    if (isset ($submit)) {
        $username = filter_input(INPUT_POST, "username");
        $password = filter_input(INPUT_POST, "password");

        if ($username == "tauhid") {
            if ($password == "12341234") {
                $_SESSION ["logged_in"] = true;
                $_SESSION ["message"] = "<h2>You have successfully logged in!</h2>";
                header("Location: index.php");
            } else {
                $_SESSION ["message"] = "<h3>Invalid Password!</h3>";
                header("Location: login.php");
            }
        } elseif ($username != "tauhid" && $password != "12341234") {
            $_SESSION ["message"] = "<h3>Invalid Username & Password!</h3>";
            header("Location: login.php");
        } else {
            $_SESSION ["message"] = "<h3>Invalid Username!</h3>";
            header("Location: login.php");
        }
    }
    
    