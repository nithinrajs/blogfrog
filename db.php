   <?php
    
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "BlogFrog";
    $conn = mysqli_connect("$server","$username","$password");      //Connect to the Server
    if(!$conn)
     {
      die("Error Occured while connecting to server: ".mysqli_connect_error()."<br />");
     }
    else
      {
         echo "Server connection has been established!<br />";
      }
 
    $create = "CREATE DATABASE BlogFrog";           //SQL Query DB Creation.
  
    if(mysqli_query($conn,$create))                //SQL Query implementation
      {
        echo "Database BlogFrog Created!<br />";
      }
    else
      {
        echo "Database creation Failed! ".mysqli_error($conn);
      }
  
    mysqli_close($conn);                          //SQL Connection Termination.

    $conn = mysqli_connect("$server","$username","$password","$db");
  
    if(!$conn)
      {
         die("Error Occured while connecting to server: ".mysqli_connect_error()."<br />");
      }
    else
      {
        echo "Server connection has been established!<br />";
      }

    $table = "CREATE TABLE users(
      id int(11) AUTO_INCREMENT PRIMARY KEY, 
      username varchar(240) NOT NULL,
      password varchar(240) NOT NULL,
      date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP)";
   
    if(mysqli_query($conn,$table))
    {
      echo "Table Created!<br />";
    }
     else
      {
        echo "Table Creation Failed! ".mysqli_error($conn);
      }
     mysqli_close($conn); 
  
  ?>