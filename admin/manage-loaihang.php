<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <div class="nav" style="display: inline-flex;">
        <h1>Manage Category</h1>
        <a href="add-loaihang.php" class="btn-primary " style="margin-left: 843px;">Thêm</a>
        </div>
        <br><br>  
            <table class="tbl-full">
                <tr>
                    <th>ID</th>
                    <th>Tên Loại Hàng</th>
                    <th>Mã Loại Hàng</th>
                    <th>Hình Ảnh</th>
                    <th>Action</th>
                </tr>
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
	            $sql = "SELECT * FROM admin_lh";
	            $ket_qua =  $connect->query($sql);
  			        $i=0;
  			    while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
  				$i++;		
  		        ?>
  		        <tr>
                <td><?php echo $i ?></td>
                <td style="text-align: center;"><?php echo $row['tenlh'] ?></td>
                <td style="text-align: center;"><?php echo $row['maLH'] ?></td>
                <td style="text-align: center;"><img src="../admin/partials/images/<?php echo $row['hinhanh']  ?>" width="200px"></td>
                <td style="text-align: center;">
                    <a href="../admin/update_loaihang.php?id=<?php echo $row['id']?>" class="btn-secondary">Sửa</a>
                    <a href="../admin/delete_loaihang.php?id=<?php echo $row['id']?>" class="btn-danger">Xoá</a>
                </td>
  		        </tr>
  		<?php }  ?>
            </table>
    </div>
</div>

<?php include('partials/footer.php')?>