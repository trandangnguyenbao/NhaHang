<?php
session_start();
    if(!isset($_SESSION['Email']))
    {
        $_SESSION['no-login-message'] = "<div class='error'>Vui lòng đăng nhập trước khi vào trang admin</div>";

        header("location:".'http://localhost/my_sqlit/admin/admin-login.php');
    }
?>