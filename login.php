<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LOGIN</title>
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
                        <p class="">Admin Login</p>
                    </div>
                    <div class="col-3 info_header_height"></div>
                    <div class="col-3 contact_header"></div>
                    <div class="col-6 contact_header">
			<?php if (isset ($_SESSION ["logged_in"])) {
                            echo "<h2>You are already logged in!</h2>";
			?>
			<?php } else { ?>
                        <?php if (isset ($_SESSION ["message"])) {
                            echo $_SESSION ["message"];
                            unset ($_SESSION ["message"]);
                        } ?>
                        <form action="login_form.php" name="login_form" onsubmit="return validateLogin();" method="POST">
                            <input type="text" name="username" class="input_field" placeholder="Username"/>
                            <input type="password" name="password" class="input_field" placeholder="Password"/>
                            <input type="submit" name="submit" class="submit_button" value="LOGIN"/>
                        </form>
			<?php } ?>
                    </div>
                    <div class="col-3 contact_header"></div>
                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>
    </body>
</html>

