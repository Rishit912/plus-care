<?php 
include("connect.php");
$Name=$_POST['Name'];
$U_id=$_POST['U_id'];
$Email_id=$_POST['Email_id'];
$Message=$_POST['Message'];
$D_id=$_POST['D_id'];
$q="insert into schedule(Name,U_id,Email_id,Message,D_id) values('$Name','$U_id','$Email_id' ,'$Message','$D_id')";
print $q;
mysqli_query($conn,$q);
    header("location:review_view_admin.php");
?>