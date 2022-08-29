<?php
session_start();
    if(!isset($_SESSION['Email']))
    {
        $_SESSION['no-login-message'] = "<div class='error'>Vui lòng đăng nhập trước khi vào</div>";

        header("location:".'http://localhost/my_sqlit/login.php');
    }
?>
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
$ten =" ";
$phone = " ";
$Email = " ";
$ngay = " ";
$thoigian = " ";
$khach = " ";
$loinhan =" ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST["ten"])) { $ten = $_POST['ten']; }
	if(isset($_POST["phone"])) { $phone = $_POST['phone']; }
	if(isset($_POST["Email"])) { $Email = $_POST['Email']; }
	if(isset($_POST["ngay"])) { $ngay =$_POST['ngay']; }
	if(isset($_POST["gio"]) && isset($_POST["phut"])) { $thoigian = $_POST['gio'].':'.$_POST['phut'];}
	if(isset($_POST["khach"])) { $khach =$_POST['khach']; }
	if(isset($_POST["loinhan"])) { $loinhan = $_POST['loinhan']; }
//Code xử lý, insert dữ liệu vào table
$sql = "INSERT INTO admin_datban(ten, phone, Email, ngay, thoigian, khach, loinhan)
VALUES ('$ten', '$phone', '$Email', '$ngay','$thoigian','$khach','$loinhan')";
    if ($connect->query($sql) === TRUE) {
        header('Location:'.'http://localhost/my_sqlit/index.php');
 } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
		header('Location:'.'http://localhost/my_sqlit/datban.php');
 }
}
//Đóng database
    $connect->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="css/test.css" rel="stylesheet" type="text/css">
    <link  href="index.php" rel="stylesheet" type="text/html">
    <title>Signup</title>
</head>
<body>
    
   
   

</body>
</html>
<!DOCTYPE html>
<head>
	<title>NHÀ QUÊ</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
    <title>login</title>
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php"><img class="logo" src="images/logo1.png" width="433" height="84" alt="" title=""></a>
			<a href="index.php"><img  src="images/waitress.png" width="332" height="205" alt="" title=""></a>
			<ul class="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="CacMonThit.php">Thực đơn</a>
				</li>
				<li>
					<a href="contact.php">Liên hệ</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
				<li>
					<a href="blog.php">Đặt Bàn</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
<img src="images/comque.jpg" width="100%" height="360" alt=""></a></center><span style="font-family: Times New Roman">
		<div class="featured"> <a href="CacMonThit.php">
			<h2>Chào mừng đến với NHÀ QUÊ</h2></span>
			<p>
				
</a><span style="font-family: Times New Roman"><span style="font-size: 24px">
	Chẳng cần phải là người sành ăn, bất cứ ai cũng có thể chọn cho mình những quán ăn “ruột” để thưởng thức những món ăn khoái khẩu, ngon miệng và hấp dẫn.<br></br>

	Trong danh sách địa chỉ ẩm thực của tôi, NHÀ HÀNG "Nhà QUÊ" luôn là một điểm đến yêu thích và không thể bỏ qua mỗi khi có dịp.
	Dù mới đi vào hoạt động hơn 1 tháng qua nhưng nơi đây đã là một địa chỉ lý tưởng để thưởng thức các đặc sản rừng, hải sản tươi ngon nhất.	
</span></span>
		<center><a href="index.php"><img src="images/index2.jpg" width="480" height="360" alt=""></a></center>
			<br><span style="font-size: 24px">
	Mặc dù nằm trong khu vực có nhiều nhà hàng, quán ăn lớn, nổi tiếng nhưng "NHÀ QUÊ" lúc nào cũng đông khách, điều này cho thấy quán không chỉ làm hài lòng người thưởng thức mỗi lần ghé đến mà còn nhận được sự ủng hộ, tin tưởng và đồng hành của quý khách hàng trong suốt chặng đường phát triển của mình.</br>
	<br>Đến với "NHÀ QUÊ", bạn sẽ thật ấn tượng với không gian vô cùng rộng rãi và thoáng mát nơi đây. Ngoài không gian rộng lớn phía trước,"NHÀ QUÊ" còn có khu sân vườn mát rượi cùng hệ thống phòng vip có sức chứa từ 10 đến 100 thực khách. Tuy quán lúc nào cũng đông khách nhưng bạn cũng không quá khó để chọn cho mình một vị trí thích hợp để thưởng thức các món ăn vô cùng hấp dẫn mang hương vị và thương hiệu riêng của "NHÀ QUÊ".</br>
