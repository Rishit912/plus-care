<?php
$server_name = "localhost";
$username = "u329049941_pluscare";
$password = "PlusCare@123";
$databse = "u329049941_pluscare";


try {
    $conn = mysqli_connect($server_name,$username,$password,$databse);
} catch (\Throwable $th) {
    echo "Error!";
}


?>