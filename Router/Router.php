<?php
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
    } elseif($route == "*") {
      $_ROUTES[$route] = $controller;
    }
  }
  function
}
?>
