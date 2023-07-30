<?php include 'includes/headerLogined.php'; ?>


<div class="containers d-flex " style="margin-top: 79px;">
    <aside>
        <div class="loading">
            <?php
            $course_query = mysqli_query($conn, "SELECT * FROM course_list WHERE course_id='$user_id'");
            if (mysqli_num_rows($course_query) > 0) {
                $course_query = mysqli_num_rows($course_query);
            };
            ?>
            <h5 class="text-center">Đang chờ thanh toán: <strong style="color: #fa8c16;"><?= $course_query ?> khóa học</strong></h5>
        </div>

        <?php
        $course_query = mysqli_query($conn, "SELECT * FROM course_list WHERE course_id='$user_id'");
        if (mysqli_num_rows($course_query) > 0) {
            while ($fetch_course = mysqli_fetch_array($course_query)) {
        ?>
                <div class="line-bottom"></div>
                <div class="course-card d-flex">
                    <img src="../../admin/assets/uploads/<?= $fetch_course['image'] ?>" alt="" width="30%" class="mt-2 mb-2">
                    <div class="course-name">
                        <h6>Tên khóa học: <?= $fetch_course['name'] ?></h6>
                        <h6 class="price">Giá: <?= $fetch_course['price'] ?>VNĐ</h6>
                    </div>
                </div>
                <div class="line-bottom"></div>

        <?php
            }
        }
        ?>
        <div class="course_price">
            <h5 class="text-center">Chi tiết thanh toán</h5>
            <div class="course-price-total ">
                <?php
                $course_query = mysqli_query($conn, "SELECT * FROM course_list WHERE course_id='$user_id'");
                $fetch = mysqli_fetch_array($course_query);
                $count = mysqli_num_rows($course_query);
                $total = $count * $fetch['price'];
                ?>
                <h5>Tổng tiền: <span class="text-white h5 price-sum"><?= $total ?>VNĐ</span></h5>
            </div>
        </div>


    </aside>

    <article>
        <div class="atm-list">
            <div class="transfer-top">
                <h4 class="text-white">Chuyển khoản QR</h4>
                <div class="transfer d-flex">
                    <div class="qr-code">
                        <img src="./assets/img/qr.png" alt="" width="100">
                    </div>
                    <div class="transfer-list d-flex flex-column">
                        <span class="tranfer-item">Bước 1: Mở app ngân hàng hoặc Momo và quét mã QR.</span>
                        <span class="tranfer-item">Bước 2: Đảm bảo nội dung chuyển khoản là <span style="color: #fa8c16;">F8C1PU9H</span></span>
                        <span class="tranfer-item">Bước 3: Thực hiện thanh toán.</span>
                    </div>
                </div>
            </div>
            <div class="transfer-mid">
                <h4 class="text-white">Chuyển khoản thủ công</h4>
                <div class="pay-list">
                    <div class="pay-item">
                        <div class="transfer-item-info">
                            <h6 class="stk-heading">Số tài khoản: </h6>
                            <span class="stk">831234260804</span>
                        </div>
                        <div class="transfer-item-info ">
                            <h6 class="stk-heading">Nội dung: </h6>
                            <span class="stk" style="color: #fa8c16;">F8C1PU9H</span>
                        </div>
                    </div>

                    <div class="pay-item">
                        <div class="transfer-item-info">
                            <h6 class="stk-heading">Tên tài khoản: </h6>
                            <span class="stk">LAM NHAT HUY</span>
                        </div>
                        <div class="transfer-item-info ">
                            <h6 class="stk-heading">Ngân hàng: </h6>
                            <span class="stk">MB bank</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="transfer-bottom">
                <h4 class="text-white mt-1">Lưu ý</h4>
                <p class="text-white mb-4">Tối đa 5 phút sau thời gian chuyển khoản, nếu hệ thống không phản hồi vui lòng liên hệ ngay bộ phận hỗ trợ của F8.</p>
                <h4 class="text-white mt-1">Liên hệ</h4>
                <div class="contact-list d-flex flex-column">
                    <span class="text-white mb-3">Điện thoại: 0393379824</span>
                    <span class="text-white mb-3">Email: huylnpc05258@fpt.edu.vn</span>
                    <span class="text-white">Địa chỉ: số 323C Hàng Xoài Lê Bình Quận Cái Răng TP Cần Thơ</span>
                </div>
            </div>
        </div>

    </article>
</div>