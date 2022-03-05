<?php

$con = mysqli_connect('localhost','root');
  mysqli_select_db($con,'cards');

?>


   <?php 
    if(isset($_GET["id"]))
    {
      $id=$_GET['id'];
      $id=mysqli_real_escape_string($con,$id);
      $sql = "SELECT * FROM cards WHERE id = $id";
      $query=mysqli_query($con,$sql);
      if(mysqli_num_rows($query)>0)
      {
        $row=mysqli_fetch_assoc($query);
        $name=$row['name'];
        $type=$row['type'];
        $description=$row['description'];
        $link=$row['link'];
      
    
    ?>
    <!-- <h2><?php echo $name ?></h2> -->

    <?php   
    }
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">

    <style type="text/css">
        .wrapper{
            margin-top: 30px;
        }



      
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}



.w3-bar .w3-button {
  padding: 16px;
}
</style>

    </style>
</head>
<body>

<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide" style="font-family: Oswald; color: black;"><b>CODELAB</b></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="index2#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="index2#courses" class="w3-bar-item w3-button"><i class="fa fa-th"></i> COURSES</a>
      <a href="index2#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="totorials" class="w3-bar-item w3-button"><i class="fa fa-file-text-o"></i> TUTORIALS</a>
      <a href="notice" class="w3-bar-item w3-button"><i class="fa fa-cog"></i> NOTICES</a>
    </div>

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>

      <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#courses" onclick="w3_close()" class="w3-bar-item w3-button">COURSES</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <a href="totorials" class="w3-bar-item w3-button"><i class="fa fa-file-text-o"></i> TUTORIALS</a>
  <a href="notice" class="w3-bar-item w3-button"><i class="fa fa-cog"></i> NOTICES</a>
</nav>
</div>
</div>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <div class="page-header">
                        <h1><b><?php echo $row["name"]; ?></b></h1>
                    </div>
                    <div class="form-group">
                        <h4>Description</h4>
                        <p class="form-control-static"><?php echo $row["description"]; ?></p>
                    </div>
                    <div class="form-group">
                        <h2 class="form-control-static"><b>EXAM INFORMATION</b></h2>
                        <h4 class="form-control-static">Rules:</h4>
                        <p class="form-control-static">1.Click Start Test to attempt the exam.</p>
                        <p class="form-control-static">2.After attempting all requestions submit Your exam.</p>
                        <p class="form-control-static">3.Do not refresh link while attempting exam.</p>
                        <p class="form-control-static">4.Student should have knowledege of the course and well prepared for exam.</p>
                        <p class="form-control-static">5.Before attempting the exam read all the guidelines properly.</p>

                    </div>  
                   </div>
                <div class="col-sm-4">
                    <div class="form-group" style="margin-top: 27%;">
                        <h4 class="form-control-static"><b>Details:</b></h4>
                        <p class="form-control-static"><b>Subject name</b> : <?php echo $row["name"]; ?></p>
                        <p class="form-control-static"><b>Course type</b> : <?php echo $row["type"]; ?></p>
                        <center><button><a href="<?php echo $row["link"]; ?>">START TEST</a></button></center>
                    </div>
                    
                </div>
            </div>        
        </div>
    </div>
</div>



    <script type="text/javascript">
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


