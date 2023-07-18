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
                <!-- thông báo  -->
                <?= alertMessage(); ?>
                <table class="table ">
                    <thead>
                        <tr class="font-weight-bolder">
                            <td>ID</td>
                            <td>Tên người dùng</td>
                            <td>Email</td>
                            <td>Vai trò</td>
                            <td>Điện thoại</td>
                            <td>Tùy Chọn</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query_user = mysqli_query($conn, "SELECT * FROM users");
                        if (mysqli_num_rows($query_user) >  0) {
                            while ($fetch_user = mysqli_fetch_assoc($query_user)) {
                        ?>
                                <tr>
                                    <td><?= $fetch_user['id'] ?></td>
                                    <td><?= $fetch_user['name'] ?></td>
                                    <td><?= $fetch_user['email'] ?></td>
                                    <td><?= $fetch_user['role'] ?></td>
                                    <td><?= $fetch_user['phone'] ?></td>
                                    <td class="d-flex justify-content-evenly">
                                        <a href="./userUpdate.php?id=<?= $fetch_user['id'] ?>" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                        <form action="code.php" method="post">
                                            <button type="submit" class="btn btn-danger btn-sm" name="deleteUser" value="<?= $fetch_user['id'] ?>"><i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('../includes/footerAdmin.php'); ?>