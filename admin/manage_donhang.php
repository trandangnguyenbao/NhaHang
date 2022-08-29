<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
    <a href="manage-order.php" style="text-decoration: none;"><h1>Manage Reservations</h1></a>
        <a href="manage_donhang.php" style="text-decoration: none; margin-left: 960px; display: block;"><h1>Manage Order Food</h1></a>
        <br><br>
            <table class="tbl-full">
                <tr>
                    <th style="text-align: left;">ID</th>
                    <th>Mã Đơn Hàng</th>
                    <th>Mã Khách Hàng</th>
                    <th>Tổng Tiền</th>
                    <th>Địa Chỉ</th>
                    <th>Tình Trạng</th>
                    <th>Action</th>
                </tr>
                <?php
                $username = "root"; // Khai báo username
                $password = ""; // Khai báo password
                $server = "localhost"; // Khai báo server
                $dbname = "user"; // Khai báo database
                // Kết nối database tintuc
                $conn = mysqli_connect($server, $username, $password, $dbname);
                if (!$conn) {
                    die("Không kết nối :" . mysqli_connect_error());
                    exit();
                }

                $result=mysqli_query($conn, 'SELECT COUNT(id_donhang) as total FROM user_donhang');
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
                

                $result = mysqli_query($conn, "SELECT * FROM user_donhang LIMIT $start, $limit");
                $i=0;
                while ($row = mysqli_fetch_assoc($result)){
                                $i++;			
  		        ?>
  		        <tr>
                <td><?php echo $i ?></td>
                <td style="text-align: center;"><?php echo $row['id_donhang'] ?></td>
                <td style="text-align: center;"><?php echo $row['id_user'] ?></td>
                <td style="text-align: center;"><?php echo $row['tongtien'] ?></td>
                <td style="text-align: center;"><?php echo $row['diachi'] ?></td>
                <td style="text-align: center;"><?php echo $row['tinhtrang'] ?></td>
                
                <td>
                    <a href="../admin/update_donhang.php?id_donhang=<?php echo $row['id_donhang']?>" class="btn-secondary">Sửa</a>
                    <a href="../admin/delete_donhang.php?id_donhang=<?php echo $row['id_donhang']?>" class="btn-danger">Xoá</a>
                </td>
  		        </tr>
  		<?php }  ?>
            </table>
            <?php
                        if ($current_page > 1 && $total_page > 1){
                    echo '<button style = "height:30px;width:30px; background-color:white; color:black;"><a href="manage_donhang.php?page='.($current_page-1).'" style = "font-size:20px; color:black;text-decoration: none;font-weight: bolder;"><</a><button> ';
                }

                for ($i = 1; $i <= $total_page; $i++){

                    if ($i == $current_page){
                        echo '<button style = "height:30px;width:30px; background-color:white; color:black;font-weight: bolder;"><span>'.$i.'</span></button>';
                    }
                    else{
                        echo '<button style = "height:30px;width:30px; background-color:white; color:black;font-weight: bolder;"><a href="manage_donhang.php?page='.$i.'" style = "font-size:20px; color:black;text-decoration: none;" >'.$i.'</a> </button> ';
                    }
                }

                if ($current_page < $total_page && $total_page > 1){
                    echo '<button style = "height:30px;width:30px; background-color:white; color:black; font-weight: bolder;"><a href="manage_donhang.php?page='.($current_page+1).'" style = "font-size:20px; color:black;text-decoration: none;">></a></button> ';
                }

                ?>

</div>
            </div>

<?php include('partials/footer.php')?>
