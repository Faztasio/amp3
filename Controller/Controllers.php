<?php
include "./Controller.php";

$Controller->Create('amp3.homepage', function($ampdb, $route)
{
  $ampdb.Create($route[0]);
  $ampdb.Set($route[0], $route[1], $route[2]);
  echo implode(rout)
  echo ampdb.Get($route[0], $route[1]);
})
?>
