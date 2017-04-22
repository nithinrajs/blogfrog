<?php
  session_start();
?>
<html>
  <body>
    <h2>BLOG</h2>
    <?php
      echo "Hi ".$_SESSION["name"]."<br />";
      echo "USER: ".$_SESSION["user"]."<br />";
      echo "ID: ".$_SESSION["id"]."<br />";
    ?>
  </body>
</html>