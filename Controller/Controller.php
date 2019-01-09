<?php
include "../AmpDB/AmpDB.php";

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
    call_user_func($_CONTROLLERS[$name], [
      Create => ampdb_create,
      Set => ampdb_set,
      Get_All => ampdb_get_all,
      Get => ampdb_get
    ]);
  }
}
?>
