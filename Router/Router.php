<?php
include "../Controllers/Controllers.php";

class Router
{
  $_ROUTES = {};
  function __construct()
  {
    print "Amp3 router starting."
  }
  function Page($route, $controller)
  {
    if($route === "") {
      $route = "/";
      $_ROUTES[$route] = $controller;
    } elseif($route == "*") {
      $_ROUTES[$route] = $controller;
    }
  }
  function Listen($route) {
    $keys = array_keys($_ROUTES);
    if
    foreach($key in $keys) {

    }
  }
}
?>
