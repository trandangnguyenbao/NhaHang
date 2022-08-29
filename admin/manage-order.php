<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <a href="manage-order.php" style="text-decoration: none;"><h1>Manage Reservations</h1></a>
        <a href="manage_donhang.php" style="text-decoration: none; margin-left: 960px; display: block;"><h1>Manage Order Food</h1></a>
        <br><br>
            <table class="tbl-full">
                <tr>
                    <th style="text-align: left;">ID</th>
                    <th>Tên</th>
                    <th>SĐT</th>
                    <th>Email</th>
                    <th>Ngày</th>
                    <th>Thời Gian</th>
                    <th>Số Lượng</th>
                    
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

                $result=mysqli_query($conn, 'SELECT COUNT(id_order) as total FROM admin_datban');
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
                

                $result = mysqli_query($conn, "SELECT * FROM admin_datban LIMIT $start, $limit");
                $i=0;
                while ($row = mysqli_fetch_assoc($result)){
                                $i++;			
  		        ?>
  		        <tr>
                <td><?php echo $i ?></td>
                <td style="text-align: center;"><?php echo $row['ten'] ?></td>
                <td style="text-align: center;"><?php echo $row['phone'] ?></td>
                <td style="text-align: center;"><?php echo $row['Email'] ?></td>
                <td style="text-align: center;"><?php echo $row['ngay'] ?></td>
                <td style="text-align: center;"><?php echo $row['thoigian'] ?></td>
                <td style="text-align: center;"><?php echo $row['khach'] ?></td>
                
                <td>
                    <a href="../admin/update_order.php?id_order=<?php echo $row['id_order']?>" class="btn-secondary">Sửa</a>
                    <a href="../admin/delete_order.php?id_order=<?php echo $row['id_order']?>" class="btn-danger">Xoá</a>
                </td>
  		        </tr>
  		<?php }  ?>
            </table>
            <?php
                        if ($current_page > 1 && $total_page > 1){
                    echo '<button style = "height:30px;width:30px; background-color:white; color:black;"><a href="manage-order.php?page='.($current_page-1).'" style = "font-size:20px; color:black;text-decoration: none;font-weight: bolder;"><</a><button> ';
                }

                for ($i = 1; $i <= $total_page; $i++){

                    if ($i == $current_page){
                        echo '<button style = "height:30px;width:30px; background-color:white; color:black;font-weight: bolder;"><span>'.$i.'</span></button>';
                    }
                    else{
                        echo '<button style = "height:30px;width:30px; background-color:white; color:black;font-weight: bolder;"><a href="manage-order.php?page='.$i.'" style = "font-size:20px; color:black;text-decoration: none;" >'.$i.'</a> </button> ';
                    }
                }

                if ($current_page < $total_page && $total_page > 1){
                    echo '<button style = "height:30px;width:30px; background-color:white; color:black; font-weight: bolder;"><a href="manage-order.php?page='.($current_page+1).'" style = "font-size:20px; color:black;text-decoration: none;">></a></button> ';
                }

                ?>

</div>
            </div>

<?php include('partials/footer.php')?>