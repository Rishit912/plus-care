<?php 
include("connect.php");
$D_name=$_POST['D_name'];
$Doctor_mobileNo=$_POST['Doctor_mobileNo'];
$Birthdate=$_POST['Birthdate'];
$age=$_POST['age'];
$Gender=$_POST['Gender'];
$Language=$_POST['Language'];
$Email=$_POST['Email'];
$Bloodgroup=$_POST['Bloodgroup'];
$AadhaarCardNo=$_POST['AadhaarCardNo'];
$City=$_POST['City'];
$Pincode=$_POST['Pincode'];
$Address=$_POST['Address'];
$Department=$_POST['Department'];
$specialization=$_POST['specialization'];
$experience=$_POST['experience'];
$photo="doctor/".$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
$Birthdate=$_POST['Birthdate'];
$qd="update doctor set D_name='$D_name'Doctor_mobileNo='$Doctor_mobileNo'Birthdate='$Birthdate'age='$age'Gender='$Gendre'Language='$Language' where Email='$Email"
mysqli_query($conn,$qd);
print ($qd);
header("Location:doctor_view_admin.php");
?> 