<?php 
$username = "root"; // Khai báo username
$password = ""; // Khai báo password
$server = "localhost"; // Khai báo server
$dbname = "user"; // Khai báo database
// Kết nối database tintuc
$connect = new mysqli($server, $username, $password, $dbname);
//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
     die("Không kết nối :" . $conn->connect_error);
    exit();
}
if(isset($_GET['id_donhang'])){
	$id_donhang = $_GET['id_donhang'];
}
$sql = "DELETE FROM user_donhang WHERE id_donhang=$id_donhang";
if($connect->query($sql) == TRUE){
    header("location:manage_donhang.php");
}
else{
    echo "lỗi xáo dữ liệu".$connect->error;
}
$connect->close();
?>