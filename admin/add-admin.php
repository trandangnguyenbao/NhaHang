<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <div class="login">
                    <h2 class="login-header">Signup</h2>            
                     <div class="grid">
						<?php
						if (isset($_SESSION['signin'])){
							echo $_SESSION['signin'];
                            unset($_SESSION['signin']);
						}
						?>    
                         <form class="login-container" action="" method="POST">
                             <input type="text" placeholder="Tên" name="lname">
                             <input type="text" placeholder="Họ và tên" name="fname" >
                             <input type="email" placeholder="Email" name="Email" required="">
                             <input type="password" placeholder="Mật khẩu" name="password">
                             <input type="password" placeholder="Nhập lại mật khẩu" name="repassword">
                             <input type="submit" value="Đăng ký" name="submit">
                         </form>
                     </div>
                </div>
    </div>
</div>

<?php include('partials/footer.php')?>

<!--Insert du lieu-->
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
    $fname = "";
    $lname = "";
    $password = "";
    $repassword = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["Email"])) { $Email = $_POST['Email']; }
        if(isset($_POST["fname"])) { $fname = $_POST['fname']; }
        if(isset($_POST["lname"])) { $lname = $_POST['lname']; }
        if(isset($_POST["password"])) { $password =$_POST['password']; }
        if(isset($_POST["repassword"])) { $repassword = $_POST['repassword']; }
    //Code xử lý, insert dữ liệu vào table
        if($password != $repassword){
            $_SESSION['signin'] = "Password nhập lại không chính xác!";
            header("location:".'http://localhost/my_sqlit/admin/manageadmin.php');
        }
        $sql = "select * from admin where Email = '$Email'";
			$query = mysqli_query($connect,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				$sql = "INSERT INTO admin (Email,fname,lname,password)
    VALUES ('$Email','$fname', '$lname', '$password')";
                if (mysqli_query($connect, $sql)) {
                    $_SESSION['signin'] = "Đăng Ký Thành Công!";
                    header("location:".'http://localhost/my_sqlit/admin/manageadmin.php');
                }
            }
            else{
                $_SESSION['signin'] = "Tài Khoản Đã Tồn Tại!";
                header("location:").'http://localhost/my_sqlit/admin/manageadmin.php';
            }      
    }
    //Đóng database
    mysqli_close($connect);
?>