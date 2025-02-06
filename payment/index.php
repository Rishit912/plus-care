<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
include("../connect.php");
if(isset($_POST['btn']))
{
    $app_id= $_POST['app_id'];
    $q="update  appointment set status ='Net Banking' where p_id = $app_id";
    mysqli_query($conn,$q);
}
?>
<div class="container">

    <form action="mail.php" method="post">
<input type="hidden" name="app_id" value="<?php print $_GET['app_id'];?>">
        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" required placeholder="FULL NAME">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="email" required placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" required placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" required placeholder="CITY">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" required placeholder="STATE">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" required ]placeholder="123 456">
                    </div>


            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" required placeholder="NAME">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" required placeholder="1111-2222-3333-4444">
                </div>
                 <div class="inputBox">
                    <span> amount:</span>
                    <input type="number" disabled required value="300" placeholder="300">
                </div>
               
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" required placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" required placeholder="2023">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" required placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>
    <button type="submit"  name='btn'class="submit-btn"  >proceed to checkout</button>
    </form>
</div>    
    
</body>
<script>
function showDialog() {
  window.alert("Payment Successfully");
}
</script>
</html>