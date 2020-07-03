<?php
  if(isset($_POST['delete-btn']))
  {
     $connection=mysqli_connect('localhost','root','','movieflix_database');
     $id=$_POST['delete-id'];
     if($id!="")
     {
       $sql="DELETE FROM `movieflix_table` WHERE id='$id'";
       mysqli_query($connection,$sql);
     }
     mysqli_close($connection);
     header('location:index.php');
  }
?>
