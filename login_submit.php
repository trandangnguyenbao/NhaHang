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
			$sql = "select * from user where Email = '$Email' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			
			if($num_rows ==1){
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['Email'] = $Email;
				$_SESSION['id_user'] = $id_user;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header("Location:".'http://localhost/my_sqlit/index.php');
			}
			else{
				header("Location:".'http://localhost/my_sqlit/login.php');
			}
		}
?>

