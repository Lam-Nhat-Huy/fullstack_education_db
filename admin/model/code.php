
<?php
include('../../config/functions.php');

// Thêm người dùng

if (isset($_POST['saveUser'])) {
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $role = validate($_POST['role']);
    if (!empty($name) && !empty($phone) && !empty($email) && !empty($password)) {
        $query_user = mysqli_query($conn, "INSERT INTO users (name, phone, email, password, role) VALUES ('$name', '$phone', '$email', '$password', '$role')");
        redirect('user.php', 'Bạn đã thêm người dùng thành công');
    } else {
        redirect('user.php', 'Bạn đã thêm người dùng không thành công');
    }
}

// Chỉnh sửa thông tin người dùng

if (isset($_POST['updateUser'])) {
    $user_id = validate($_POST['user_id']);
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $role = validate($_POST['role']);
    $phone = validate($_POST['phone']);
    $query_user = mysqli_query($conn, "UPDATE users SET name='$name', email='$email', role='$role', phone='$phone' WHERE id='$user_id'");
    if ($query_user) {
        redirect('user.php', 'Bạn đã chỉnh sửa người dùng thành công');
    }
}

// Xóa người dùng

if (isset($_POST['deleteUser'])) {
    $user_id = validate($_POST['deleteUser']);
    $query = "DELETE FROM users WHERE id = $user_id";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        redirect('user.php', 'Bạn đã xóa khóa học thành công');
    }
}

// Thêm khóa học

if (isset($_POST['addCourse'])) {
    $name = validate($_POST['name']);
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $price = validate($_POST['price']);
    $description = validate($_POST['description']);

    $targetDirectory = "../assets/uploads/"; // Thay đổi đường dẫn tùy theo thư mục lưu trữ của bạn
    $targetPath = $targetDirectory . $image;
    move_uploaded_file($image_tmp, $targetPath);

    if (!empty($name) or !empty($image) or !empty($price) or !empty($description)) {
        $query_course = mysqli_query($conn, "INSERT INTO courses (name, image, price, description) VALUES ('$name', '$image', '$price', '$description')");
        redirect('course.php', 'Bạn đã thêm khóa học thành công');
    } else {
        redirect('course.php', 'Bạn đã thêm khóa học không thành công');
    }
}

// Chỉnh sửa thông tin khóa học

if (isset($_POST['updateCourse'])) {
    $course_id = validate($_POST['course_id']);
    $name = validate($_POST['name']);
    $image = validate($_POST['image']);
    $price = validate($_POST['price']);
    $description = validate($_POST['description']);
    $query_course = mysqli_query($conn, "UPDATE courses SET name='$name',image='$image', price='$price', description='$description'  WHERE id= $course_id");
    if ($query_course) {
        redirect('course.php', 'Bạn đã chỉnh sửa khóa học thành công');
    }
}

// Xóa khóa học

if (isset($_POST['deleteCourse'])) {
    $course_id = mysqli_real_escape_string($conn, $_POST['deleteCourse']);

    $query = "SELECT image FROM courses WHERE id = $course_id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $imagePath = $row['image'];

    $query = "DELETE FROM courses WHERE id = $course_id";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        redirect('course.php', 'Bạn đã xóa khóa học thành công');
    }
}

?>