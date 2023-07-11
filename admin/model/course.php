<?php include('../includes/headerAdmin.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Danh Sách Sản Phẩm
                    <a href="./courseCreate.php" class="btn btn-primary float-end">Thêm Sản Phẩm</a>
                </h4>
            </div>

            <div class="card-body">
                <table class="table ">
                    <thead>
                        <tr class="font-weight-bolder">
                            <td>ID</td>
                            <td>Tên Khóa Học</td>
                            <td>Hình Ảnh</td>
                            <td>Giá</td>
                            <td>Mô Tả</td>
                            <td>Tùy Chọn</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kiến Thức Nên Tảng</td>
                            <td>
                                <img src="../assets//images/1.png" alt="" width="100px">
                            </td>
                            <td>100.000VNĐ</td>
                            <td>Để có cái nhìn tổng quan về ngành IT - Lập trình web</td>
                            <td class="d-flex justify-content-evenly">
                                <a href="./courseUpdate.php" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="code.php" method="post">
                                    <button type="submit" class="btn btn-danger btn-sm" name="deleteProduct" value=""><i class="fas fa-trash-alt"></i>
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