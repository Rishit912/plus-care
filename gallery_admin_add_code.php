<?php 
include("connect.php");

$Title=$_POST['Title'];
$File="gallery/".$_FILES['File']['name'];
move_uploaded_file($_FILES['File']['tmp_name'],$File);
$U_id="1";
$q="insert into gallery(Title,File,U_id) values  ('$Title','$File','$U_id')";
mysqli_query($conn,$q);
if(TRUE){
    header("location:gallery_view_admin.php");
}
?>