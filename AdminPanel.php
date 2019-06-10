<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="u.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


  </head>
  <body>
    <div class="container-fluid">
      <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
        <a href="home.0.php"><i class="fas fa-home"></i> &nbsp Home</a>
        <a href="#" onclick="document.getElementById('').style.display='block'" style="width:auto;"><i class="fas fa-sign-in-alt"></i> &nbsp  Login</a>
        <a href="<?php echo "gal/11.php" ?>"><i class="fas fa-camera-retro"></i> &nbsp  Gallery</a>
        <a href="<?php echo "#" ?>"><i class="fas fa-phone-volume"></i>  &nbsp Contact</a>

      </div>

<div class="container-fluid">
<div class="jumbotron title">
<a href="www.nitjsr.ac.in"><img class="logo" src="NIT-Jamshedpur-logo.png" alt="NIT JSR"></a>
<div class="jumbotron name"><h1 class="branch_name">DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</h1>
  <h2 class="branch_name">संगणक विज्ञान एवम् अभियन्त्रण विभाग </h2><br>
<h3 class="clg_name">NATIONAL INSTITUTE OF TECHNOLOGY,JAMSHEDPUR </h3>
</div>
<div id="main">
  <button id="toggle" class="openbtn" onclick="openNav()">☰</button>
</div>
</div>

</div>

 <div class="container bg-main">

              <div class="row">
                <div class="col-xs-12 ">
                  <nav>
                    <div class="nav nav-tabs nav-fill sticky-top" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false">Registration</a>

                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Remove</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-edit" role="tab" aria-controls="nav-contact" aria-selected="false">Edit</a>

                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">View</a>
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                      <div class="container-fluid insert">
                        <br>
                        This section is for adding new entries in the database. The login button in the menu is disabled. Only insert the details asked in the different input areas. For checking out the different entries all ready present check the last tab.
                        <br><br>
                          <form class="insert" action="insert.php" method="POST" id="form1" enctype="multipart/form-data">
                            <h4 class="red">*Only to be filled by the Administrator</h4>
                            <h6 class="con">Personal Details:<hr></h6>
                            <div class="row">
                              <div class="col-md-4">
                                <input type="text" name="FirstName" value="" placeholder="First Name" required/>
                              </div>
                                <div class="col-md-4">
                                  <input type="text" name="MiddleName" value="" placeholder="Middle Name">
                                </div>
                                  <div class="col-md-4">
                                    <input type="text" name="LastName" value="" placeholder="Last Name" required/>
                                  </div>

                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <input type="text" name="Email"
                                placeholder="Email" required/>
                              </div>
                              <div class="col-md-6">
                                <input type="text" name="AadhaarNo"
                                placeholder="Aadhaar No." required/>
                              </div>
                            </div>
                             <div class="row">
                              <div class="col-md-4">
                                <input type="text" name="StateofDomicile" value="" placeholder="State of Domicile" required/>
                              </div>
                                <div class="col-md-4">
                                  <input type="text" name="Nationality" value="" placeholder="Nationality" required/>
                                </div>
                                  <div class="col-md-4">
                                    <input type="text" name="Religion" value="" placeholder="Religion" required/>
                                  </div>

                            </div><br>
                            <div class="row"><div class="col-md-4"></div>

                              <div class="col-md-4">
                              <input type="radio" name="gender" value="male" checked> Male
                             <input type="radio" name="gender" value="female"> Female
                            <input type="radio" name="gender" value="other"> Other
                            <br><br>

                            </div>
                            <div class="col-md-4"></div>
                          </div>
                          <div class="row">
                              <div class="col-md-4">
                                <input type="text" name="Branch_name" value="" placeholder="Branch Name" required/>
                              </div>
                                <div class="col-md-4">
                                  <input type="text" name="RegnNo" value="" placeholder="Regn No." required onkeyup="this.value=this.value.toUpperCase();"/>
                                </div>
                                  <div class="col-md-4">
                                    <input type="text" name="MobileNo" value="" placeholder="Mobile No." required/>
                                  </div>

                            </div>
                            <br>
                             <div class="row">
                              <div class="col-md-3 cat">
                                 <select name="Category" required>
                                  <option selected disabled>CATEGORY</option>
                                 <option value="GEN">GEN</option>
                                   <option value="OBC">OBC</option>
                                    <option value="SC">SC</option>
                                     <option value="ST">ST</option>
                            </select>
                              </div>
                              <div class="col-md-4">
                                 <input type="text" name="DateofBirth" value="" placeholder="Date of Birth(DD/MM/YYYY)" required/>
                              </div>
                              <div class="col-md-4">
                                 <input type="text" name="batch" value="" placeholder="Batch" required/>
                              </div>
                            </div>
                            <h6 class="con">Parents Details:<hr></h6>

                            <div class="row">
                              <div class="col-md-4">
                                <input type="text" name="Father_Name" value="" placeholder="Father's Name" required/>
                              </div>
                                <div class="col-md-4">
                                  <input type="text" name="FatherOccupation" value="" placeholder="Occupation" required/>
                                </div>
                                  <div class="col-md-4">
                                    <input type="text" name="fatherMobileNo" value="" placeholder="Mobile No." required/>
                                  </div>

                            </div>

                            <div class="row">
                              <div class="col-md-4">
                                <input type="text" name="Mothers_Name" value="" placeholder="Mother's Name" required/>
                              </div>
                                <div class="col-md-4">
                                  <input type="text" name="motherOccupation" value="" placeholder="Occupation" required/>
                                </div>
                                  <div class="col-md-4">
                                    <input type="text" name="motherMobileNo" value="" placeholder="Mobile No." required/>
                                  </div>

                            </div><br>
                            <h6 class="con">Address:<hr></h6>
                            <div class="row">
                              <div class="col-md-6">
                                <textarea name="localadd" rows="6" cols="55" placeholder=" Local Address" required/></textarea>
                                   <br>
                              </div>
                              <div class="col-md-6">
                               <textarea name="peradd" rows="6" cols="55" placeholder=" Permanent Address" required/></textarea>
                                       <br>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">

                                <input type="file" name="ImageUpload" value="" required></div>
                            </div>
                            <div class="col-md-6">


                            </div>


                            <input type="submit" class="submit_insert" form="form1" value="Submit">
                          </form>


                      </div>

                      </div>

                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <div class="container-fluid insert">
                        <br>
                        This section is for deleting the entries present in the database. The data once deleted cannot be recovered. Enter the Required details below to be deleted.
                        <br><br>
                          <form class="delete" action="delete.php" method="post" id="form2">
                            <h4 class="red">*Only to be filled by the Administrator</h4>
                            <div class="row">
                              <div class="col-md-12">
                                <input type="text" name="RegnNo" value="" placeholder="Registration Number">
                              </div>

                            </div>
                            <input type="submit" class="submit_delete" form="form2" value="Delete">
                          </form>
                        </div>
                    </div>


            <div class="tab-pane fade" id="nav-edit" role="tabpane1" aria-labelledby="nav-about-tab">
              <div class="container">
              <?php

