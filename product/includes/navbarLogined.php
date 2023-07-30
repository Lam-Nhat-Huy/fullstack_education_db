<!-- Phần header  -->
<header>
    <div class="header_logo">
        <a href="" class="header_logo-link">
            Fullstack
        </a>
    </div>
    <nav>
        <ul class="nav_list mt-3">
            <li class="nav_list-item">
                <a href="../indexLogined.php" class="nav_list-link">Trang Chủ</a>
            </li>
            <li class="nav_list-item">
                <a href="#" class="nav_list-link">Khóa Học</a>
            </li>
            <li class="nav_list-item">
                <a href="#" class="nav_list-link">Hỗ Trợ</a>
            </li>
            <li class="nav_list-item">
                <a href="#" class="nav_list-link">Liên Hệ</a>
            </li>
        </ul>
    </nav>
    <div class="login">
        <!-- Button trigger modal -->
        <a type="button" class="cart" data-bs-toggle="modal" data-bs-target="#cartModal">
            Khóa Học Của Tôi
        </a>

        <!-- Modal -->
        <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width: 628px;">
                    <div class=" modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Khóa Học Của Tôi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="shopping-cart">
                            <table class="table">
                                <thead>
                                    <td>Tên Khóa Học</td>
                                    <td>Hình Ảnh</td>
                                    <td>Giá</td>
                                    <td>Xóa</td>
                                </thead>

                                <tbody>
                                    <?php
                                    $course_query = mysqli_query($conn, "SELECT * FROM course_list WHERE course_id='$user_id'");
                                    if (mysqli_num_rows($course_query) > 0) {
                                        while ($fetch_course = mysqli_fetch_array($course_query)) {
                                    ?>
                                            <tr>
                                                <td class="td-item">
                                                    <?= $fetch_course['name'] ?>
                                                </td>
                                                <td class="td-item">
                                                    <img src="../../admin/assets/uploads/<?= $fetch_course['image'] ?>" alt="" width="120">
                                                </td>
                                                <td class="td-item" style="color: #fa8c16;">
                                                    <?= $fetch_course['price'] ?>VNĐ
                                                </td>
                                                <td class="td-item">
                                                    <form action="./code.php" method="post">
                                                        <button onclick="return confirm('Bạn có chắc chắn muốn xóa? ')" type="submit" name="deleteCourse" value="<?= $fetch_course['id'] ?>">
                                                            <span><i class="fa fa-times"></i></span>
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
                    <div class="modal-footer">
                        <a href="../../product/payment.php" class="btn btn-outline-danger"><i class="fa fa-credit-card"></i> Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="info">
            <?php
            $select_name = mysqli_query($conn, "SELECT * FROM users WHERE id = '$user_id'");
            if (mysqli_num_rows($select_name) > 0) {
                $fetch_user = mysqli_fetch_assoc($select_name);
            }
            ?>
            <span class="info-user"><?php echo $fetch_user['name'] ?></span>
        </div>
        <div class="logout">
            <a href="./index.php" onclick="return confirm('Bạn có chắc chắn muốn đăng xuất? ')" class="cart">Đăng Xuất</a>
        </div>
    </div>



</header>