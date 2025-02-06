<?php 
include("connect.php");
$name=$_POST['name'];
$phone_no=$_POST['phone_no'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$msg=$_POST['msg'];
$qd="insert into feedback(name,phone_no,email,subject,msg) values ('$name','$phone_no','$email','$subject','$msg')";
mysqli_query($conn,$qd);
print ($qd);
header("Location:feedback_view_admin.php");
?>