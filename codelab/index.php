<!DOCTYPE html>
<html>
<title>CODELAB</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="profile_card.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("https://tinyurl.com/p7rz3c8c");
  min-height: 100%;
}

/*round button style */
.button1 {
  border-radius: 25px;
  width: 150px;
  background-color: black;
  color: white;
}

#rcorners2 {
  border-radius: 15px 50px;
  border: 2px solid black;
}
  /*h1,h6 {font-family: "Oswald"}*/

.img-circle{
      height:150px;
      width: 150px;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide" style="font-family: Oswald; color: black;"><b>CODELAB</b></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <!-- <a href="#courses" class="w3-bar-item w3-button"><i class="fa fa-th"></i> COURSES</a> -->
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <button class="w3-bar-item w3-button" data-toggle="modal" data-target="#regModal"><i class="fa fa-user"></i> REGISTER</button>
      <button class="w3-bar-item w3-button" data-toggle="modal" data-target="#loginModal"><i class="fa fa-user"></i> LOGIN</button>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#courses" onclick="w3_close()" class="w3-bar-item w3-button">COURSES</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <button data-toggle="modal" data-target="#regModal" onclick="w3_close()" class="w3-bar-item w3-button">REGISTER</a>
  <button data-toggle="modal" data-target="#loginModal" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
</nav>

<!-- LOGIN MODAL -->
<div class="modal fade" id="loginModal" role="dialog">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header" style="background-color: black;">
                  <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
                  <h4 class="modal-title" style="color: white;"><center>LOGIN</center></h4>
                </div>
                <div class="modal-body">
                  <form action="login.php" method="POST">
                    <div class="input-group">
                      <span class="input-group-addon" style="color: black;"><i class="glyphicon glyphicon-user"></i></span>
                      <input id="email" type="email" class="form-control" name="email" placeholder="Email" >
                    </div><br>
                    <div class="input-group">
                      <span class="input-group-addon" style="color: black;"><i class="glyphicon glyphicon-lock"></i></span>
                      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <br>
                  
                </div>
                <div class="modal-footer">
                <!--  <center><button type="button" class="btn btn-default" data-dismiss="modal">Login</button></center>  -->
                  <center><button type="submit" class="btn btn-light" name="login" style="background-color: black; color: white;">Login</button></center>
                </div>
                </form>
              </div>
            </div>
</div>

<!-- REGISTER MODAL -->
<div class="modal fade" id="regModal" role="dialog">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header" style="background-color: black;">
                  <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
                  <h4 class="modal-title" style="color: white;"><center>Register</center></h4>
                </div>
                <div class="modal-body">
                    <form name="signup form" method="POST" action="index.php">
                      <center>
                      <div class="input-group">
                        <span class="input-group-addon" style="color: black;"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="name" type="text" class="form-control" name="name" placeholder="Enter your full name" maxlength="50" required>
                      </div><br>

                      <div class="input-group">
                        <span class="input-group-addon" style="color: black;"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type='Email' name='email' class="form-control" id='email' maxlength="50" class="form-control" name="email" placeholder="Email Address" required>
                      </div><br>

                      <div class="input-group">
                        <span class="input-group-addon" style="color: black;"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input type='text' name='phoneNumber' class="form-control" id='phoneNumber' maxlength="10" placeholder="Phone number" required>
                      </div><br>

                      <div class="input-group">
                        <span class="input-group-addon" style="color: black;"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type='password' name='password' class="form-control" id='password' minlength="6" maxlength="50" placeholder="Enter Password" required>
                      </div><br>

                      <div class="input-group">
                        <span class="input-group-addon" style="color: black;"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type='password' name='confirm_pass' class="form-control" id='confirm_pass' minlength="6" maxlength="50" placeholder="Confirm Password" required=>
                      </div>

                      </center>
                    

                </div>
                <div class="modal-footer" >
                  <center>
                  <input type="submit" name="submit" class="btn btn-primary text-light" style="background-color: black; text-decoration-color: white;" onclick="return validate(this.form)" value="Register" >

                 <!--  <script>
                    function popUp(){
                      alert("user Register");
                    }
                  </script> -->
                  </center>
                </form>
                </div>
              </div>
            </div>
</div>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <center>
    <br><br><br><br>
    <div class="headerfont">
    <span class="w3-hide-small" style="font-family: Oswald; color: black; font-size: 110px;"><b>CODELAB</b></span>
    <span class="w3-hide-large w3-hide-medium" style="font-family: Oswald; color: black; font-size: 90px;"><b>CODELAB</b></span>
    </div>

      <h6><b>ONLINE  <span class="w3-tag">EXAMINATION</span></b></h6>
      </center>
    </div>
    <div class="w3-display-left w3-text-white" style="padding:48px">
    <br><br><br><br><br><br><br><br>
    <span class="w3-jumbo w3-hide-small" style="font-family: Oswald; color: black;">Start something that matters</span>
    <span class="w3-hide-large w3-hide-medium" style="font-family: Oswald; color: black; font-size: 23px;">Start something that matters</span><br>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center"><b>ABOUT CODELAB</b></h3>
  <p class="w3-center w3-large">Key features of our website</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Responsive</p>
      <p>Website fits and adapts to any mobile device ,tablets and desktop screens.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-globe w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Website</p>
      <p>Website allows to apply for the exam in the course you are interested.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-file-text-o w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Tutorials</p>
      <p>Students can view the tutorials uploaded by faculty for more understanding. 
</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Notices</p>
      <p>Notices/Instructions/guidelines will be visible for the students .</p>
    </div>
  </div>
</div>

<div class="w3-container" style="padding:70px 16px" id="contact">
<div class="w3-row-padding">
<h3 class="w3-center"><b>CONTACT US</b></h3>
<p class="w3-center w3-large">Developed and Maintained by:</p><br>

<div class="w3-col  m4 w3-margin-bottom ">
  <br><br><br>
<aside class="profile-card">
  <div class="mask-shadow"></div>
  <header>

    <!-- here’s the avatar -->
    <a href="#about">
      <img src="akshay.jpeg">
    </a>

    <!-- the username -->
    <h1>AKSHAY KUDTARKAR</h1>

    <!-- and role or location -->
    <h2>DEVELOPER</h2>

  </header>

  <!-- bit of a bio; who are you? -->
  <div class="profile-bio">

    <p>"A developer is an individual who is responsible for creating or working on the development of a product or service."</p>

  </div>

  <!-- some social links to show off -->
  <ul class="profile-social-links">

    <!-- twitter - el clásico  -->
    <li>
      <a href="https://twitter.com/tutsplus">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-twitter.svg">
      </a>
    </li>

    <!-- envato – use this one to link to your marketplace profile -->
    <li>
      <a href="https://envato.com">
        <img src="mail.png">
      </a>
    </li>

    <!-- codepen - your codepen profile-->
    <li>
      <a href="https://codepen.io/tutsplus">
        <img src="insta.png">
      </a>
    </li>

    <!-- add or remove social profiles as you see fit -->

  </ul>

</aside>
</div>


<div class="w3-col  m4 w3-margin-bottom ">
<br><br><br>
<aside class="profile-card">
  <div class="mask-shadow"></div>
  <header>

    <!-- here’s the avatar -->
    <a href="#about">
      <img src="siddhi.jpeg">
    </a>

    <!-- the username -->
    <h1>SIDDHI PATIL</h1>

    <!-- and role or location -->
    <h2>DEVELOPER</h2>

  </header>

  <!-- bit of a bio; who are you? -->
  <div class="profile-bio">

    <p>"A developer is an individual who is responsible for creating or working on the development of a product or service."</p>

  </div>

  <!-- some social links to show off -->
  <ul class="profile-social-links">

    <!-- twitter - el clásico  -->
    <li>
      <a href="https://twitter.com/tutsplus">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-twitter.svg">
      </a>
    </li>

    <!-- envato – use this one to link to your marketplace profile -->
    <li>
      <a href="https://envato.com">
        <img src="mail.png">
      </a>
    </li>

    <!-- codepen - your codepen profile-->
    <li>
      <a href="https://codepen.io/tutsplus">
        <img src="insta.png">
      </a>
    </li>

    <!-- add or remove social profiles as you see fit -->

  </ul>

</aside>
</div>

<div class="w3-col m4 w3-margin-bottom "><br><br><br>
<aside class="card" style="margin-top: 75px; margin-left: 90px;"> 
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Mumbai,India</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +91 8879097088</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +91 8459246785</p
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: <a href="mailto:webmaster@example.com">codelabconnect@gmail.com</a></p>
</aside>
</div>

</div>
</div><br><br>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="http://www.codelab.epizy.com" title="W3.CSS" target="_blank" class="w3-hover-text-green">CODELAB</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>

<?php

  
  $hostname="localhost";
  $username="root";
  $password="";
  $databaseName="cards";

 if(isset($_POST['name'])&& isset($_POST['email'])&&isset($_POST['phoneNumber'])&&isset($_POST['password'])&&isset($_POST['confirm_pass'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phoneNumber=$_POST['phoneNumber'];
      $password=$_POST['password'];
      $confirm_pass=$_POST['confirm_pass'];
      $password=md5($password);
      $confirm_pass=md5($confirm_pass);



      
  $conn =new mysqli('localhost','root','','cards');
  // if($conn->connect_error){
  //  die('connection Failed:'.$conn->connect_error);
  //}
      
      if($password===$confirm_pass){

     
    $stmt=$conn->prepare("insert into members(name,email,phoneNumber,password,confirm_pass)VALUES(?,?,?,?,?)");
    $stmt->bind_param("ssiss",$name,$email,$phoneNumber,$password,$confirm_pass);
    $stmt->execute();
    $stmt->close();
    $conn->close();

            echo "User registered successfully";

            }else{
            echo "Not registered";
            }
 
}