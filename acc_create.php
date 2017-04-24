<?php
  session_start();
  echo "<h3>Hi, ".$_SESSION["name"]."</h3><br />";
?>
<html>
  <head>
    <title>CROAK A BLOG</title>
  </head>
  <body>
    <h2>CROAK A BLOG</h2><br />
    <form action="croak.php" method="post">
      <input type="text" name="article" placeholder="ARTICLE NAME"><br /><br />
      <textarea name="blog"  cols="130" rows="25" placeholder="Hop Into The Pond!"></textarea><br /><br />
      <input type="submit" value="CROAK">
    </form>
  </body>
</html>