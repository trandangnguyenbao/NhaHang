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
					<a class="active" href="about.php">About</a>
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
		<div id="content">
			<div>
				<div>
					<h1>About</h1>
					<center><a href="index.php"><img class="logo" src="images/logo1.png" width="513" height="84" alt="" title=""></a></center>
					<ul>
						<li>
							<h2><a href="about.php">NHÀ HÀNG NHÀ QUÊ</a></h2>
							<p>
								Chẳng cần phải là người sành ăn, bất cứ ai cũng có thể chọn cho mình những quán ăn “ruột” để thưởng thức những món ăn khoái khẩu, ngon miệng và hấp dẫn.
							</p>
							<center><a href="index.php"><img class="logo" src="images/about1.jpg" width="513" height="225" alt="" title=""></a></center>
						</li>
						<li>
							<h2><a href="about.php">NHÀ QUÊ</a></h2>
							<p>
								Trong danh sách địa chỉ ẩm thực của tôi, "NHÀ QUÊ" luôn là một điểm đến yêu thích và không thể bỏ qua mỗi khi có dịp.
								Dù mới đi vào hoạt động hơn 1 tháng qua nhưng nơi đây đã là một địa chỉ lý tưởng để thưởng thức các đặc sản rừng, hải sản tươi ngon nhất.<br></br>
								Một năm sau đó cậu đã thành thạo một vài món ăn địa phương. Trong suốt 30 năm sau, Sanders đã trải qua rất nhiều công việc  khác nhau, từ người điều khiển giao thông đến nhân viên đại lý bảo hiểm, nhưng trong suốt thời gian này, trình độ nấu ăn của ông vẫn không hề thay đổi.
							</p>
						</li>
						<li>
							<h2><a href="about.php">Vào mùa dịch thực hiên giãn cách xã hội</a></h2>
							<p>
								Mặc dù nằm trong khu vực có nhiều nhà hàng, quán ăn lớn, nổi tiếng nhưng "NHÀ QUÊ" lúc nào cũng đông khách, điều này cho thấy quán không chỉ làm hài lòng người thưởng thức mỗi lần ghé đến mà còn nhận được sự ủng hộ, tin tưởng và đồng hành của quý khách hàng trong suốt chặng đường phát triển của mình.
							</p>
						</li>
						<center><a href="index.php"><img class="logo" src="images/abou3.jpg" width="513" height="225" alt="" title=""></a></center>
						<li>
							<h2>Năm 2020</h2>
							<p>

								Là địa chỉ quen thuộc nên dường như tôi đã thưởng thức được khá nhiều các món ăn nơi đây. Mỗi lần đến với "NHÀ QUÊ" là tôi đều chọn cho mình các món mới để có dịp khám phá và cảm nhận hương vị ẩm thực đa dạng của "NHÀ QUÊ".								<br></br>
								<br></br>
								Có rất nhiều các món ăn trong thực đơn phong phú, nhưng khi đến với "NHÀ QUÊ" bạn sẽ không thể bỏ qua các món ăn như: bò nhập ngoại, hải sản ,cầy hương. Mà nếu bạn đã được thưởng thức một lần thì chắc chắn bạn sẽ không thể nào quên được hương vị của mỗi món ăn mà "NHÀ QUÊ" mang lại. Ngoài màu sắc bắt mắt, lôi cuốn, vị ngọt của các món ăn thì bạn còn cảm nhận được vị vừa béo, vừa ngọt , vị mằn mặn, đậm đà của các món hải sản và đồ rừng.
							</p>
							<p>
								<center><a href="index.php"><img class="logo" src="images/about4.jpg" width="513" height="225" alt="" title=""></a></center>
								"NHÀ QUÊ" có Một không gian thoáng đãng, rợp bóng cây xanh, bạn có thể vừa ăn, vừa thư giãn và đón những làn gió mát lành từ ngoài sông thổi vào, bạn sẽ thấy thật thoải mái và cảm thấy ngon miệng hơn rất nhiều. Không những thế, nơi đây còn là khu vực thích hợp để tổ chức các bữa ăn liên hoan, sinh nhật và họp mặt bạn bè. Tuy nhiên, nếu bạn muốn một không gian riêng tư, không quá ồn ào thì hệ thống phòng vip cũng được đầu tư đầy đủ các trang thiết bị để phục vụ nhu cầu đa dạng của quý thực khách.<br></br>
								Không chỉ thu hút thực khách bằng các món ẩm thực thơm ngon khoái khẩu, "NHÀ QUÊ" còn chinh phục thực khách bằng sự thân thiện, gần gũi và chuyên nghiệp của đội ngũ nhân viên lễ tân và phục vụ. Mặc dù đông khách, nhưng với số lượng lớn nhân viên phục vụ, quý khách sẽ không phải đợi chờ quá lâu là món ăn nóng hổi, thơm phức đã được mang lên.





							</p>
							<p>
								<center><a href="index.php"><img class="logo" src="images/about2.jpg" width="513" height="225" alt="" title=""></a></center>
								Nào hãy đến "NHÀ QUÊ" để khám phá cũng như cảm nhận hương vị riêng của các món đặc sản rừng và hải sản và đánh dấu vào danh sách địa chỉ ẩm thực yêu thích của mình các bạn nhé!

							</p>
						</li>
					</ul>
				</div>
			</div>
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