<?php
 define("DS",DIRECTORY_SEPARATOR); // THIS USED TO MAKE /
 define("APP_PATH",realpath(dirname(__FILE__))); // tHIS path of folder of project
 require_once APP_PATH.DS."Application".DS."config.php";
 require_once APP_PATH.DS."Application".DS."Lib".DS."Autolader.php";
 spl_autoload_register(array("Autolader","autoloadlib"));
 spl_autoload_register(array("Autolader","autoloadContoller"));
 spl_autoload_register(array("Autolader","autoloadModels"));

  $x = new Application(); 
  // $y =  new Movies();
  
?>