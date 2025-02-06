<?php 
include("connect.php");
$D_id=$_POST['D_id'];
$Date=$_POST['Date'];
$Time=$_POST['Time'];
$q="insert into schedule(Doctor_id,Date,Time) values('$D_id','$Date','$Time')";
print $q;
mysqli_query($conn,$q);
    header("location:schedule_doctor_view_admin.php");
?>