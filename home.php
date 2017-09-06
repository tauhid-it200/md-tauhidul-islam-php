<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HOME</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/custom.css"/>
    </head>
    <body>
        <div class="wrapper">
            <?php include "header.php"; ?>
            <?php include "menu.php"; ?>
            <div class="row">
                <?php include "sidebar.php"; ?>
                <div class="col-10 content">
					
                    <h1>WELCOME HOME</h1>
                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>
    </body>
</html>
