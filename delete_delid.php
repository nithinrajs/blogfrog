<?php
 session_start();
 include("config.php");
 $delid = $_POST["delid"];
 $delete = "DELETE from blog where blogid = '$delid'";
 mysqli_query($conn,$delete);
 header("Location: ./acc.php");

?>