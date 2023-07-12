<?php
include('../../config/functions.php');

if (isset($_POST['addCourse'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    $image = mysqli_real_escape_string($conn, $_FILES['image']['name']);
    $image_tmp = mysqli_real_escape_string($conn, $_FILES['image']['tmp_name']);

    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    if (!empty($name) or !empty($image) or !empty($price) or !empty($description)) {
        $query_course = mysqli_query($conn, "INSERT INTO courses (name, image, price, description) VALUES ('$name', '$image', '$price', '$description')");
        move_uploaded_file($image_tmp, '../assets/images/' . $img);
        header('Location: course.php');
    }
}
