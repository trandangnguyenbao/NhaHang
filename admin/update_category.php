<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>UpDate Category</h1>

        <div class="login">
                    <h2 class="login-header">Update Category</h2>
                     <div class="grid">  
                        <form class="login-container" action="" method="POST" enctype="multipart/form-data">
                        <table  class="tbl-30">
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
                            <tr >
                                <td colspan="2"><input type="submit" name="update"  value="Update Category"></td>
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
$connect = mysqli_connect($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if (!$connect) {
    die("Không kết nối :" . mysqli_connect_error());
    exit();
}
if (isset($_POST['update'])){
    $id=$_GET['id'];
    $masp=$_POST['masp'];
    $maLH=$_POST['maLH'];
    $giasanpham=$_POST['giasanpham'];
    $soluong=$_POST['soluong'];
    $hinhanh=$_POST['hinhanh'];
    
    $hinhanh = $_FILES['hinhanh']['name'];  
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];  
    // Check connection
    $sql = "UPDATE admin_category SET giasanpham='$giasanpham' , masp='$masp' , maLH='$maLH' , soluong='$soluong' , hinhanh='$hinhanh'  WHERE id=$id";
    move_uploaded_file($hinhanh_tmp, '../admin/partials/images/'.$hinhanh);
    $query = mysqli_query($connect,$sql);
    if($query == TRUE){
        $_SESSION['update'] = "Update Category Successfully!";
        header("location:manage-category.php");
    } 
    else{
        $_SESSION['update'] = "Update Category to Failed!";
        header("location:manage-category.php");
    }
    $connect->close();
    }
?>
<?php include('partials/footer.php');?>