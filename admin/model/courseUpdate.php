<?php include('../includes/headerAdmin.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Chỉnh Sửa Sản Phẩm
                    <a href="./course.php" class="btn btn-danger float-end">Trở Về</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="product_id" value="">
                    <div class="mb-3">
                        <label for="">Name: </label>
                        <input type="text" class="form-control" name="name" value="">
                    </div>
                    <div class="mb-3">
                        <label for="">Hình Ảnh: </label>
                        <input type="text" class="form-control" name="image" value="">
                    </div>
                    <div class="mb-3">
                        <label for="">Price: </label>
                        <input type="number" class="form-control" name="price" value="">
                    </div>
                    <div class="mb-3">
                        <label for="">Description: </label>
                        <input type="text" class="form-control" name="description" value="">
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="updateProduct" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('../includes/footerAdmin.php'); ?>