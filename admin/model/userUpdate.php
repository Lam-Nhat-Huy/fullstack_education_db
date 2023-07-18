<?php include('../includes/headerAdmin.php'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit User
                    <a href="./user.php" class="btn btn-danger float-end">Trở Về</a>
                </h4>
            </div>
            <div class="card-body">
                <?php
                $user_id = mysqli_real_escape_string($conn, $_GET['id']);
                $query = "SELECT * FROM users WHERE id = $user_id";
                $sql = mysqli_query($conn, $query);

                while ($select_user = mysqli_fetch_array($sql)) {
                ?>
                    <form action="code.php" method="post">
                        <input type="hidden" name="user_id" value="<?= $select_user['id'] ?>">
                        <div class="mb-3">
                            <label for="">Họ Và Tên: </label>
                            <input type="text" class="form-control" name="name" value="<?= $select_user['name'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="">Email: </label>
                            <input type="email" class="form-control" name="email" value=" <?= $select_user['email'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="">Vai Trò</label>
                            <input type="text" class="form-control" name="role" value="<?= $select_user['role'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="">Điện Thoại: </label>
                            <input type="text" class="form-control" name="phone" value="<?= $select_user['phone'] ?> ">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="updateUser" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include('../includes/footerAdmin.php'); ?>