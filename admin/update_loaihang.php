<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">

        <div class="login">
                    <h2 class="login-header">UPDATE LOẠI HÀNG</h2>
                     <div class="grid">  
                        <form class="login-container" action="" method="POST" enctype="multipart/form-data">
                        <table  class="tbl-30">
                            <tr>
                                <td>Mã Loại Hàng</td>
                                <td><input type="text" name="maLH" value="" ></td>
                            </tr>
                            <tr>
                                <td>Tên Loại Hàng</td>
                                <td><input type="text" name="tenlh" value="" ></td>
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
    $maLH=$_POST['maLH'];
    $tenlh=$_POST['tenlh'];
    $hinhanh=$_POST['hinhanh'];
    $hinhanh = $_FILES['hinhanh']['name'];  
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name']; 
    $sql = "UPDATE admin_lh SET maLH='$maLH', tenlh='$tenlh' , hinhanh='$hinhanh' WHERE id=$id";
    move_uploaded_file($hinhanh_tmp, '../admin/partials/images/'.$hinhanh);
    $query = mysqli_query($connect,$sql);
    if($query == TRUE){
        header("location:manage-loaihang.php");
    } 
    else{
        header("location:update_loaihang.php");
    }
    $connect->close();
    }
?>
<?php include('partials/footer.php');?>