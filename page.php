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

$result=mysqli_query($conn, 'SELECT COUNT(id) as total FROM ');
$row = mysqli_fetch_assoc($result);
$total_records = $row['total'];


$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 3;


$total_page = ceil($total_records / $limit);

if ($current_page > $total_page){
    $current_page = $total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}
 
$start = ($current_page - 1) * $limit;
 

$result = mysqli_query($conn, "SELECT * FROM monan LIMIT $start, $limit");

while ($row = mysqli_fetch_assoc($result)){
    echo '<li>' . $row['Tenmonan'] . '</li>';
}

if ($current_page > 1 && $total_page > 1){
    echo '<a href="phantrang.php?page='.($current_page-1).'">Prev</a> | ';
}

for ($i = 1; $i <= $total_page; $i++){

    if ($i == $current_page){
        echo '<span>'.$i.'</span> | ';
    }
    else{
        echo '<a href="phantrang.php?page='.$i.'">'.$i.'</a> | ';
    }
}

if ($current_page < $total_page && $total_page > 1){
    echo '<a href="phantrang.php?page='.($current_page+1).'">Next</a> | ';
}

?>