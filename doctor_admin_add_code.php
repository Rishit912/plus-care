<?php 
include("connect.php");

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
$Department=$_POST['Department'];
$specialization=$_POST['specialization'];
$experience=$_POST['experience'];
$photo="doctor/".$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
$q="insert into doctor (D_name,Doctor_mobileNo,Birthdate,Age,Gender,Language,Email,Bloodgroup,AadhaarCardNo,City,Pincode,Address,Department_id,specilization,experience,image)
 values('$D_name','$Doctor_mobileNo','$Birthdate','$age','$Gender','$Language','$Email','$Bloodgroup','$AadhaarCardNo','$City','$Pincode','$Address','$Department','$specialization','$experience','$photo')";
 mysqli_query($conn,$q);
 
 $qu="insert into user(U_name,E_mail,password,U_type,Phone_no) values('$D_name','$Email','123456','doctor','$Doctor_mobileNo')";
 mysqli_query($conn,$qu);

if(TRUE){
    header("location:doctor_view_admin.php");
}
?>