<?php
  if(isset($_POST['update-btn']))
  {
     $connection=mysqli_connect('localhost','root','','movieflix_database');
     $id=$_POST['update-id'];
     $title=$_POST['update-title'];
     $genre=$_POST['update-genre'];
     $date=$_POST['update-date'];
     if($id!="" && $title!="" && $genre!="" && $date!="")
     {
       $sql="UPDATE `movieflix_table` SET `title`='$title',`genre`='$genre',`date_of_release`='$date' WHERE id='$id'";
       mysqli_query($connection,$sql);
     }
     mysqli_close($connection);
     header('location:index.php');
  }
?>
