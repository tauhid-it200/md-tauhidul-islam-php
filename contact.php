<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CONTACT ME</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/custom.css"/>
        <script src="js/custom.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <?php include "header.php"; ?>
            <?php include "menu.php"; ?>
            <div class="row">
            <?php include "sidebar.php"; ?>
                <div class="col-10 content">
                    <br/>
                    <div class="col-3 info_header_height"></div>
                    <div class="col-6 info_header_height info_header">
                        <p class="">Contact Me</p>
                    </div>
                    <div class="col-3 info_header_height"></div>
                    <div class="col-3 contact_header"></div>
                    <div class="col-6 contact_header">
                        <?php
                        if (isset($_SESSION ["message"])) {
                            echo $_SESSION ["message"];
                            unset($_SESSION ["message"]);
                        }
                        ?>
                        <form action="contact_form.php" name="contact_form" onSubmit="return validateMessage();" method="POST">
                            <input type="text" name="name" class="input_field" placeholder="Your Name"/>
                            <input type="text" name="email" class="input_field" placeholder="Your Email"/>
                            <textarea name="message" class="text_area" rows="8" placeholder="Your Message"></textarea>
                            <input type="submit" name="submit" class="submit_button" value="SEND"/>
                        </form>
                    </div>
                    <div class="col-3 contact_header"></div>
                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>
    </body>
</html>


