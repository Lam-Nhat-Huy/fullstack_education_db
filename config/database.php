<?php

$conn = mysqli_connect('localhost', 'root', 'kalosonits14', 'fullstack_education_db');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
