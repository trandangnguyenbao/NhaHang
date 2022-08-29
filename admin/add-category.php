<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>

        <div class="login">
                    <h2 class="login-header">Add Category</h2>
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
                                <td>Tên sản phẩm</td>
                                <td><input type="text" name="tensp" value=""></td>
                            </tr>
                            <tr>
                                <td>Mã sản phẩm</td>
                                <td><input type="text" name="masp" value="" ></td>

                            </tr>
                            <tr>
                                <td>Mã Loại Hàng</td>
                                <td><input type="text" name="maLH" value="" ></td>

                            </tr>
                            <tr>
                                <td>Giá</td>
                                <td><input type="text" name="giasanpham" value="" ></td>

                            </tr>
                            <tr>
                                <td>Số lượng</td>
                                <td><input type="text" name="soluong" value="" ></td>

                            </tr>
                            <tr>
                                <td>Hình ảnh</td>
                                <td><input type="file" name="hinhanh" value="" ></td>

                            </tr>
                            <tr>
                                <td>Tóm tắt</td>
                                <td><textarea rows="10" name="tomtat" style="width: 100%; resize: none; "></textarea></td>

                            </tr>
                            <tr>
                                <td>Nội dung</td>
                                <td><textarea rows="10" name = "noidung" style="width: 100%; resize: none;"></textarea></td>

                            </tr>
                            <tr >
                                <td colspan="2"><input type="submit" name="themdanhmuc"  value="Add Category"></td>
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
$tensp = "";
$masp = "";
$maLH = "";
$giasanpham = "";
$soluong = "";
$hinhanh = "";
$tomtat= "";
$noidung = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["tensp"])) { $tensp = $_POST['tensp']; }  
    if(isset($_POST["masp"])) { $masp = $_POST['masp']; }
    if(isset($_POST["maLH"])) { $maLH = $_POST['maLH']; } 
    if(isset($_POST["giasanpham"])) { $giasanpham = $_POST['giasanpham']; }
    if(isset($_POST["soluong"])) { $soluong = $_POST['soluong']; }
   
    if(isset($_POST["tomtat"])) { $tomtat = $_POST['tomtat']; }
    if(isset($_POST["noidung"])) { $noidung = $_POST['noidung']; }
    $hinhanh = $_FILES['hinhanh']['name'];  
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];  
    
 //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO admin_category(tensp, masp, maLH, giasanpham, soluong, hinhanh, tomtat, noidung)
            VALUES ('".$tensp."', '".$masp."','".$maLH."', '".$giasanpham."', '".$soluong."', '".$hinhanh."', '".$tomtat."', '".$noidung."')";
    move_uploaded_file($hinhanh_tmp, '../admin/partials/images/'.$hinhanh);
    if ($connect->query($sql) === TRUE) {
        header('Location:manage-category.php');
 } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
 }
}
//Đóng database
    $connect->close();
?>
<?php include('partials/footer.php')?>

