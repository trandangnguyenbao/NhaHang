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
					<a class="active" href="blog.php">Blog</a>
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
		<div id="section">
			<div class="section">
				<div>
					<div>
						<a href=""><img src="images/3miengcathanh.jpg" width="169" height="163" alt=""></a>
						<h2><a href="blog.php">So Good</a></h2>
						<h3>Posted by <a href="#">Tôi yêu Nhà Quê</a> in</h3>
						<a href="blog.php"><span>ngon</span></a> <a href="blog.php"><span>ngon,</span></a> <a href="blog.php"><span>ngon</span></a>
						<p>
							Món ăn ở đây ngon
						</p>
						<a href="blog.php" class="price">Jan <span>31st</span></a>
					</div>
				</div>
			</div>
			<div class="section">
				<div>
					<div>
						<a href=""><img src="images/haisan.jpg" width="169" height="163" alt=""></a>
						<h2><a href="blog.php">love day</a></h2>
						<h3>Posted by Sheila in</h3>
						<a href="blog.php"><span>Promos,</span></a> <a href="blog.php"><span>Weekends,</span></a> <a href="blog.php"><span>Breakfast</span></a>
						<p>
							No to say !!!
						</p>
						<a href="blog.php" class="price">Feb <span>1st</span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="sidebar">
			<h1>Recent Posts</h1>
			<ul>
				<li class="first">
					<a href="blog.php">All You Can Eat Breakfast Everyday</a>
				</li>
				<li>
					<a href="blog.php">Love Day Buy 2 Large Shakes Get 1 Free</a>
				</li>
				<li>
					<a href="blog.php">Super Duper Burger New Year With Free Extra Topping</a>
				</li>
				<li>
					<a href="blog.php">Free Membership Card From Star Roller Skates</a>
				</li>
				<li>
					<a href="blog.php">Free Retro Diner Tumbler For Every Burger Special Order</a>
				</li>
			</ul>
			<h1>Categories</h1>
			<ul>
				<li class="first">
					<a href="blog.php">Promos</a>
				</li>
				<li>
					<a href="blog.php">Weekends</a>
				</li>
				<li>
					<a href="blog.php">Breakfast</a>
				</li>
				<li>
					<a href="blog.php">Events</a>
				</li>
				<li>
					<a href="blog.php">Valentines</a>
				</li>
				<li>
					<a href="blog.php">Christmas</a>
				</li>
				<li class="last">
					<a href="blog.php">2021</a>
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