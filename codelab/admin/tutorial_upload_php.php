<?php

  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con,'cards');
  
  // if($con){
  //  echo "connection succussful";
  // }else{
  //  echo "no connection";
  // }

  if (isset($_POST['upload'])) {

   // $image_text=$_POST['image_text'];
    $topic=$_POST['topic'];
    $link=$_POST['link'];
    $description=$_POST['description'];

      $insertuery = "INSERT INTO tutorials (topic, link, description) VALUES ('$topic', '$link', '$description')";

     $query=mysqli_query($con, $insertuery);

      if($query){
        echo '<script type="text/javascript">

          window.onload = function () { alert("Tutorials uploaded successfully !!"); }

            </script>';
      }
      else{
        echo '<script type="text/javascript">

          window.onload = function () { alert("Tutorials upload unsuccessful !!"); }

            </script>';
      }

 }

 else{

    echo "No btn has been clicked";

 }

?>

