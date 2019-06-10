<?php

$username = $_POST['uname'];
$pass=$_POST['psw'];



if($username=="VivekSharma" && $pass="12345")
{
    echo  "<script type=\"text/javascript\">".
   // "alert('Data Inserted');".
    "window.location='AdminPanel.php';".
    "</script>";
}

else{
    echo  "<script type=\"text/javascript\">".
    "alert('Wrong Credentials');".
    //"window.location='AdminPanel.php';".
     "</script>";
}

?>