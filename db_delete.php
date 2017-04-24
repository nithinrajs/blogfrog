<?php
  include("config.php");
  $sql = "DROP TABLE blog";
  if(mysqli_query($conn,$sql))
  {
    echo "BLOG DELETED";
    
  }
else
{
  echo "NOT DELETED!";
}

?>