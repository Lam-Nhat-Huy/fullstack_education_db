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
                <?php
                $course_id = mysqli_real_escape_string($conn, $_GET['id']);
                $query = "SELECT * FROM courses WHERE id = $course_id";
                $sql = mysqli_query($conn, $query);

                while ($select_course = mysqli_fetch_array($sql)) {
                ?>
                    <form action="code.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="course_id" value="<?= $select_course['id'] ?>">
                        <div class="mb-3">
                            <label for="">Name: </label>
                            <input type="text" class="form-control" name="name" value="<?= $select_course['name'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="">Hình Ảnh: </label>
                            <input type="file" class="form-control" name="image" value="<?= $select_course['image'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="">Giá: </label>
                            <input type="text" class="form-control" name="price" value="<?= $select_course['price'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="">Mô tả: </label>
                            <input type="text" class="form-control" name="description" value="<?= $select_course['description'] ?>">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="updateCourse" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>

                <?php
                }

                ?>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('../includes/footerAdmin.php'); ?>