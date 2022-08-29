<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Thêm Loại Sản Phẩm</h1>

        <div class="login">
                    <h2 class="login-header">ADD LOẠI HÀNG</h2>
                    <br><br>
                    <?php
                        if(isset($_SESSION['add'])){
                            echo $_SESSION['add'];
                            unset($_SESSION['add']);
                        }
                    ?>      
  
                     <div class="grid">  
                        <form class="login-container" action="" method="POST" enctype="multipart/form-data">
                        <table  class="tbl-30">
	
                            <tr>
                                <td>Mã Loại Sản Phẩm</td>
                                <td><input type="text" name="maLH" value=""></td>
                            </tr>
                            <tr>
                                <td>Tên Loại Sản Phẩm</td>
                                <td><input type="text" name="tenlh" value="" ></td>

                            </tr>
                            <tr>
                                <td>Hình ảnh</td>
                                <td><input type="file" name="hinhanh" value="" ></td>

                            </tr>
                            <tr >
                                <td colspan="2"><input type="submit" name="them"  value="ADD LOẠI HÀNG"></td>
                            </tr>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
</div>
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
}//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$tenlh = "";
$maLH = "";
$hinhanh = "";
//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["maLH"])) { $maLH = $_POST['maLH']; }  
    if(isset($_POST["tenlh"])) { $tenlh = $_POST['tenlh']; } 
    $hinhanh = $_FILES['hinhanh']['name'];  
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
   
 //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO admin_lh(maLH,tenlh,hinhanh)
            VALUES ('".$maLH."', '".$tenlh."', '".$hinhanh."')";
             move_uploaded_file($hinhanh_tmp, '../admin/partials/images/'.$hinhanh);
    if ($connect->query($sql) === TRUE) {
        header('Location:manage-loaihang.php');
 } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
 }
}
//Đóng database
    $connect->close();
?>
<?php include('partials/footer.php')?>

