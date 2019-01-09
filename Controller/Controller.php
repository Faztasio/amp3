<?php
include "./AmpDB.php";

class Controller
{
  $_CONTROLLERS = {};
  function __construct()
  {
    print "Amp3 Controller starting."
  }
  function Create($name, $callback)
  {
    $_CONTROLLERS[$name] = $callback;
  }
  function Call($name)
  {
    call_user_func($_CONTROLLERS[$name], ampDB);
  }
}
?>
