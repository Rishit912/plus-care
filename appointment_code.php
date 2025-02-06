<?php
include("connect.php");
session_start();
$P_name = $_POST['P_name'];
$Phone_Number = $_POST['P_no'];
$Age = $_POST['Age'];
$City = $_POST['City'];
$Email = $_POST['Email'];
$date = $_POST['date'];
$_SESSION['date'] = $date;
$Department = $_POST['Department'];
$_SESSION['doctor'] = $Department;
$Gender = $_POST['Gender'];
$Time = $_POST['Time'];
$_SESSION['time'] = $Time;
$Symptoms = $_POST['AboutSymptoms'];
$user_id=$_SESSION['U_id'];
$q="insert into  appointment (P_name,Date,phone_no,d_id,Age,City,Time,Email,Symptoms,Gender,U_id,status) values('$P_name','$date','$Phone_Number','$Department','$Age','$City','$Time','$Email','$Symptoms','$Gender',$user_id,'pending')";
$result = mysqli_query($conn,$q);

$q1="select P_id from appointment order by P_Id DESC";
$rs1=mysqli_query($conn,$q1);
$row=mysqli_fetch_array($rs1);

$app_id = $row['P_id'];

header("location:payment/index.php?app_id=". $app_id);

    
?>