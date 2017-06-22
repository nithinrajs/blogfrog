<?php
  session_start();
?>
<html>
  <body>
    <h2>BLOG</h2>
    <?php
      include("config.php");
      echo "Hi ".$_SESSION["name"]."<br />";
      //echo "USER: ".$_SESSION["user"]."<br />";
      //echo "ID: ".$_SESSION["id"]."<br />";
      $id = $_SESSION["id"];
      $name = $_SESSION["name"];
      //$display = "SELECT blogid,article,blog,date FROM blog where id = '$id'";
      $display = "SELECT blogid,article,blog,date FROM blog where name = '$name'";
      $result = mysqli_query($conn,$display);
      if(mysqli_num_rows($result) > 0)
      {
        while($row = mysqli_fetch_assoc($result))
        {
          echo "Blog ID: ".$row['blogid']."<br />ARTICLE: ".$row['article']."<br />DATE: ".$row['date']."<br />";
          echo $row["blog"]."<br /><br />";
        }
      }
      else
      {
        echo "NO BLOGS AVAILABLE<br />";
      }
    ?>
    <ul>
      <li><a href="./acc_create.php">CROAK A BLOG</a></li>
      <li><a href="">EDIT A BLOG</a></li>
      <li><a href="./delete.php">DELETE A BLOG</a></li>
      <li><a href="./logout.php">LOGOUT</a></li> 
    </ul>
  </body>
</html>