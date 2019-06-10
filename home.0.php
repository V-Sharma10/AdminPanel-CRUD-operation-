
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>DBMS_Project</title>
    <link rel="stylesheet" href="home.css">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="home.js"></script>
  </head>
  <body><div id="mySidebar" class="sidebar">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
                  <a href="<?php echo "home.0.php" ?>"><i class="fas fa-home"></i> &nbsp Home</a>
                  <a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fas fa-sign-in-alt"></i> &nbsp  Login</a>
                  <a href="<?php echo "gal/11.php" ?>"><i class="fas fa-camera-retro" onclick=""></i> &nbsp  Gallery</a>
                  <a href="<?php echo " #/*developer/developer.php*/" ?>"><i class="fas fa-phone-volume"></i>  &nbsp Contact</a>
          
                </div>
                <div id="main">
                <button id="toggle" class="openbtn" onclick="openNav()">☰</button>
              </div>
              </div>
      
<div id="id01" class="modal">
  
        <form class="modal-content animate" action="Adminlogin.php" method="POST" style="width:50%">
    
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            
          </div>
      
          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
              
            <button class="modalbtn" type="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>
      
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
      </div>
        <div class="container-fluid">
                
    <div class="container-fluid bg-main ">
      <div id="titlebar" style="
    background-color: wheat;">


      <div class="title">
      <div class="row">

      <div class="col-md-12">
        <div class="box"><img class="largelogo" id="logo" src="NIT-Jamshedpur-logo.png" alt="CollegeLogo"></div>
        </div>
  </div>

    <div class="row" id="titleName">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="box" id="title_box"><center><h3 id="name" style="font-size:25px;"> &nbsp&nbsp&nbsp  National Institute of Technology, Jamshedpur</h3></center></div>
          </div>
        <div class="col-md-3">
            </div>
      </div>

    </div>

</div>

</div>

<style>
.v1{
  border: 1px solid gray;
  padding: 30px;
  margin: 50px;
  text-align: center;
  align-items: center;
  z-index: -15;
  overflow-y: hidden;
}
.col-md-9, .col-md-3{
  z-index: -5;
}
h1.ud{
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}
h5.head{

  text-transform: uppercase;
  color: #4CAF50;

}

p.pra{
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
}
.branch_name{
  text-align: center;
  position: sticky;
  top:180px;
  background-color: #efbe7c;
  padding: 15px;
margin: 10px 0 10px 0;
  color: #343434;
  font-weight: normal;
  font-family: 'Ultra', sans-serif;   
  font-size: 36px;
  line-height: 42px;
  text-transform: uppercase;
  text-shadow: 0 2px white, 0 3px #777;

}
.portal{
    z-index: -5;
  }
</style>
 <h2 class="branch_name">Department of Computer Science and Engineering<br>संगणक विज्ञान एवम् अभियन्त्रण विभाग</h2>
<div class="row">
  <div class="col-md-3">
    <?php  include ('notice.php');  ?>
  </div>
<div class="col-md-9">
<div class="v1">
 
  <h1 class="ud">ABOUT</h1>


 <p class="pra"> The Department of Computer Science and Engineering at the National Institute of Technology Jamshedpur, was formed in 1992. Since its inception, the department has always been recognized all over the country for its excellence. The Department has consistently produced quality professionals in the field of Computer Science & Engineering and strived for excellence in research and development.</p>

 <h5 class="head"> Vision</h5>
<p class="pra"> Producing high quality industry ready Computer engineers to cater to the needs of the society.</p>


 <h5 class="head"> Mission</h5>
<p class="pra"> To train young minds and to equip them with the best possible technical knowledge to meet the current and future demands of the industry, academia & research. To create infrastructure, motivation and culture for the state of the art research work in the area of Computer Science & Information Technology.</p>


<h5 class="head"> Head of the Department: Dr. Binod Kumar Singh</h5>
<p class="pra"> Phone(HOD Office): 0657-237-4097/99 
Phone(HOD): 
Email: hod.cse@nitjsr.ac.in</p>
  
</div>
</div>
</div>
<?php  include ('sli\slide.php');  ?>
<br><br><br>
 <div class="row portal">
        <div class="col-md-6">
     <a href="<?php echo "faculty/11.php" ?>" target="_blank" class="btn btn-info" value="Faculty Portal">Faculty Portal</a></div>
     <div class="col-md-6">
      <a href="#" class="btn btn-success" value="Faculty Portal">Student Portal</a></div>
    </div>

    <br><br>
    <div class="footer">
 <?php  include ('foo.php');  ?>
</div>

</div>


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script>
            function openNav() {
              document.getElementById("mySidebar").style.width = "250px";
            }
            
            function closeNav() {
              document.getElementById("mySidebar").style.width = "0";
            }
            </script>

<script>
        // Get the modal
        var modal = document.getElementById('id01');
        
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
        
</body>
</html>
