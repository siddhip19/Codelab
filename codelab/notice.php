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

.card {
  
  margin-left: 10px;
  border-radius: 25px ;
  border: 8px solid grey;
  padding: 16px;
  background-color: black;
  color: white;

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("http://i.xp.io/sb6ukc5.jpg");
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
      <a href="index2#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="index2#courses" class="w3-bar-item w3-button"><i class="fa fa-th"></i> EXAMS</a>
      <a href="index2#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="totorials" class="w3-bar-item w3-button"><i class="fa fa-file-text-o"></i> TUTORIALS</a>
      <a href="notice" class="w3-bar-item w3-button"><i class="fa fa-cog"></i> NOTICES</a>
     <!--  <button class="w3-bar-item w3-button" data-toggle="modal" data-target="#regModal"><i class="fa fa-user"></i> REGISTER</button>
      <button class="w3-bar-item w3-button" data-toggle="modal" data-target="#loginModal"><i class="fa fa-user"></i> LOGIN</button> -->
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
  <a href="#courses" onclick="w3_close()" class="w3-bar-item w3-button">Exams</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <button data-toggle="modal" data-target="#regModal" onclick="w3_close()" class="w3-bar-item w3-button">REGISTER</a>
  <button data-toggle="modal" data-target="#loginModal" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
</nav>

<div class="row" style="padding:70px 16px">
  <h3 class="w3-center" ><b>Notices</b></h3>
  <p class="w3-center w3-large">Notices uploaded by faculty </p><br>

  <?PHP
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con,'cards');

  // if($con){
  //  echo "connection succussful";
  // }else{
  //  echo "no connection";
  // }


  $query = " SELECT `topic`,  `description` FROM `notices` order by id ASC ";

  $queryfire = mysqli_query($con, $query);

  $num = mysqli_num_rows($queryfire);

  if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
      ?>

  <div class="col-sm-4" style="margin-top: 35px;">
    <div class="card">
      <div class="card-body" >
        <center><h5 class="card-title"><?php echo $product['topic'];  ?></h5></center>
        <p class="card-text" style="min-height: 120px;"><?php echo $product['description'];  ?></p>
       </div>
    </div>
    </div>

    <?php   
      }
    }
    ?>
   
    </div>

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
