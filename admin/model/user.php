<?php include('../includes/headerAdmin.php'); ?>
<!-- Dùng để hiển hiện thông tin user của từng tài khoản đăng nhập  -->
<div class="row">
    <?php
    $select_user = mysqli_query($conn, "SELECT * FROM `admin` WHERE id = '$user_id'");
    if (mysqli_num_rows($select_user) > 0) {
        $fetch_user = mysqli_fetch_assoc($select_user);
    };
    ?>
    <div class="info d-flex justify-content-center">
        <p style="margin-right: 10px;">Tên người dùng: <strong class="info-admin"><?php echo $fetch_user['name'] ?></strong></p>
        <p>Tài khoản: <strong class="info-admin"><?php echo $fetch_user['email'] ?></strong></p>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Tài Khoản Của Tôi
                    <a href="./userCreate.php" class="btn btn-primary float-end">Thêm Người Dùng</a>
                </h4>
            </div>

            <div class="card-body">
                <?php
                $select_user = mysqli_query($conn, "SELECT *  FROM users");
                if (mysqli_num_rows($select_user) > 0) {
                ?><h3>Sẽ sớm ra mắt !!!!</h3><?php
                                            }
                                                ?>
            </div>

        </div>
    </div>
</div>

<?php include('../includes/footerAdmin.php'); ?>