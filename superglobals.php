<?php
var_dump($_SERVER);
echo $_SERVER['REQUEST_METHOD']."<br>";
echo $_SERVER['PHP_SELF']."<br>";



$x = 75;
  
function myfunction() {
  echo $GLOBALS['x']."<br>";
}

myfunction()



?>