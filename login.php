<html>
  <?php
      session_start();
  ?>
  <head>
  
  </head>
  <body>
    <?php
        
    include("config.php"); 
    $_SESSION["user"] = mysqli_real_escape_string($conn,$_POST['username']);
    $pass= mysqli_real_escape_string($conn,$_POST['password']);
    //$_SESSION["pass"] = mysqli_real_escape_string($conn,$_POST['password']);
    $user = $_SESSION["user"];
   // $pass = $_SESSION["pass"];
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $p = md5($pass);
      
      $sql = "SELECT * FROM users where username = '$user'";
      $result = mysqli_query($conn,$sql);
      
      if(mysqli_num_rows($result) > 0)
      {
         while($row = mysqli_fetch_assoc($result))
         {
           if($row['password'] == $p)
           {
             $_SESSION["name"] = $row['name'];
             $_SESSION["id"] = $row['id'];
             echo "You have logged in!";
             header('Location:./acc.php');
           }
           else
           {
             echo "Incorrect Credentials!";
             session_unset();
             session_destroy();
           }
         }
      }
      else
      {
          echo "User does not exist, Please sign up";
          session_unset();
          session_destroy();
       }
    }
       
    ?>
  </body>
</html>