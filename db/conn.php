<?php

$conn = mysqli_connect('localhost', 'root', '', 'farmcust_db');

if (!$conn) {

  die('Could not connect: ' . mysqli_connect_error());
}

echo 'Connected successfully<br/>';