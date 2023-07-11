<?php include('../includes/headerAdmin.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Danh Sách Người Dùng
                    <a href="./userCreate.php" class="btn btn-primary float-end">Thêm Người Dùng</a>
                </h4>
            </div>

            <div class="card-body">
                <!-- thông báo  -->
                <table class="table ">
                    <thead>
                        <tr class="font-weight-bolder">
                            <td>ID</td>
                            <td>Họ Và Tên</td>
                            <td>Email</td>
                            <td>Điện Thoại</td>
                            <td>Vai Trò</td>
                            <td>Chức Năng</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lâm Nhật Huy</td>
                            <td>huylnpc05258@fpt.edu.vn</td>
                            <td>0393379824</td>
                            <td>Admin</td>
                            <td class="d-flex justify-content-evenly">
                                <a href="userUpdate.php" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="" method="post">
                                    <button type="submit" class="btn btn-danger btn-sm" name="deleteUser" value=""><i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<?php include('../includes/footerAdmin.php'); ?>