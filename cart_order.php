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
				if(isset($_POST['themgiohang'])){
					$giatien = $_POST['giatien'];
					$tenmonhang = $_POST['tenmonhang'];
					$soluong = $_POST['soluong'];
					$tongtien = $giatien * $soluong;
					$id_user = "";
					$sql1 = "SELECT id_user FROM user";
	            	$ket_qua =  $connect->query($sql1);
					$row = $ket_qua->fetch_array(MYSQLI_ASSOC);
					$id_user = $row['id_user'];
					$sql2 = "SELECT * FROM cart_order WHERE tenmonhang = '$tenmonhang'";
					$ketqua1 = $connect->query($sql2);
					$rows = $ketqua1->fetch_array(MYSQLI_ASSOC);
					if($rows ==  0){
						$sql = "insert into cart_order(id_user,tenmonhang,soluong,giatien,tongtien)
						values ('$id_user','$tenmonhang', '$soluong', '$giatien', '$tongtien')";
						$res = $connect->query($sql);
						if($res == TRUE){
							$_SESSION['order'] = "<div class='success text-center'>Đơn hàng đã được đặt thành công.</div>";
							header('location:cart_order.php');
						}
					}
					else{
						$soluong = $soluong + $rows['soluong'];
						$tongtien = $tongtien + $rows['tongtien'];
						$sql = "update cart_order set id_user = '$id_user',tenmonhang = '$tenmonhang' ,soluong = '$soluong', giatien = '$giatien', tongtien = '$tongtien' where tenmonhang = '$tenmonhang'";
						$res = $connect->query($sql);
						if($res == TRUE){
							$_SESSION['order'] = "<div class='success text-center'>Đơn hàng đã được đặt thành công.</div>";
							header('location:cart_order.php');
						}
					}
					}
				$connect->close();
			?>  


<!DOCTYPE html>
<head>
	<title>NHÀ QUÊ</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/admin.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="header">
	<?php
							if (isset($_SESSION['login'])){
								echo $_SESSION['login'];
								unset($_SESSION['login']);
							}
							if(isset($_SESSION['no-login-message'])){
								echo $_SESSION['no-login-message'];
								unset($_SESSION['no-login-message']);
							}
						?>
		<div>
			<a href="index.php"><img class="logo" src="images/logo1.png" width="433" height="84" alt="" title=""></a>
			<a href="index.php"><img  src="images/waitress.png" width="332" height="205" alt="" title=""></a>
			<ul class="navigation">
				<li>
					<a  href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a  href="CacMonThit.php">Thực đơn</a>
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
					<a class="active" href="cart_order.php"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
				</li>
			</ul>
	</div>
	</div>
	<div class="main-content">
        <div class="wrapper">
            <h1 style="text-align: center;">ĐƠN HÀNG</h1>
        <table class="tbl-full" style="margin-top: 40px; " >
            <tr>
                <th>STT</th>
                <th>TÊN SẢN PHẨM</th>
                <th>SỐ LƯỢNG</th>
                <th>ĐƠN GIÁ(VNĐ)</th>
                <th>TỔNG GIÁ</th>
                <th>XOÁ</th>
            </tr>
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
				$result=mysqli_query($conn, 'SELECT COUNT(id_cart) as total FROM cart_order');
                $row = mysqli_fetch_assoc($result);
                $total_records = $row['total'];


                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 5;


                $total_page = ceil($total_records / $limit);

                if ($current_page > $total_page){
                    $current_page = $total_page;
                }
                else if ($current_page < 1){
                    $current_page = 1;
                }
                
                $start = ($current_page - 1) * $limit;
                

                $result = mysqli_query($conn, "SELECT * FROM cart_order LIMIT $start, $limit");
                $i=0;
				$thanhtien = 0;
                while ($row = mysqli_fetch_assoc($result)){              
				$i++;		
				$thanhtien = $thanhtien + $row['tongtien'];
                                ?>
  		        <tr>
                <td style="text-align: center;"><?php echo $i ?></td>
                <td style="text-align: center;"><?php echo $row['tenmonhang'] ?></td>
                <td style="text-align: center;"><?php echo $row['soluong'] ?></td>
                <td style="text-align: center;"><?php echo $row['giatien'].".000" ?></td>
                <td style="text-align: center;"><?php echo $row['tongtien'].".000" ?></td>
                
  		        
                  <td  style="text-align: center;">
                    <a href="delete_cart.php?id_cart=<?php echo $row['id_cart']?>" class="btn-danger">Xoá</a>
                </td>
                </tr>
  		<?php }
        ?>
            </table>
            </table>     
            <?php
                        if ($current_page > 1 && $total_page > 1){
                    echo '<button style = "height:30px;width:30px; background-color:white; color:black;"><a href="cart_order.php?page='.($current_page-1).'" style = "font-size:20px; color:black;text-decoration: none;font-weight: bolder;"><</a><button> ';
                }

                for ($i = 1; $i <= $total_page; $i++){

                    if ($i == $current_page){
                        echo '<button style = "height:30px;width:30px; background-color:white; color:black;font-weight: bolder;"><span>'.$i.'</span></button>';
                    }
                    else{
                        echo '<button style = "height:30px;width:30px; background-color:white; color:black;font-weight: bolder;"><a href="cart_order.php?page='.$i.'" style = "font-size:20px; color:black;text-decoration: none;" >'.$i.'</a> </button> ';
                    }
                }

                if ($current_page < $total_page && $total_page > 1){
                    echo '<button style = "height:30px;width:30px; background-color:white; color:black; font-weight: bolder;"><a href="cart_order.php?page='.($current_page+1).'" style = "font-size:20px; color:black;text-decoration: none;">></a></button> ';
                }

                ?>
        <div class="bill" style="height: 85px;">
            <p style="margin-left: 888px;">Tổng cộng(chưa có VAT): <?php echo $thanhtien.'.000 VNĐ';?></p>
        </div>
        <div class="diachi">
            <h2 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: black;">THÔNG TIN ĐẶT HÀNG</h2>
            <form method="POST" action="dathang.php">
                <label for="">Địa Chỉ:</label>
                <input type="text" name="diachi"><br>
				<input type="hidden" name="thanhtien" value="<?php echo $thanhtien.'.000 VNĐ';?>">
                <input type="submit" placeholder="Đặt Hàng">
            </form>
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
							<a  href="index.php">Home</a>
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