</span><center><a href="index.php"><img src="images/index3.jpg" width="480" height="360" alt=""></a></center><br><span style="color: red">
				<h1>CÁC CỘT MỐC PHÁT TRIỂN NHÀ HÀNG ĐẦU TIÊN TẠI CÁC TỈNH THÀNH</h1></span><br></br>
			▶Tháng 12/1997 - TP.HCM<br></br>
    		▶Tháng 06/2006 - Hà Nội<br></br>
    		▶Tháng 08/2006 - NHA TRANG - KHÁNH HÒA<br></br>
    		
			<center><a href="index.php"><img src="images/index4.jpg" width="480" height="360" alt=""></a></center><br></br>
			<br><span style="font-size: 24px">Hương vị độc đáo, phong cách phục vụ thân thiện, hết lòng vì khách hàng và bầu không khí nồng nhiệt, ấm cúng tại các nhà hàng là ba chìa khóa chính mở cánh cửa thành công của NHÀ QUÊ cũng như trên thế giới. NHÀ QUÊ đã tạo nên một nét văn hóa ẩm thực mới và đóng góp to lớn vào sự phát triển của ngành công nghiệp thức ăn tại Việt Nam.</br></span><br><center>
			<!--<iframe width="560" height="315" src="https://www.youtube.com/embed/VU4Hpj_CeUM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			-->	<div><span style="font-family: Times New Roman"><b>Vì tình hình dịch bệnh khách hàng có thể đặt món trực tiếp qua Discord</b></span></div>
			<iframe src="https://discordapp.com/widget?id=320049591653498881&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
</center></br>
			</p>
			<ul>
				<li>
					<a href="CacMonThit.php"><img src="images/thit.jpg" width="284" height="214" alt=""></a>
				</li>
				<li>
					<a href="HaiSan.php"><img src="images/haisan.jpg" alt="" width="284" height="214"></a>
				</li>
				<li>
					<a href="ThucUong.php"><img src="images/bia.jpg" alt="" width="284" height="214"></a>
				</li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<div>
			<ul>
				<li class="first">
					<h2>Hotline</h2>
					<h3>Điện thoại: (+84) 335575561</h3>
					<ul>
						<li>
							<a href=https://www.facebook.com/profile.php?id=100014203038239" class="facebook"></a>
						</li>
						<li>
							<a href="http://www.twitter.com" class="twitter"></a>
						</li>
						<li>
							<a href="https://www.youtube.com/user/KFCVietnam2011" class="googleplus"></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="index.php"><img class="logo" src="images/logo1.png" width="200" height="64" alt="" title=""></a>
					<ul class="navigation">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.php">About Us</a>
						</li>
						<li>
							<a href="menu.html">Menu</a>
						</li>
						<li>
							<a href="contact.php">Liên hệ</a>
						</li>
					</ul>
					<span>&copy; Copyright © 2021 NHÀ QUÊ</span>
				</li>
				<li class="last">
					<h2>Theo dõi chúng tôi</h2>
					<form action="index.php">
						<input type="text" name="subscribe" value="Nhập email của bạn ở đây ...">
						<input type="submit" value="">
					</form>
				</li>
			</ul>
		</div>
	</div>
	<div class="modal">
		<div class="modal__overlay1"></div>
		<div class="modal__body1">
			<div class="modal__inner1">
				<div class="datban">
					<div class="title">
                    <h2 class="datban-header">ĐẶT BÀN ONLINE</h2>
					<span class="title">(Vui lòng đặt bàn trước giờ dùng bữa ít nhất 1 tiếng)</span>            
					</div>
					<div class="grid">    
                         <form class="datban-container" method="POST">
                             <input type="text" placeholder="Họ tên(*):" name="ten"><br>
							 <br>
							 <div class="index">
                             <input type="text" placeholder="Điện thoại di động(*):" name="phone" >
                             <input type="email" placeholder="Email" name="Email" required=""><br>
							</div>
							<br>
							 <input type="text" placeholder="Ngày đặt bàn(*):" name="ngay">
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
									<br>
							<br>		
                             <input type="text" placeholder="Số lượng khách(*):" name="khach"><br>
							<br> 
							 <input type="text" placeholder="Lời nhắn yêu cầu đặt bàn" name="loinhan"><br>
                            <br>
							 <input type="submit" value="ĐẶT BÀN" name="submit">
                         </form>
                     </div>
                </div>
            </div>
        </div>
</body>
</html>
