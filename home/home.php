<?php

session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            background-image: url('../images/img.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        p {
            font-size: 33px;
            font-weight: 900;
            color: black;
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <div align='center' style="font-weight: bold;font-family:'Times New Roman', Times, serif"><br><br><br><br>
        <p>This is a Typhoon Courier Management Service</p>
        <h4>The fastest courier service of India</h4><br><br>

    </div>
</body>

</html>