<?php
 session_start();
 include("config.php");
 $delid = $_POST["delid"];
 $delete = "DELETE from blog where blogid = '$delid'";
 $reset = "ALTER TABLE blog AUTO_INCREMENT = 1";

 mysqli_query($conn,$delete);
 mysqli_query($conn,$reset);
 header("Location: ./acc.php");

?>