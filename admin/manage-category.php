<?php include('partials/menu.php');?>
<div class="main-content">
    <div class="wrapper">
    <div class="nav" style="display: inline-flex;">
        <h1>Manage Food</h1>
        <a href="add-category.php" class="btn-primary " style="margin-left: 895px;">Thêm</a>
    </div>
        <br><br>  
        <table class="tbl-full">
                <tr>
                    <th>ID</th>
                    <th >Tên Sản Phẩm</th>
                    <th>Mã SP</th>
                    <th>Mã Hàng</th>
                    <th>Giá</th>
                    <th>SL</th>
                    <th>Hình Ảnh</th>
                    <th>Action</th>
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

                $result=mysqli_query($conn, 'SELECT COUNT(id) as total FROM admin_category');
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
                

                $result = mysqli_query($conn, "SELECT * FROM admin_category LIMIT $start, $limit");
                $i=0;
                while ($row = mysqli_fetch_assoc($result)){
                                $i++;		    
                                ?>
                                <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['tensp'] ?></td>
                                <td style="text-align: center;"><?php echo $row['masp'] ?></td>
                                <td style="text-align: center;"><?php echo $row['maLH'] ?></td>
                                <td style="text-align: center;"><?php echo $row['giasanpham'] ?></td>
                                <td style="text-align: center;"><?php echo $row['soluong'] ?></td>
                                <td style="text-align: center;"><img src="../admin/partials/images/<?php echo $row['hinhanh']  ?>" width="150px"></td>
                                <td style="text-align: center;">
                                    <a href="../admin/update_category.php?id=<?php echo $row['id']?>" class="btn-secondary">Sửa</a>
                                    <a href="../admin/delete_category.php?id=<?php echo $row['id']?>" class="btn-danger">Xoá</a>
                                </td>
                                </tr>
                        <?php }   ?>  
                </table>     
            <?php
                        if ($current_page > 1 && $total_page > 1){
                    echo '<button style = "height:30px;width:30px; background-color:white; color:black;"><a href="manage-category.php?page='.($current_page-1).'" style = "font-size:20px; color:black;text-decoration: none;font-weight: bolder;"><</a><button> ';
                }

                for ($i = 1; $i <= $total_page; $i++){

                    if ($i == $current_page){
                        echo '<button style = "height:30px;width:30px; background-color:white; color:black;font-weight: bolder;"><span>'.$i.'</span></button>';
                    }
                    else{
                        echo '<button style = "height:30px;width:30px; background-color:white; color:black;font-weight: bolder;"><a href="manage-category.php?page='.$i.'" style = "font-size:20px; color:black;text-decoration: none;" >'.$i.'</a> </button> ';
                    }
                }

                if ($current_page < $total_page && $total_page > 1){
                    echo '<button style = "height:30px;width:30px; background-color:white; color:black; font-weight: bolder;"><a href="manage-category.php?page='.($current_page+1).'" style = "font-size:20px; color:black;text-decoration: none;">></a></button> ';
                }

                ?>

</div>
            </div>          

<?php include('partials/footer.php')?>