<?php
include "../Controllers/Controllers.php";

class Router
{
  $_ROUTES = {};
  function __construct()
  {
    print "Amp3 Router starting."
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
    if(!$_ROUTES[$route])
    {
      if($_ROUTES["*"])
      {
        $Controller->Call($_ROUTES["*"], $route);
      }
    }
    else
    {
      $Controller->Call($_ROUTES[$route], $route);
    }
  }
}
?>
