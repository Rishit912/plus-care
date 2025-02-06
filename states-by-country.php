<?php

include("connect.php");
$country_id = $_POST["country_id"];
$result = mysqli_query($conn,"SELECT * FROM doctor where Department_id = $country_id");
?>
<option value="">Select Doctor</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["D_id"];?>"><?php echo $row["D_name"];?></option>
<?php
}
?>