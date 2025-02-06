<?php
include("../connect.php");

session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer\vendor\autoload.php';

//fuction for email 
function pass_reset($get_name, $get_email,$time,$doctor,$date)
{
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP(); //Send using SMTP
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
        $mail->Username = 'pluscare38@gmail.com'; //SMTP username
        $mail->Password = 'tseuccvwkfohgfsy'; //SMTP password
        $mail->SMTPSecure = "tls"; //Enable implicit TLS encryption
        $mail->Port = 587; //TCP port to connect to; use 587 if you have set       `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('pluscare38@gmail.com', $get_name);
        $mail->addAddress($get_email);

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'payment successfully';
        $mail->Body = "your payment is done <br> Appointment Time : $time <br> Appointment Doctor : $doctor Appointment date is : $date";
        $mail->send();
        return true;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

getdate();


$time = $_SESSION['time'];
$get_email = $_POST['email'];
$get_name = "plus care";

$doctor= $_SESSION['doctor'];
$date= $_SESSION['date'];

$q = "select D_name from doctor where D_id = $doctor";
$res = mysqli_query($conn,$q);
$data = mysqli_fetch_assoc($res);
$doctor = $data['D_name'];
if(pass_reset($get_name, $get_email,$time,$doctor,$date)){
   echo "<script>window.alert('Appointment Booked Successfully please check your email'); window.location = '../appointment.php'; </script>"; 
}



?>