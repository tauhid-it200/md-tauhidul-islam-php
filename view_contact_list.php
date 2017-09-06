<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CONTACT LIST</title>
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
                    <br/>
                    <div class="col-1 info_header_height"></div>
                    <div class="col-10 info_header_height info_header">
                        <p class="">Contact List</p>
                    </div>
                    <div class="col-1 info_header_height"></div>
                    <div class="col-1 info_content"></div>
                    <div class="col-10 info_content">
                        <?php require "contact_list.php"; ?>
                        <table class="contact_list">
                            <tbody>
                                <tr class="table_row">
                                    <th class="table_column">Name</th>
                                    <th class="table_column">Email</th>
                                    <th class="table_column">Message</th>
                                </tr>
                                <?php if (mysqli_num_rows($result) > 0) { ?>
                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr class="table_row">
                                    <td class="table_column"><?php echo $row ["name"]; ?></td>
                                    <td class="table_column"><?php echo $row ["email"]; ?></td>
                                    <td class="table_column"><?php echo $row ["message"]; ?></td>
                                </tr>
                                <?php } } else {
                                    echo "<h3>No data available</h3>";
                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-1 info_content"></div>
                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>
    </body>
</html>

