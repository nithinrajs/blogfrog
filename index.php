<?php
  include("config.php");
?>
<html>
  <head>
    <title>BlogFrog</title>
  </head>
  <body>
    <h1>Welcome to BlogFrog.com</h1><br /><br />
    <h2>POND</h2><br /><br />
    <?php
        $sql = "SELECT blogid,name,article,blog,date FROM blog";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
             echo "Name: ".$row['name']."<br />ARTICLE: ".$row['article']."<br />DATE: ".$row['date']."<br />";
             echo $row["blog"]."<br /><br />";
          }
        }
        else
        {
             echo "NO BLOGS AVAILABLE<br />";
        }
    
    ?>
    
    
    <ul>
      <li><a href="./login.html">LOGIN</a></li>
    </ul>
  </body>
</html>