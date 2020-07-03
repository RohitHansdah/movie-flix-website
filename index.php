<!DOCTYPE html>
<html>
<head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" href="style.css">
   <title>Movie flix</title>
   <style>
     table{
       margin: 1% 27%;
       width: 50vw;
       text-align: center;
     }
     table,th,td{
       padding: 5%;
     }
   </style>
</head>
<body>
  <?php require_once 'create.php' ?>
  <?php require_once 'update.php' ?>
  <?php require_once 'delete.php' ?>
  <div class="header">
    <h2>Movie flix</h2>
  </div>
  <div class="back">
  </div>
  <div class="header">
    <h3>Watch list</h3>
  </div>
  <div class="container">
    <?php
       $connection=mysqli_connect('localhost','root','','movieflix_database');
       $sql="SELECT * FROM `movieflix_table`";
       $result = mysqli_query($connection, $sql);
       $rowcount= mysqli_num_rows($result);
       if ($rowcount> 0)
       {
         echo "<table>
                 <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Date of release</th>
                  </tr>";
           while($row = $result->fetch_assoc())
           {
                 echo "<tr><td>". $row["id"]."</td><td>".$row["title"]."</td><td>". $row["genre"]."</td><td>".$row["date_of_release"]."</td></tr>";
           }
           echo "</table>";
       }
       else
       {
            echo "";
       }
       mysqli_close($connection);
     ?>
  </div>
  <div class="all_buttons">
    <button id="create">Create</button>
    <button id="edit">Edit</button>
    <button id="delete">Delete</button>
  </div>
  <form id="create-form" action="create.php" method="POST">
    <input type="text" placeholder="movie name" name="create-title"/>
    </br>
    </br>
    <input type="text" placeholder="genre" name="create-genre"/>
    </br>
    </br>
    <input type="date" placeholder="release date" name="create-date"/>
    </br>
    </br>
    <input type="submit" class="btn" value="Save" name="create-btn"/>
  </form>
  <form id="update-form" action="update.php" method="POST">
    <input type="text" placeholder="movie id" name="update-id"/>
    </br>
    </br>
    <input type="text" placeholder="movie name" name="update-title"/>
    </br>
    </br>
    <input type="text" placeholder="genre" name="update-genre"/>
    </br>
    </br>
    <input type="date" placeholder="release date" name="update-date"/>
    </br>
    </br>
    <input type="submit" class="btn" value="Update" name="update-btn"/>
  </form>
  <form id="delete-form" action="delete.php" method="POST">
    <input type="text" placeholder="movie id" name="delete-id"/>
    </br>
    </br>
    <input type="submit" class="btn" value="OK" name="delete-btn"/>
  </form>
  <script src="script.js"></script>
</body>
</html>
