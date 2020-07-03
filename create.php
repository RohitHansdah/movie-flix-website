<?php
  if(isset($_POST['create-btn']))
  {
     $connection=mysqli_connect('localhost','root','','movieflix_database');
     $title=$_POST['create-title'];
     $genre=$_POST['create-genre'];
     $date=$_POST['create-date'];
     if($title!="" && $genre!="" && $date!="")
     {
        $sql="INSERT INTO `movieflix_table`(`title`, `genre`, `date_of_release`) VALUES ('$title','$genre','$date')";
        mysqli_query($connection,$sql);
     }
     mysqli_close($connection);
     header('location:index.php');
  }
?>
