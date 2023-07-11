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

                <form action="" method="post">
                    <input type="hidden" name="user_id" value="">
                    <div class="mb-3">
                        <label for="">Họ Và Tên: </label>
                        <input type="text" class="form-control" name="name" value="">
                    </div>
                    <div class="mb-3">
                        <label for="">Điện Thoại: </label>
                        <input type="text" class="form-control" name="phone" value=" ">
                    </div>
                    <div class="mb-3">
                        <label for="">Email: </label>
                        <input type="email" class="form-control" name="email" value=" ">
                    </div>
                    <div class="mb-3">
                        <label for="">Vai Trò</label>
                        <input type="text" class="form-control" name="role" value="">

                    </div>
                    <div class="mb-3">
                        <button type="submit" name="updateUser" class="btn btn-primary">Lưu</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?php include('../includes/footerAdmin.php'); ?>