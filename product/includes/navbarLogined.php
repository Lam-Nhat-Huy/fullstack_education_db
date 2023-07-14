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
                <a href="" class="nav_list-link">Trang Chủ</a>
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
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Khóa Học Của Tôi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="shopping-cart">
                            <table class="table">
                                <thead>
                                    <td>Tên Khóa Học</td>
                                    <td>Hình Ảnh</td>
                                    <td>Mô Tả</td>
                                    <td>Lựa Chọn</td>
                                </thead>

                                <tbody>

                                </tbody>


                            </table>
                        </div>
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
            <a href="./index.php" class="cart">Đăng Xuất</a>
        </div>
    </div>



</header>