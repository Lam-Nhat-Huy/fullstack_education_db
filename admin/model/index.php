<?php include('../includes/headerAdmin.php'); ?>

<div class="row">
    <!-- Dùng để hiển hiện thông tin user của từng tài khoản đăng nhập  -->
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
    <div class="card shadow-lg">
        <div class="card-header">
            <h4>Bảng Điều Khiển</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Tài khoản hiện có là: </h5>
            <p class="card-text">
            <h5><strong>100</strong></h5>
            </p>
            <a href="./user.php " class="btn btn-primary">Kiểm tra</a>
        </div>
    </div>
</div>


<div class="row mt-5">
    <div class="card shadow-lg">
        <div class="card-header">
            <h4>Bảng Điều Khiển</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Số lượng khóa học: </h5>
            <p class="card-text">
            <h5><strong>80</strong></h5>
            </p>
            <a href="./product.php " class="btn btn-primary">Kiểm tra</a>
        </div>
    </div>
</div>

<?php include('../includes/footerAdmin.php'); ?>x