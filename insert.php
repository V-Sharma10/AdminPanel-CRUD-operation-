<?php

session_start();



$con = mysqli_connect('localhost','root','','student_details');
/*
if($con){
  echo "connection successful";
}
else {

    echo "no connection";
}*/
$RegnNo=$_POST['RegnNo'];
$fname =$_POST['FirstName'];
$mname =$_POST['MiddleName'];
$lname =$_POST['LastName'];
$email=$_POST['Email'];
$aadhar=$_POST['AadhaarNo'];
$SOD=$_POST['StateofDomicile'];
$nation=$_POST['Nationality'];
$religion=$_POST['Religion'];
$branch=$_POST['Branch_name'];
$mob=$_POST['MobileNo'];
$cat=$_POST['Category'];
$DOB=$_POST['DateofBirth'];
$batch=$_POST['batch'];
$fathername =$_POST['Father_Name'];
$focc =$_POST['FatherOccupation'];
$fMobNo =$_POST['fatherMobileNo'];
$mothername =$_POST['Mothers_Name'];
$mocc =$_POST['motherOccupation'];
$mMobNo =$_POST['motherMobileNo'];
$locadd=$_POST['localadd'];
$peradd=$_POST['peradd'];


$filename= $_FILES["ImageUpload"]["name"];
$tempname=$_FILES["ImageUpload"]["tmp_name"];
$folder="images/".$filename;
//echo $_FILES['ImageUpload'];
//print_r($_FILES['ImageUpload']);
move_uploaded_file($tempname,$folder);
//echo "<img src='$folder' height='120px' width='100px'/>";


$s ="select * from details where regNo = '$RegnNo'";
//echo "$RegnNo' '.'sadfSgdhjdfgh'";
$result = mysqli_query ($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
  echo  "<script type=\"text/javascript\">".
        "alert('Already Inserted in Database.');".
        "window.location='AdminPanel.php';".
        "</script>";
}
else{
  $reg="insert into details (`regNo`,`FirstName`,`MiddleName`,`LastName`,`FatherName`,`MotherName`,`DOB`,`Batch`,`Branch`,`Email`,`aadhar`,`mobile`,`category`,`FatherOccupation`,`MotherOccupation`,`FatherMobile`,`MotherMobile`,`localAddress`,`PermanentAddress`,`SOD`,`Nationality`,`Religion`,`pic_source`) values ('$RegnNo','$fname','$mname','$lname','$fathername','$mothername','$DOB','$batch','$branch','$email','$aadhar','$mob','$cat','$focc','$mocc','$fMobNo','$mMobNo','$locadd','$peradd','$SOD','$nation','$religion','$folder')";
 $query= mysqli_query($con,$reg);
 if($query){
  echo  "<script type=\"text/javascript\">".
        "alert('Data Inserted');".
        "window.location='AdminPanel.php';".
        "</script>";
}
}
?>