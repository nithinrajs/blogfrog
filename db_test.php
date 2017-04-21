<?php
  include("config.php");
  
  $sql="SELECT * FROM users";
  $result = mysqli_query($conn,$sql);
  
  if(mysqli_num_rows($result) > 0)
  {
    while ($row = mysqli_fetch_assoc($result))
    {
      echo "ID: ".$row["id"]."<br />";
      echo "username: ".$row["username"]."<br />";
      echo "password: ".$row["password"]."<br />";
      echo "Date: ".$row["date"]."<br />";
    }
  }
   else
   {
     echo "No rows to display";
   }
  
 mysqli_close($conn);
?>