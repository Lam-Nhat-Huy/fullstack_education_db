<?php include('../includes/headerAdmin.php'); ?>

<!-- Dùng để hiển hiện thông tin user của từng tài khoản đăng nhập  -->
<div class="row">
    <?php
    $select_user = mysqli_query($conn, "SELECT * FROM `admin` WHERE id = '$user_id'");
    if (mysqli_num_rows($select_user) > 0) {
        $fetch_user = mysqli_fetch_assoc($select_user);
    };
    ?>
    <div class="info d-flex">
        <p style="margin-right: 10px;">Tên người dùng: <strong><?php echo $fetch_user['name'] ?></strong></p>
        <p>Tài khoản: <strong><?php echo $fetch_user['email'] ?></strong></p>
    </div>

</div>

<div class="row">
    <?php
    $sql = mysqli_query($conn, "SELECT * FROM users");
    if (mysqli_num_rows($sql) > 0) {
        $countUsers = mysqli_num_rows($sql);
    }
    ?>
    <div class="card shadow-lg">
        <div class="card-header">
            <h4>Bảng Điều Khiển</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Tài khoản hiện có là: </h5>
            <p class="card-text">
            <h5><strong><?php echo $countUsers; ?></strong></h5>
            </p>
            <a href="./user.php " class="btn btn-primary">Kiểm tra</a>
        </div>
    </div>
</div>

<div class="row mt-5">
    <?php
    $sql = mysqli_query($conn, "SELECT * FROM courses");
    if (mysqli_num_rows($sql) > 0) {
        $countUsers = mysqli_num_rows($sql);
    }
    ?>
    <div class="card shadow-lg">
        <div class="card-header">
            <h4>Bảng Điều Khiển</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Số lượng khóa học: </h5>
            <p class="card-text">
            <h5><strong><?php echo $countUsers; ?></strong></h5>
            </p>
            <a href="./course.php " class="btn btn-primary">Kiểm tra</a>
        </div>
    </div>
</div>

<?php include('../includes/footerAdmin.php'); ?>x