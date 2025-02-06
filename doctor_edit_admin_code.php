<?php

include "connect.php";
$D_id = $_POST['D_id'];
$D_name=$_POST['D_name'];
$Doctor_mobileNo=$_POST['Doctor_mobileNo'];
$Birthdate=$_POST['birthdate'];
$age=$_POST['age'];
$Gender=$_POST['Gender'];
$Language=$_POST['Language'];
$Email=$_POST['Email'];
$Bloodgroup=$_POST['Bloodgroup'];
$AadhaarCardNo=$_POST['AadhaarCardNo'];
$City=$_POST['City'];
$Pincode=$_POST['Pincode'];
$Address=$_POST['Address'];
// $Department=$_POST['Department'];
$specialization=$_POST['specialization'];
$experience=$_POST['experience'];
$photo="doctor/".$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
$q="update Doctor set D_name ='$D_name',Doctor_mobileNo = '$Doctor_mobileNo', Birthdate = '$Birthdate' ,age = '$age',Gender = '$Gender',Language ='$Language' ,Email ='$Email' ,Bloodgroup = '$Bloodgroup',AadhaarCardNo = '$AadhaarCardNo',City ='$City',Pincode = '$Pincode',Address ='$Address' ,specilization ='$specialization' ,experience ='$experience' ,image ='$photo' where D_id = '$D_id'";
$res =  mysqli_query($conn,$q);
 if($res){
    header("location:doctor_view_admin.php");
 }

?>