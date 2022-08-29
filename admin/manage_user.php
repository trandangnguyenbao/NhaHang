<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage User</h1>
        <br><br>
            <table class="tbl-full">
                <tr>
                    <th>ID</th>
                    <th>Họ Tên</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>SĐT</th>
                    <th>Mật Khẩu</th>
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

                $result=mysqli_query($conn, 'SELECT COUNT(id_user) as total FROM user');
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
                

                $result = mysqli_query($conn, "SELECT * FROM user LIMIT $start, $limit");
                $i=0;
                while ($row = mysqli_fetch_assoc($result)){
                                $i++;		
                                ?>
  		        <tr>
                <td style="text-align: center;"><?php echo $i ?></td>
                <td style="text-align: center;"><?php echo $row['fname'] ?></td>
                <td style="text-align: center;"><?php echo $row['lname'] ?></td>
                <td style="text-align: center;"><?php echo $row['Email'] ?></td>
                <td style="text-align: center;"><?php echo $row['phone'] ?></td>
                <td style="text-align: center;"><?php echo $row['password'] ?></td>
  		        
                  <td  style="text-align: center;">
                    <a href="../admin/delete_user.php?id_user=<?php echo $row['id_user']?>" class="btn-danger">Xoá</a>
                </td>
                </tr>
  		<?php }
        ?>
            </table>
            </table>     
            <?php
                        if ($current_page > 1 && $total_page > 1){
                    echo '<button style = "height:30px;width:30px; background-color:white; color:black;"><a href="manage_user.php?page='.($current_page-1).'" style = "font-size:20px; color:black;text-decoration: none;font-weight: bolder;"><</a><button> ';
                }

                for ($i = 1; $i <= $total_page; $i++){

                    if ($i == $current_page){
                        echo '<button style = "height:30px;width:30px; background-color:white; color:black;font-weight: bolder;"><span>'.$i.'</span></button>';
                    }
                    else{
                        echo '<button style = "height:30px;width:30px; background-color:white; color:black;font-weight: bolder;"><a href="manage_user.php?page='.$i.'" style = "font-size:20px; color:black;text-decoration: none;" >'.$i.'</a> </button> ';
                    }
                }

                if ($current_page < $total_page && $total_page > 1){
                    echo '<button style = "height:30px;width:30px; background-color:white; color:black; font-weight: bolder;"><a href="manage_user.php?page='.($current_page+1).'" style = "font-size:20px; color:black;text-decoration: none;">></a></button> ';
                }

                ?>

</div>
            </div>  
    </div>
</div>

<?php include('partials/footer.php')?>