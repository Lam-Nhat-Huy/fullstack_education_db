<?php include('./includes/headerAdminAccount.php'); ?>
<div class="form-container" style="background-image: url('./images/background2.jpg');">

    <form action="codeAccountAdmin.php" method="post">
        <h3>Quên mật khẩu</h3>
        <input type="email" id="email" name="email" class="box" placeholder="Nhập email của bạn" required>
        <input type="submit" class="btn " name="forgetPassword" value="Gửi">
    </form>

</div>
<?php include('./includes/footerAdminAccount.php'); ?>