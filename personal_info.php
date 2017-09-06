<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PERSONAL INFO</title>
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
                    <div class="col-3 profile_header">

                    </div>
                    <div class="col-6 profile_header">
                        <p class="profile_name"><b>MD. TAUHIDUL ISLAM</b></p>
                        <p class="profile_phone"><b>Phone: </b>+880-1798-017587</p>
                        <p class="profile_phone"><b>Email: </b>tauhid.resume@gmail.com</p>
                    </div>
                    <div class="col-3 profile_header">
                        <img src="img/tauhidul_islam.jpg" alt="" class="propic"/>
                    </div>
                    <div class="col-1 info_header_height"></div>
                    <div class="col-10 info_header_height info_header">
                        <p class="">Personal Info</p>
                    </div>
                    <div class="col-1 info_header_height"></div>
                    <div class="col-1 info_content"></div>
                    <div class="col-10 info_content">
                        <table class="info_table">
                            <tbody>
                                <tr>
                                    <td class="table_header"><b>Father's Name</b></td>
                                    <td class="table_content">A. T. M. Nuruzzaman</td>
                                </tr>
                                <tr>
                                    <td class="table_header"><b>Mother's Name</b></td>
                                    <td class="table_content">Hosneara Begum</td>
                                </tr>
                                <tr>
                                    <td class="table_header"><b>Date of Birth</b></td>
                                    <td class="table_content">November 06, 1992</td>
                                </tr>
                                <tr>
                                    <td class="table_header"><b>Gender</b></td>
                                    <td class="table_content">Male</td>
                                </tr>
                                <tr>
                                    <td class="table_header"><b>Nationality</b></td>
                                    <td class="table_content">Bangladeshi</td>
                                </tr>
                                <tr>
                                    <td class="table_header"><b>Religion</b></td>
                                    <td class="table_content">Islam</td>
                                </tr>
                                <tr>
                                    <td class="table_header"><b>Languages</b></td>
                                    <td class="table_content">English, Bangla (Native)</td>
                                </tr>
                                <tr>
                                    <td class="table_header"><b>Marital Status</b></td>
                                    <td class="table_content">Unmarried</td>
                                </tr>
                                <tr>
                                    <td class="table_header"><b>Hobbies</b></td>
                                    <td class="table_content">Cricket, Chess</td>
                                </tr>
                                <tr>
                                    <td class="table_header"><b>National ID</b></td>
                                    <td class="table_content">19936715879001280</td>
                                </tr>
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

