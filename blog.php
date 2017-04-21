<?php
  session_start();
?>
<html>
  <body>
    <h2>BLOG</h2>
    <?php
      echo "Hi ".$_SESSION["user"];
    ?>
  </body>
</html>