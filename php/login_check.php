<?php

include "../connect.php";

$email = $_POST['email'];
$pass = $_POST['pass'];

$query = "select * from user where E_mail = '$email' and password = '$pass'";
$result =mysqli_query($conn,$query); 

if($data = mysqli_fetch_assoc($result)){
    $db_email = $data['E_mail'];
    $db_pass = $data['password'];
    @$userType = $data['U_type'];

    session_start();
    $_SESSION['U_id']=$data['U_id'];
    $_SESSION['email'] = $db_email;
    $_SESSION['pass'] = $db_pass;

    if($userType == "patient"){
        header("location:../appointment.php");
    }
    else if($userType == "admin"){
        header("location:../department_add_admin.php");
    
    }
    else if($userType == "doctor"){
        header("location:../schedule_doctor_view_doctor.php");
    
    }
}
    else{
        header("location:../login2.php?status=Invalid");
    }

?>