<?php include('./includes/headerAdminAccount.php'); ?>
<div class="form-container">

    <form action="" method="post">
        <h3>Đăng Nhập</h3>
        <input type="email" name="email" required placeholder="Nhập đầy đủ email" class="box">
        <input type="password" name="password" required placeholder="Nhập đầy đủ mật khẩu" class="box">
        <input type="submit" name="submit" class="btn" value="Đăng Nhập">
        <p>Bạn chưa có tài khoản? <a href="register.php">Đăng kí</a></p>
    </form>

</div>
<?php include('./includes/footerAdminAccount.php'); ?>