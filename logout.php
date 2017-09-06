<?php

    session_start();
    session_destroy();
    session_start();
    
    $_SESSION ["message"] = "<h2>You have successfully logged out!</h2>";
    
    header ("Location: login.php");
    