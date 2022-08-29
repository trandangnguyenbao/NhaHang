<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <div class="login">
                    <h2 class="login-header">UPDATE Đơn Hàng</h2>
                     <div class="grid">  
                        <form class="login-container" action="" method="POST">
                        <table  class="tbl-30">
                        <tr>
                            <td>Tình Trạng</td>
                            <td><input type="text" name="tinhtrang" value="" ></td>
                        </tr>
                        <tr >
                            <td colspan="2"><input type="submit" name="update"  value="Update Đơn Hàng"></td>
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
    $id_donhang=$_GET['id_donhang'];
    $tinhtrang=$_POST['tinhtrang'];
    $sql = "UPDATE user_donhang SET tinhtrang='$tinhtrang'  WHERE id_donhang=$id_donhang";
    $query = mysqli_query($connect,$sql);
    if($query == TRUE){
        $_SESSION['update'] = "Update Đơn Hàng Successfully!";
        header("location:manage_donhang.php");
    } 
    else{
        $_SESSION['update'] = "Update Đơn Hàng to Failed!";
        header("location:manage_donhang.php");
    }
    $connect->close();
    }
?>
<?php include('partials/footer.php');?>