//session_start();
$con = mysqli_connect('localhost','root','','student_details');error_reporting(0);
$output='';
if(isset($_POST['search'])){
  $searchq=$_POST['search'];
  $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);

  $S="SELECT * FROM details WHERE regNo LIKE '$searchq' ";

  $query=mysqli_query($con,$S);
  $count=mysqli_num_rows($query);
  //echo $count;
  if($count == 0||$searchq='')
  {
    $output="No such entry exists.";
    $fname ='';$mname ='';$lname ='';$email='';$aadhar='';
    $SOD='';$nation='';$religion='';$branch='';
    $RegnNo='';$mob='';$cat='';$DOB='';$batch='';
    $fathername ='';$focc ='';$fMobNo ='';$mothername ='';
    $mocc ='';$mMobNo ='';$locadd='';$peradd='';


  }
  else{
    while($row=mysqli_fetch_array($query)){
      $id=$row['regNo'];
      $fname=$row['FirstName'];
      $lname=$row['LastName'];
      $fname =$row['FirstName'];
      $mname =$row['MiddleName'];
      $lname =$row['LastName'];
      $email=$row['Email'];
      $aadhar=$row['aadhar'];
      $SOD=$row['SOD'];
      $nation=$row['Nationality'];
      $religion=$row['Religion'];
      $branch=$row['Branch'];
      $RegnNo=$row['regNo'];
      $mob=$row['mobile'];
      $cat=$row['category'];
      $DOB=$row['DOB'];
      $batch=$row['Batch'];
      $fathername =$row['FatherName'];
      $focc =$row['FatherOccupation'];
      $fMobNo =$row['FatherMobile'];
      $mothername =$row['MotherName'];
      $mocc =$row['MotherOccupation'];
      $mMobNo =$row['MotherMobile'];
      $locadd=$row['localAddress'];
      $peradd=$row['PermanentAddress'];

      $output.='Selected Student:'.$id.' '.$fname.' '.$lname;
    }

  }

}
if(isset($_POST['alter'])){
  $out='Updated';
  $id=$_POST['RegnNo'];
$mob=$_POST['MobileNo'];
$qu="UPDATE details SET mobile='$mob' WHERE regNo='$id'";
//echo $qu;
mysqli_query($con,$qu);

$out='UPDATED';
    echo "<script type='text/javascript'>alert( '$out');</script>";
}


