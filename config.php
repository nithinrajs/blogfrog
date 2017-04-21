 <?php
     $server = "localhost";
     $username = "root";
     $password = "";
     $db = "BlogFrog";
      $conn = mysqli_connect("$server","$username","$password","$db");
      
       if(!$conn)
        {
           die("Error Occured while connecting to server: ".mysqli_connect_error()."<br />");
        }
      else
        {
        echo "Server connection has been established!<br /><br />";
       }
 ?>