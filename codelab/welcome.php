<?php 

    if(isset($_SESSION['logged_in']))
    {
    	include 'index2.php';
        
?>

<?php

    }
    else
    {
        header("Location:index.php");
    }

?>