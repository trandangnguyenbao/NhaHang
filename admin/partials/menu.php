<?php
    include("login_check.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php"><img class="logo" src="../images/logo1.png" width="433" height="84" alt="" title=""></a>
			<a href="index.php"><img src="../images/waitress.png" width="332" height="205" alt="" title=""  style="margin-right: -160px;"></a>
			<ul class="navigation" style="width: 1000px; margin-left: -130px;">
               <li style="margin-left: 0px;"><a href="index.php">Home</a></li>
               <li><a href="manageadmin.php">Admin</a></li>
               <li><a href="manage-category.php">Manage Product</a></li>
               <li><a href="manage-loaihang.php">Manage Category</a></li>
               <li><a href="manage-order.php">Manage Order</a></li>
               <li><a href="manage_user.php">Manage User</a></li>
               <li><a href="admin-logout.php">LogOut</a></li>
           </ul>
		</div>
	</div>
</body>
</html>
