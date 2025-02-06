<?php 
include("connect.php");
$Department_name=$_POST['Department_name'];
$qd="insert into department(Department_name) values ('$Department_name')";
mysqli_query($conn,$qd);
print ($qd);
header("Location:department_view_admin.php");
?>