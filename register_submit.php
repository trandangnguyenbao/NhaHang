<?php
session_start();
$username = "root"; // Khai báo username
$password = ""; // Khai báo password
$server = "localhost"; // Khai báo server
$dbname = "user"; // Khai báo database
// Kết nối database tintuc
$connect = mysqli_connect($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if (!$connect) {
    die("Không kết nối :" . mysqli_connect_error());
    exit();
}
    $Email ="";
    $phone ="";
    $fname = "";
    $lname = "";
    $password = "";
    $repassword = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["Email"])) { $Email = $_POST['Email']; }
        if(isset($_POST["phone"])) { $phone = $_POST['phone']; }
        if(isset($_POST["fname"])) { $fname = $_POST['fname']; }
        if(isset($_POST["lname"])) { $lname = $_POST['lname']; }
        if(isset($_POST["password"])) { $password =$_POST['password']; }
        if(isset($_POST["repassword"])) { $repassword = $_POST['repassword']; }
    //Code xử lý, insert dữ liệu vào table
        if($password != $repassword){
            $_SESSION["thongbao"] = "Password nhập lại không chính xác!";
            header("location:signup.php");
        }
        $sql = "select * from user where Email = '$Email'";
			$query = mysqli_query($connect,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				$sql = "INSERT INTO user (Email,phone,fname,lname,password)
    VALUES ('$Email','$phone','$fname', '$lname', '$password')";
                if (mysqli_query($connect, $sql)) {
                    $_SESSION["thongbao"] = "Đăng Ký Thành Công!";
                    header("location:login.php");
                }
            }
            else{
                $_SESSION["thongbao"] = "Tài Khoản Đã Tồn Tại!";
                header("location:signup.php");
            }      
    }
    //Đóng database
    mysqli_close($connect);
?>