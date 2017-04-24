<?php
  session_start();
  include("config.php");
  $article = $_POST["article"];
  $blog = $_POST["blog"];
  $id = $_SESSION["id"];
  $name = $_SESSION["name"];
  $user = $_SESSION["user"];  
  $croak = "INSERT into blog(id,name,username,article,blog) VALUES('$id','$name','$user','$article','$blog')";
  if(mysqli_query($conn,$croak))
  {
    echo "Article added to your POND!";
    header("Location: ./acc.php");
  }
?>