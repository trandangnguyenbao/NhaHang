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
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php"><img class="logo" src="images/logo1.png" width="433" height="84" alt="" title=""></a>
			<a href="index.php"><img src="images/waitress.png" width="332" height="205" alt="" title=""></a>
			<ul class="navigation">
				<li>
					<a  href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="CacMonThit.php">Thực đơn</a>
				</li>
				<li>
					<a class="active" href="contact.php">Liên hệ</a>
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
		<div class="content">
			<div>
				<div>
					<h1>Liên hệ</h1>
					<p>
						<span style="font-family: Times New Roman">

							Nhà hàng Nhà Quê Việt NAM<br />
							GIGAMALL, Tp Thủ Đức Việt Nam | Điện thoại: (+88) 335575561 <br />
							 Email: 19H1120095@sv.ut.edu.vn<br />
							Mã số thuế: 0100773885 | Ngày cấp: 29/10/1998 <br />
							Nơi cấp: Cục Thuế Thành Phố Hà Nội<br />
							Copyright © 2021 Nhà Quê
						</span>

					</p>
					<h4>Thắc mắc xin liên hệ bên dưới</h4>
					<form action="contact.php" method="POST" >
						<label for="name">
							<span class="text">Your Name:</span>
							<input type="text" name="name" id="name">
						</label>
						<label for="email">
							<span>Your E-mail:</span>
							<input type="text" name="email" id="email">
						</label>
						<label for="subject">
							<span>Subject:</span>
							<input type="text" name="subject" id="subject">
						</label>
						<label for="message">
							<span>Your Message:</span>
							<textarea name="message" id="message"></textarea>
						</label>
						<input type="submit" value="">
					</form>
				</div>
			</div>
		</div>
		<div class="sidebar">
			<h1>Mở cửa mỗi ngày</h1>
			<span>Bao gồm ngày nghỉ</span> <span>từ 6:00 sáng đến 24:00 </span>
			<a href="ThucUong.php" class="download">&nbsp;</a>
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
							<a href=https://www.facebook.com/profile.php?id =100014203038239" class="facebook"></a>
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
</body>
</html>