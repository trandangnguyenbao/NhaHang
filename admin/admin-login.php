<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="main-content">
    <div class="wrapper">
        <div class="login">
					<h2 class="login-header">Login</h2>
					<div class="grid">
						<?php
							if (isset($_SESSION['login'])){
								echo $_SESSION['login'];
								unset($_SESSION['login']);
							}
							if(isset($_SESSION['no-login-message'])){
								echo $_SESSION['no-login-message'];
								unset($_SESSION['no-login-message']);
							}
						?>
					<form class="login-container"method="POST">
						<input type="email" name="Email" required="">
						<input type="password"  name="password" required="">
						<a href="manageadmin.php"><input type="submit" value="Submit" name="submit"></a>
					</form>
		<div class="second-section">
			<div class="bottom-header">
				<h3>OR</h3>
			</div>
		
			<div class="social-links">
				<ul>
					<!--facebook-->
					<li><a class="facebook" href="https://www.facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
		
					<!-- twitter -->
						<li> <a class="twitter" href="https://twitter.com/login?lang=vi"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
		
					<!-- google-->
						<li> <a class="google" href="https://www.google.com/?hl=vi"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
						<div class="bottom-text bottomtext">
							<h4 class="bottom-text"> <a href="#">Forgot your password?</a></h4>
						</div>
					</div>
				</div>
</div>
</div>
</body>
</html>
<?php
	session_start();
    $server_username = "root";
    $server_password = "";
    $server_host = "localhost";
    $database = 'user';
    
    $conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
    mysqli_query($conn,"SET NAMES 'UTF8'");
    if (isset($_POST["submit"])) {
		// lấy thông tin người dùng
		$Email = $_POST["Email"];
		$password = $_POST["password"];
		$Email = strip_tags($Email);
		$Email = addslashes($Email);
		$password = strip_tags($password);
		$password = addslashes($password);
			$sql = "select * from admin where Email = '$Email' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			
			if($num_rows ==1){
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['Email'] = $Email;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header("Location:".'http://localhost/my_sqlit/admin/index.php');
			}
		}
?>