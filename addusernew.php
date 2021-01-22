<?php
session_start();
require_once('../../../includes/connect.php'); // الاتصال مع قاعدة البيانات

    //get data from html form
$user_name=$_POST['user_name'];
$user_password=$_POST['user_password'];
$user_img=$_FILES['user_img'];
// $imgtype=$user_img['type'];
$userImageName=$user_img['name'];
$userImgTmpName=$user_img['tmp_name'];
$user_tel=$_POST['user_tel'];
$user_date=$_POST['user_date'];
$user_email=$_POST['user_email'];
$randemString=uniqid();
$imgtype=pathinfo($userImageName,PATHINFO_EXTENSION);
$userImageName="$randemString.$imgtype";


 // INSERT data to user table


 $insertuser="INSERT INTO users(userNmae,userPassword,
 userPhone,userImg,userEmail,dob)
 VALUES('$user_name','$user_password','$user_tel','$userImageName',' $user_email','$user_date')";
 if(mysqli_query($conn,$insertuser)){
   move_uploaded_file($userImageName,"../images/$userImageName");
$_SESSTION['userID']=$conn->insert_id;
// اخر واحد دخل قاعدة البيانات
header("location: ../../../user.php");
}else {
  die("error".mysqli_error($conn));
}

?>