?>

                This section is for the perspective of the data present in the database. The user cannot alter any of the data shown. This is merely for the observation of existing database.
                        
                <form class="insert" id="update" method="POST" enctype="multipart/form-data">

<div class="row">
  <div class="col-md-8">
<input type="text" name="search" placeholder="Search using Registration Number" onkeyup="this.value=this.value.toUpperCase();"/>
  </div>
  <div class="col-md-4">
    <input type="submit" value=">>" name="srch_btn" style="margin-top:17px;width:70px;" />

  </div>


    <?php  echo "<script type='text/javascript'>alert( '$output');</script>";?>
</div>




<h4 class="red">*Only to be filled by the Administrator</h4>
<h6 class="con">Personal Details:<hr></h6>
<div class="row">
<div class="col-md-4">
  <input type="text" name="FirstName" value="<?php echo "$fname"; ?>" placeholder="First Name" disabled/>
</div>
  <div class="col-md-4">
    <input type="text" name="MiddleName" value="<?php echo "$mname"; ?>" placeholder="Middle Name" disabled>
  </div>
    <div class="col-md-4">
      <input type="text" name="LastName" value="<?php echo "$lname"; ?>" placeholder="Last Name" disabled/>
    </div>

</div>
<div class="row">
<div class="col-md-6">
  <input type="text" name="Email" value="<?php echo "$email";    ?>"
  placeholder="Email" />
</div>
<div class="col-md-6">
  <input type="text" name="AadhaarNo" value="<?php echo "$aadhar";    ?>"
  placeholder="Aadhaar No." disabled/>
</div>
</div>
<div class="row">
<div class="col-md-4">
  <input type="text" name="StateofDomicile" value="<?php echo "$SOD";    ?>" placeholder="State of Domicile" disabled/>
</div>
  <div class="col-md-4">
    <input type="text" name="Nationality" value="<?php echo "$nation";    ?>" placeholder="Nationality" disabled/>
  </div>
    <div class="col-md-4">
      <input type="text" name="Religion" value="<?php echo "$religion";    ?>" placeholder="Religion" disabled/>
    </div>

</div><br>
<div class="row"><div class="col-md-4"></div>

<div class="col-md-4" disabled>
<input type="radio" name="gender" value="male" checked disabled> Male
<input type="radio" name="gender" value="female" disabled> Female
<input type="radio" name="gender" value="other" disabled> Other
<br><br>

</div>
<div class="col-md-4"></div>
</div>
<div class="row">
<div class="col-md-4">
  <input type="text" name="Branch_name" value="<?php echo "$branch";    ?>" placeholder="Branch Name" disabled/>
</div>
  <div class="col-md-4">
    <input type="text" name="RegnNo" value="<?php echo "$RegnNo";    ?>" placeholder="Regn No." readonly/>
  </div>
    <div class="col-md-4">
      <input type="text" name="MobileNo" value="<?php echo "$mob";    ?>" placeholder="Mobile No." />
    </div>

</div>
<br>
<div class="row">
<div class="col-md-3 cat">
   <select name="Category" disabled>
    <option selected disabled>CATEGORY</option>
   <option value="GEN" disabled>GEN</option>
     <option value="OBC" disabled>OBC</option>
      <option value="SC" disabled>SC</option>
       <option value="ST" disabled>ST</option>
