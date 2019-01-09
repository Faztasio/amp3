<?php
include "./Controller.php";
$Controller = new Controller();

$Controller->Create("amp3.homepage", function($ampdb, $route)
{
  $ampdb.Create("Amp3")
  if($route[0] === "set") {
    $key = $route[1];
    $val = $route[2];
    
  }
})
?>
