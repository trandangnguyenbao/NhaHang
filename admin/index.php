<?php include('partials/menu.php') ?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Danh Mục Quản Lý </h1>
    <br><br>
    <?php
		if (isset($_SESSION['login'])){
			echo $_SESSION['login'];
			unset($_SESSION['login']);
			}
	    ?>
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
        ?>
            <div class="col-4 text-center">
                <?php
                    $sql = "SELECT * FROM admin_category";

                    $res = mysqli_query($conn, $sql);

                    $count = mysqli_num_rows($res);
                ?>
                <h1><?php echo $count; ?></h1>
                Product
            </div>

            <div class="col-4 text-center">
            <?php
                    $sql = "SELECT * FROM admin_lh";

                    $res = mysqli_query($conn, $sql);

                    $count = mysqli_num_rows($res);
                ?>
                <h1><?php echo $count; ?></h1>
                Categories
            </div>

            <div class="col-4 text-center">
            <?php
                    $sql = "SELECT * FROM admin_datban";

                    $res = mysqli_query($conn, $sql);

                    $count = mysqli_num_rows($res);
                ?>
                <h1><?php echo $count; ?></h1>
                Đặt Bàn
            </div>

            <div class="col-4 text-center">
            <?php
                    $sql = "SELECT * FROM user_donhang";

                    $res = mysqli_query($conn, $sql);

                    $count = mysqli_num_rows($res);
                ?>
                <h1><?php echo $count; ?></h1>
                Đơn Hàng
            </div>

            <div class="col-4 text-center">
            <?php
                    $sql = "SELECT * FROM user";

                    $res = mysqli_query($conn, $sql);

                    $count = mysqli_num_rows($res);
                ?>
                <h1><?php echo $count; ?></h1>
                User
            </div>
            <div class="col-4 text-center">
            <?php
                    $sql = "SELECT * FROM admin_category Where maLH = '100'";

                    $res = mysqli_query($conn, $sql);

                    $count = mysqli_num_rows($res);
                ?>
                <h1><?php echo $count; ?></h1>
                Các Món Thịt
            </div>
            <div class="col-4 text-center">
            <?php
                    $sql = "SELECT * FROM admin_category Where maLH = '101'";

                    $res = mysqli_query($conn, $sql);

                    $count = mysqli_num_rows($res);
                ?>
                <h1><?php echo $count; ?></h1>
                Hải Sản
            </div>
            <div class="col-4 text-center">
            <?php
                    $sql = "SELECT * FROM admin_category Where maLH = '102'";

                    $res = mysqli_query($conn, $sql);

                    $count = mysqli_num_rows($res);
                ?>
                <h1><?php echo $count; ?></h1>
                Đồ Chay
            </div>
            <div class="col-4 text-center">
            <?php
                    $sql = "SELECT * FROM admin_category Where maLH = '103'";

                    $res = mysqli_query($conn, $sql);

                    $count = mysqli_num_rows($res);
                ?>
                <h1><?php echo $count; ?></h1>
                Thức Uống
            </div>
            <div class="col-4 text-center">
            <?php
                     $result = mysqli_query($conn, "SELECT * FROM user_donhang");
                     $i=0;
                     $Doanhthu = 0;
                     while ($row = mysqli_fetch_assoc($result)){              
                     $i++;		
                     $Doanhthu = $Doanhthu + $row['tongtien'];}
             ?>
                <h1><?php echo $Doanhthu; ?></h1>        
                Doanh Thu
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    
    </div>
<?php  include('partials/footer.php')?>