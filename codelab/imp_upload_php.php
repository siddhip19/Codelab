<?php

  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con,'codelabdb');
  
  if($con){
   echo "connection succussful";
  }else{
   echo "no connection";
  }

 if(isset($_POST['upload'])) {

  
    $name=$_POST['name'];
    $type=$_POST['type'];
    $description=$_POST['description'];
    $file= $_FILES['image'];

    //print_r($file);
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    if ($fileerror == 0) {
      $destfile = 'upload/'.$filename;
      echo "$destfile";
      move_uploaded_file($filepath, $destfile);

      $insertuery = "INSERT INTO `cards`(`name`, `image`, `type`, `description`) VALUES ('$name', '$destfile','$type','$description')";

     $query=mysqli_query($con, $insertuery);

      if($query){
        echo "Inserted";
      }
      else{
        echo "Not inserted";
      }

    }

 }

 else{

    echo "No btn has been clicked";

 }

?>

