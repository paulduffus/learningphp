<?php

require_once('connect_database.php');

$conn = new connect_database();

$users = $conn->fetchRows('SELECT * FROM `users`;');

var_dump($users);