<?php


include "../connect.php";

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$con_pass = $_POST['con_pass'];
$phone = $_POST['phone'];
$type ="patient";

$sql = "SELECT MAX(U_id) AS max_id FROM user";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$max_id = $data["max_id"];
$new_id = $max_id + 1;

if($pass == $con_pass){
    $query = "insert into user values($new_id,'$name','$email','$pass','$type','$phone')";
    $result = mysqli_query($conn,$query);
    if(TRUE){
        header("location:../login2.php");
    }
}
else{
    echo "password do not match";
}

?>