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

    $table_1 = "CREATE TABLE users(
      id int(11) AUTO_INCREMENT,
      name varchar(240) NOT NULL,
      username varchar(240) NOT NULL UNIQUE,
      password varchar(240) NOT NULL,
      date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
      PRIMARY KEY(id, name))";
   
    if(mysqli_query($conn,$table_1))
    {
      echo "USERS Table Created!<br />";
    }
     else
      {
        echo "USERS Table Creation Failed! ".mysqli_error($conn);
      }

    $table_2 = "CREATE TABLE blog(
      blogid int(11) AUTO_INCREMENT PRIMARY KEY,
      id int(11),
      name varchar(240),
      username varchar(240),
      article varchar(240),
      blog longtext,
      date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
      FOREIGN KEY(id, name) REFERENCES users(id, name))";

    if(mysqli_query($conn,$table_2))
    {
      echo "BLOG Table Created!<br />";
    }
    else
    {
      echo "BLOG Table Creation Failed! ".mysqli_error($conn);
    }
     mysqli_close($conn); 
  
  ?>