<?php
session_start();
    if(!isset($_SESSION['Email']))
    {
        $_SESSION['no-login-message'] = "<div class='error'>Vui lòng đăng nhập trước khi vào</div>";

        header("location:".'http://localhost/my_sqlit/login.php');
    }
?>
<!DOCTYPE html>
<head>
	<title>NHÀ QUÊ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
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
					<a class="active" href="CacMonThit.php">Thực đơn</a>
				</li>
				<li>
					<a href="contact.php">Liên hệ</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
				<li>
					<a href="datban.php">Đặt Bàn</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
				<li>
					<a href="cart_order.php"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
<img src="images/comque.jpg" width="100%" height="360" alt=""></a></center><span style="font-family: Times New Roman">
<br><br><br><br>
	<div class="body__item">
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
						$id=$_GET['id'];
						$sql = "SELECT * FROM admin_category where id = $id";
						$ket_qua =  $connect->query($sql);
							  $i=0;
						  while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
						  $i++;
					?>
        <div class="image">
		<img src="admin/partials/images/<?php echo $row['hinhanh']  ?>" width="434" height="327">
        </div>
        <div class="Title">
            <h2><?php echo $row['tensp']?> </h2>
            <ul class="Title1">
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<span>(1 đánh giá)</span>
            </ul>
			
			<ul class="Title2">
				<h2><?php echo $row['giasanpham'].'.000'?><sup>đ</sup></h2>
				<p><del>100.000<sup>đ</sup></del></p>
				<p class="tk">Tiết kiệm:-21%(21.000đ)</p> 
			</ul>
			<p style="color:#8A2908; font-weight: bolder; margin-top: -15px; margin-bottom: 30px;"><?php echo $row['noidung']?></p>
			<ul class="Title3">
				<br><br>
				<h3>SỐ LƯỢNG MÓN</h3>
				<form method="POST" action="cart_order.php?id=<?php echo $row['id']?>" enctype="multipart/form-data">
					<input style="width: 50px; margin-left: 5px; text-align: center;" type="number" value="1" min="1" id="num" name="soluong">
					<!--<input type="hidden" name="id_user" value="">-->
					<input type="hidden" name="tenmonhang" value="<?php echo $row['tensp']?>">
					<input type="hidden" name="giatien" value="<?php echo $row['giasanpham']?>">
					<br><br>
					<input style="margin-left:-120px; font-family:  'Courier New', Courier, monospace;height: 35px;width: 85px;border-radius: 5px;border-color:teal ;background-color: #822619;font-family: 'ArchivoMedium', Helvetica,Arial,'DejaVu Sans','Liberation Sans',Freesans,sans-serif;font-size: 15px;font-weight: bolder;color: wheat;" type="submit" name="themgiohang" value="Đặt Món" class="button">
				</form>			
			</ul>
			<ul class="inner">
				<h2 class="share">CHIA SẺ:</h2>
				<i class="fa fa-facebook-square" aria-hidden="true" id="fb"></i>
				<i class="fa fa-pinterest" aria-hidden="true" id="pt"></i>
				<i class="fa fa-twitter-square" aria-hidden="true" id="tw"></i>
			</ul>
        </div>
	</div>
	<br><br><br><Br>
	<div class="danhgia">
		<button class="tt">THÔNG TIN</button>
		<button class="nx">NHẬN XÉT</button>
	</div>
	<div class="danhgia2">
		<span>Đặc điểm nổi bật của <B><?php echo $row['tensp']?></B></span>
	</div>
	<div class="danhgia1">
		<h1>NHẬN XÉT</h1>
		<div>
			<span>Nhận xét và đánh giá</span><br>
			<ul>
			<li><i class="fa fa-star" aria-hidden="true"></i></li>
			<li><i class="fa fa-star" aria-hidden="true"></i></li>
			<li><i class="fa fa-star" aria-hidden="true"></i></li>
			<li><i class="fa fa-star" aria-hidden="true"></i></li>
			<li><i class="fa fa-star" aria-hidden="true"></i></li>
			<li><button>Nhấn vào đây để đánh giá</button></li>
			</ul>
			<form action="">
				<input type="text" placeholder="Viết bình luận của bạn...." name="binhluan">
				<input type="text" placeholder="Họ tên (bắt buộc)" name="hoten">
				<br>
				<input type="text" placeholder="email" name="email"><br>
				<input type="submit" value="Gửi bình luận" name="gui">
			</form>
		</div>
		<ul class="dg1">
		<li><p>0 bình luận</p></li>
		<li><span>Sắp xếp theo</span></li>
		<li><select name="luachonsapxep" id="">
			<option value="moinhat">Mới Nhất</option>
            <option value="cunhat">Cũ Nhất</option>
		</select>
		</li>
		</ul>
		<div class="dg2">
		<div><i class="fa fa-user" aria-hidden="true"></i></div>
		<input type="text" placeholder="Thêm bình luận...">
		</div>
		<div class="dg3">
		<i class="fa fa-facebook-square" aria-hidden="true"></i>
		<span>Plugin bình luận trên FaceBook</span>
		</div>
	</div>
		<div class="featured">
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
							<a href="https://www.facebook.com/profile.php?id=100014203038239" class="facebook"></a>
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
	<?php }  ?>
	</div>
</body>
</html>