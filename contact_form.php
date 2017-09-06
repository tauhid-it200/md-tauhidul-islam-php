<?php

session_start();

require "connection.php";

$submit = filter_input(INPUT_POST, "submit");

if (isset($submit)) {
    $name = filter_input(INPUT_POST, "name");
    $email = filter_input(INPUT_POST, "email");
    $message = filter_input(INPUT_POST, "message");

    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
    $save = mysqli_query ($connection, $sql);
    if (!$save) {
        $_SESSION ["message"] = "<h2>Message could not be sent</h2>" . mysqli_error ($connection);
    } else {
        $_SESSION ["message"] = "<h2>Your message has been sent successfully!</h2>";
    }
    
    header ("Location: contact.php");
}
