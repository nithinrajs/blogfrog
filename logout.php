<?php 
session_start();

echo "YOU HAVE LOGGED OUT SUCCESFULLY!";
session_unset();
session_destroy();

?>