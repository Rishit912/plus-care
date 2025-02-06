<?php 
include("connect.php");
$Department_name=$_POST['Department_name'];
$Department_id=$_POST['Department_id'];
$qd="update department set Department_name='$Department_name' where Department_id=$Department_id";
mysqli_query($conn,$qd);
print ($qd);
header("Location:department_view_admin.php");
?>