</select>
</div>
<div class="col-md-4">
   <input type="text" name="DateofBirth" value="<?php echo "$DOB";    ?>" placeholder="Date of Birth(DD/MM/YYYY)" disabled/>
</div>
<div class="col-md-4">
   <input type="text" name="batch" value="<?php echo "$batch";    ?>" placeholder="Batch" disabled/>
</div>
</div>
<h6 class="con">Parents Details:<hr></h6>

<div class="row">
<div class="col-md-4">
  <input type="text" name="Father_Name" value="<?php echo "$fathername";    ?>" placeholder="Father's Name" disabled/>
</div>
  <div class="col-md-4">
    <input type="text" name="FatherOccupation" value="<?php echo "$focc";    ?>" placeholder="Occupation" disabled/>
  </div>
    <div class="col-md-4">
      <input type="text" name="fatherMobileNo" value="<?php echo "$fMobNo";    ?>" placeholder="Mobile No."/>
    </div>

</div>

<div class="row">
<div class="col-md-4">
  <input type="text" name="Mothers_Name" value="<?php echo "$mothername";    ?>" placeholder="Mother's Name" disabled/>
</div>
  <div class="col-md-4">
    <input type="text" name="motherOccupation" value="<?php echo "$mocc";    ?>" placeholder="Occupation" disabled/>
  </div>
    <div class="col-md-4">
      <input type="text" name="motherMobileNo" value="<?php echo "$mMobNo";    ?>" placeholder="Mobile No." />
    </div>

</div><br>
<h6 class="con">Address:<hr></h6>
<div class="row">
<div class="col-md-6">
  <textarea name="localadd" rows="6" cols="55" value="<?php echo "$locadd";    ?>" placeholder=" Local Address" /></textarea>
     <br>
</div>
<div class="col-md-6">
 <textarea name="peradd" rows="6" cols="55" value="<?php echo "$peradd";    ?>" placeholder=" Permanent Address"  /></textarea>
         <br>
</div>
</div>
<div class="row">
<div class="col-md-6">

  <input type="file" name="ImageUpload" value="" disabled></div>
</div>
<div class="col-md-6">


</div>


<input type="submit" class="submit_update" name="alter" form="update" value="Update">
</form>

          </div>

                </div>




                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                      <div class="container-fluid insert">
                        <br>
                        This section is for the perspective of the data present in the database. The user cannot alter any of the data shown. This is merely for the observation of existing database.
                        <br><br>
                          <form class="view" action="view.php" method="post" id="form4">
                            <h4 class="red">*Only to observe the data present in the database.</h4>
                            <table>
                              <tr>
                                <th>Registration No.</th>
                                <th>Name</th>
                                <th>Batch</th>
                                <th>Branch</th>
                                <th>Image</th>
                              </tr>
                              <?php
                              $conn=mysqli_connect('localhost','root','','student_details');
                              $q= "select regNo, FirstName, MiddleName, LastName, Batch, Branch, pic_source from details";
                              $i= "select pic_source from details";
                              $result=mysqli_query($conn,$q);
                              $num = mysqli_num_rows($result);
                              if($num > 0)
                              {
                                while ($row=$result-> fetch_assoc()) {
                                  echo "<tr><td>".$row["regNo"]."</td><td>".$row["FirstName"]." ".$row["MiddleName"]." ".$row["LastName"]."</td><td>".$row["Batch"]."</td><td>".$row["Branch"]."</td><td><img src='".$row["pic_source"]."'height='120px' width='100px'/></td></tr>";
                                }
                                echo "</table>";
                              }
                              else{
                                echo "Empty Database";
                              }
                              ?>
                            </table>
                          </form>
                        </div>


                    </div>

                  </div>

                </div>
              </div>


  </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script>
        function openNav() {
          document.getElementById("mySidebar").style.width = "250px";
          document.getElementById("main").style.marginRight = "250px";
           document.getElementById("toggle").style.display = "none";
        }

        function closeNav() {
          document.getElementById("mySidebar").style.width = "0";
          document.getElementById("main").style.marginRight= "0";
             document.getElementById("toggle").style.display = "block";

        }
        </script>

        <script>

        var modal = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>



  </body>
</html>
