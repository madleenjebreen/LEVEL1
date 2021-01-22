<?php


$userID=$_SESSTION['userID'];
mysqli_query("includes/connect.php");
$getalluser="SELECT * FROM users where userID=$userID";
$getallusersilat=mysqli_query($conn,$getallservice);
$thisuser=mysqli_fetch_assoc($getallusersilat);

 ?>
