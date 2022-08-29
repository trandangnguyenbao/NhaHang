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
		<div class="content">
			<div>
				<div>
					<h1>Hải sản các loại</h1>
					<?php
						$username = "root"; // Khai báo username
						$password = ""; // Khai báo password
						$server = "localhost"; // Khai báo server
						$dbname = "user"; // Khai báo database
						// Kết nối database tintuc
						$conn = mysqli_connect($server, $username, $password, $dbname);

                //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
                if (!$conn) {
                    die("Không kết nối :" . mysqli_connect_error());
                    exit();
                }

                $result=mysqli_query($conn, 'SELECT COUNT(maLH) as total FROM admin_category WHERE maLH = 101 ');
                $row = mysqli_fetch_assoc($result);
                $total_records = $row['total'];


                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 2;


                $total_page = ceil($total_records / $limit);

                if ($current_page > $total_page){
                    $current_page = $total_page;
                }
                else if ($current_page < 1){
                    $current_page = 1;
                }
                
                $start = ($current_page - 1) * $limit;
                

                $result = mysqli_query($conn, "SELECT * FROM admin_category WHERE maLH = '101' LIMIT $start, $limit");
                $i=0;
                while ($row = mysqli_fetch_assoc($result)){
                                $i++;		
                                ?>
					<div><img src="admin/partials/images/<?php echo $row['hinhanh']  ?>" width="434" height="327"></div>
					<ul>
						<li>
							<h2><a href="DoChay.php"><?php echo $row['tensp']?></a></h2>
							<p>
								<?php echo $row['noidung']?><br></br>
								<form  class="datmon" method="POST" action="cart_order.php?id=<?php echo $row['id']?>">
								<input type="hidden" value="1" min="1" id="num" name="soluong">
								<!--<input type="hidden" name="id_user" value="">-->
								<input type="hidden" name="tenmonhang" value="<?php echo $row['tensp']?>">
								<input type="hidden" name="giatien" value="<?php echo $row['giasanpham']?>">
								<input type="submit" name="themgiohang" value="" style="font-family: 'Courier New', Courier, monospace;height: 36px;width: 90px;border-radius: 5px;border-color:teal ;background-color: #822619;">
								</form>	
							<button class="specific" style="margin-top: -62px; margin-left: 105px; display: block;"><a href="chitiet.php?id=<?php echo $row['id']?>">CHI TIẾT</a></button>
							</p>
							<span class="price"><?php echo $row['giasanpham']?>K</span>
						</li>
                    </ul>
					<?php }  ?>
				</div>
			</div>
			<?php
                        if ($current_page > 1 && $total_page > 1){
                    echo '<button style = "height:30px;width:30px; background-color:white; color:black;"><a href="HaiSan.php?page='.($current_page-1).'" style = "font-size:20px; color:black;text-decoration: none;font-weight: bolder;"><</a><button> ';
                }

                for ($i = 1; $i <= $total_page; $i++){

                    if ($i == $current_page){
                        echo '<button style = "height:30px;width:30px; background-color:white; color:black;font-weight: bolder;"><span>'.$i.'</span></button>';
                    }
                    else{
                        echo '<button style = "height:30px;width:30px; background-color:white; color:black;font-weight: bolder;"><a href="HaiSan.php?page='.$i.'" style = "font-size:20px; color:black;text-decoration: none;" >'.$i.'</a> </button> ';
                    }
                }

                if ($current_page < $total_page && $total_page > 1){
                    echo '<button style = "height:30px;width:30px; background-color:white; color:black; font-weight: bolder;"><a href="HaiSan.php?page='.($current_page+1).'" style = "font-size:20px; color:black;text-decoration: none;">></a></button> ';
                }

                ?>
		</div>
		<div class="sidebar">
			<h1>Thực đơn</h1>
			<ul class="navigation">
				<li class="first">
					<a  href="CacMonThit.php">Các Món Thịt</a>
				</li>
				<li>
					<a class="active" href="HaiSan.php">Hải sản</a>
				</li>
				<li>
					<a href="DoChay.php">Đồ chay</a>
				</li>
				<li>
					<a href="ThucUong.php">Nước uống</a>
				</li>
			</ul>
			<a href="#" class="download">&nbsp;</a>
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