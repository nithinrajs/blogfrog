<html>
  <head>
  
  </head>
  <body>
    <?php
        
    include("config.php"); 
    $name=$_POST['name'];
    $user= mysqli_real_escape_string($conn,$_POST['username']);
    $pass= mysqli_real_escape_string($conn,$_POST['password']);
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    { 
      $p = md5($pass);
      $sql = "INSERT INTO users(name,username,password) VALUES('$name','$user','$p')";
      if(mysqli_query($conn,$sql))
      {
        echo "Hi, you have signed up successfully";
      }
      else
      {
        echo "Sign up was unsuccessful ".mysqli_error($conn);
      }
    }
   ?>
   
  </body>
</html>