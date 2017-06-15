<?php 
session_start();
session_destroy();
  header('location:index.php?1');
exit();

?>