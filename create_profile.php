<?php

ob_start();

@include 'db/conn.php';

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create profile</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="profile">
        <div class="flex">
            <div class="inputbox">
                <span>Enter your full name:</span>
                <span>Enter your location:</span>
                <span>Enter Email:</span>
                <span>Enter Your contact number:</span>
                <span></span>
            </div>
        </div>
    </div>
</body>
</html>