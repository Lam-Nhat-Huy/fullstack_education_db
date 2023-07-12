<?php
include('../../config/functions.php');

// Thêm khóa học

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

// Chỉnh sửa thông tin khóa học

if (isset($_POST['updateCourse'])) {
    $course_id = mysqli_real_escape_string($conn, $_POST['course_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $query_course = mysqli_query($conn, "UPDATE courses SET name='$name',image='$image', price='$price', description='$description'  WHERE id= $course_id");
    if ($query_course) {
        header('Location: course.php');
    }
}
