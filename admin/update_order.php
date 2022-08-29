<?php include('partials/menu.php');?>
<div class="main-content">
    <div class="wrapper">
                <div class="datban">
					<div class="title">
                    <h2 class="datban-header">UPDATE ĐẶT BÀN ONLINE</h2>
					<span class="title">(Vui lòng đặt bàn trước giờ dùng bữa ít nhất 1 tiếng)</span>            
					</div>
					<div class="grid">
                    <form class="datban-container" method="POST">
                             <input type="text" placeholder="Họ tên(*):" name="ten"><br>
							 <br>
							 <div class="index">
                             <input type="text" placeholder="Điện thoại di động(*):" name="phone" >
                             <input type="email" placeholder="Email" name="Email" required="" style="margin-left: 20px; width: 400px;"><br>
							</div>
							<br>
							 <input type="text" placeholder="Ngày đặt bàn(*):" name="ngay" style="width: 750px;">
                             <!--
                             <select name="gio">
                                <option value="7 giờ">7 giờ</option>
                                <option value="8 giờ">8 giờ</option>
                                <option value="9 giờ">9 giờ</option>
                                <option value="10 giờ">10 giờ</option>
								<option value="11 giờ">11 giờ</option>
                                <option value="12 giờ">12 giờ</option>
								<option value="13 giờ">13 giờ</option>
                                <option value="14 giờ">14 giờ</option>
								<option value="15 giờ">15 giờ</option>
                                <option value="16 giờ">16 giờ</option>
								<option value="17 giờ">17 giờ</option>
                                <option value="18 giờ">18 giờ</option>
								<option value="19 giờ">19 giờ</option>
                                <option value="20 giờ">20 giờ</option>
								<option value="21 giờ">21 giờ</option>
                                <option value="22 giờ">22 giờ</option>
								<option value="23 giờ">23 giờ</option>
                                </select>
								<select name="phut">
									<option value="00 phút">00 phút</option>
									<option value="05 phút">05 phút</option>
									<option value="10 phút">10 phút</option>
									<option value="15 phút">15 phút</option>
									<option value="20 phút">20 phút</option>
									<option value="25 phút">25 phút</option>
									<option value="30 phút">30 phút</option>
									<option value="35 phút">35 phút</option>
									<option value="40 phút">40 phút</option>
									<option value="45 phút">45 phút</option>
									<option value="50 phút">50 phút</option>
									<option value="55 phút">55 phút</option>
									</select>	
--><br>
							<br>		
                             <input type="text" placeholder="Số lượng khách(*):" name="khach"><br>
							<br> 
							 <input type="text" placeholder="Lời nhắn yêu cầu đặt bàn" name="loinhan"><br>
                            <br>
							 <input type="submit" value="ĐẶT BÀN" name="update" style="margin-left: 40%;margin-top: 5%;height: 50px;width: 150px;background-color: black;color:burlywood;font-size: 20px;border-radius: 10px;">
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
}
if (isset($_POST['update'])){
    $id=$_GET['id_order'];
    $ten=$_POST['ten'];
    $phone=$_POST['phone'];
    $Email=$_POST['Email'];
    $ngay=$_POST['ngay'];
    $khach = $_POST['khach']; 
    $loinhan = $_POST['loinhan'];    
    // Check connection
    $sql = "UPDATE admin_datban SET ten='$ten', phone='$phone' , Email='$Email' , ngay='$ngay',khach='$khach', loinhan='$loinhan' WHERE id_order=$id";
    $query = mysqli_query($connect,$sql);
    if($query == TRUE){
        //$_SESSION['update'] = "Update Order Successfully!";
        header("location:manage-order.php");
    } 
    else{
        //$_SESSION['update'] = "Update Order to Failed!";
        header("location:".'http://localhost/my_sqlit/admin/update_order.php');
    }
    $connect->close();
    }
?>
<?php include('partials/footer.php');?>