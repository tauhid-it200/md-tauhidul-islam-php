<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MENU</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/custom.css"/>
    </head>
    <body>
        <div class="row">
            <div class="col-12 menu">
                <div class="col-4 menu"></div>
                <div class="col-4 menu">
                    <div class="col-3">
                        <a href="index.php" class="button">Home</a>
                    </div>
                    <div class="col-3 dropdown">
                        <a href="personal_info.php" class="dropbtn">About Me</a>
                        <div class="dropdown-content">
                            <a href="personal_info.php">Personal Info</a>
                            <a href="education.php">Education</a>
                            <a href="work.php">Work</a>
                        </div>
                    </div>
                    <div class="col-3">
                        <a href="contact.php" class="button">Contact Me</a>
                    </div>
                    <div class="col-3 dropdown">
                        <a href="login.php" class="dropbtn">Admin</a>
                        <?php if (isset ($_SESSION ["logged_in"])) { ?>
                        <div class="dropdown-content">
                            <a href="view_contact_list.php">Contact List</a>
                            <a href="logout.php">Log Out</a>
                        </div>
                        <?php } else { ?>
                        <div class="dropdown-content">
                            <a href="login.php">Login</a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-4 menu"></div>
            </div>
        </div>
    </body>
</html>
