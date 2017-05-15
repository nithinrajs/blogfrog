<?php
  session_start();
?>
<html>
  <body>
    <h2>DELETE</h2><br />
    <p>Enter the Blog ID of the article you would like to delete!</p><br /><br />
    <?php
      include("config.php");
      echo "Hi ".$_SESSION["name"]."<br />";
      //echo "USER: ".$_SESSION["user"]."<br />";
      //echo "ID: ".$_SESSION["id"]."<br />";
      $id = $_SESSION["id"];
      $display = "SELECT blogid,article,blog,date FROM blog where id = '$id'";
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
    
    <form action="delete_delid.php" method="post">
       <input type="text" name="delid" placeholder="BLOG ID">
      <input type="submit" value="DELETE"><br />
    </form>
    <ul>
      <li><a href="./acc_create.php">CROAK A BLOG</a></li>
      <li><a href="">EDIT A BLOG</a></li>
      <li><a href="./logout.php">LOGOUT</a></li> 
    </ul>
  </body>
</html>