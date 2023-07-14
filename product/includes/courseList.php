<div class="container course-list d-flex justify-content-evenly flex-wrap mt-5">
    <?php
    $quert_course = mysqli_query($conn, "SELECT * FROM courses ");
    if (mysqli_num_rows($quert_course) > 0) {
        while ($fetch_course = mysqli_fetch_assoc($quert_course)) {
    ?>
            <div class="card-product mb-5">
                <div class="card-img">
                    <img src="./assets/img/<?= $fetch_course['image'] ?>" alt="">
                </div>
                <div class="card-info">
                    <p class="text-title"><?= $fetch_course['name'] ?></p>
                    <p class="text-body"><?= $fetch_course['description'] ?></p>
                </div>
                <div class="card-footer">
                    <span class="text-title"><?= $fetch_course['price'] ?></span>
                    <div class="card-button">
                        <button class="btn btn-primary">Lưu Khóa Học</button>
                    </div>
                </div>
            </div>
    <?php
        }
    }



    ?>

</div>