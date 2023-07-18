<?php
include('../../config/functions.php');

// Thêm người dùng

if (isset($_POST['saveUser'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    if (!empty($name) or !empty($phone) or !empty($email) or !empty($password)) {
        $query_user = mysqli_query($conn, "INSERT INTO users (name, phone, email, password, role) VALUES ('$name', '$phone', '$email', '$password', '$role')");
        redirect('user.php', 'Bạn đã thêm người dùng thành công');
    }
}


// Chỉnh sửa người dùng

if (isset($_POST['updateUser'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $query_user = mysqli_query($conn, "UPDATE users SET name='$name', email='$email', role='$role', phone='$phone' WHERE id='$user_id'");
    if ($query_user) {
        redirect('user.php', 'Bạn đã chỉnh sửa người dùng thành công');
    }
}

// Xóa khóa học

if (isset($_POST['deleteUser'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['deleteUser']);
    $query = "DELETE FROM users WHERE id = $user_id";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        redirect('user.php', 'Bạn đã xóa khóa học thành công');
    }
}


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
        redirect('course.php', 'Bạn đã thêm khóa học thành công');
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
        redirect('course.php', 'Bạn đã chỉnh sửa khóa học thành công');
    }
}

// Xóa khóa học

if (isset($_POST['deleteCourse'])) {
    $course_id = mysqli_real_escape_string($conn, $_POST['deleteCourse']);
    $query = "DELETE FROM courses WHERE id = $course_id";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        redirect('course.php', 'Bạn đã xóa khóa học thành công');
    }
}
