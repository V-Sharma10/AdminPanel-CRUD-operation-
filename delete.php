<?php

session_start();
$con = mysqli_connect('localhost','root','','student_details');

$RegnNo=$_POST['RegnNo'];

$s ="select * from details where regNo = '$RegnNo'";
$result = mysqli_query ($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){

$del="DELETE FROM `details` WHERE regNo='$RegnNo'";
mysqli_query($con,$del);

  echo  "<script type=\"text/javascript\">".
        "alert('The entry has been deleted from the database.');".
        "window.location='AdminPanel.php';".
        "</script>";
}
else{
  echo  "<script type=\"text/javascript\">".
        "alert('Data not present in the database.');".
        "window.location='AdminPanel.php';".
        "</script>";
}
?>
