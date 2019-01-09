<?php
function ampdb_create($name)
{
  return fopen("./" . $name . ".json", "a");
}
function ampdb_set($db, $key, $value)
{
  $contents = fread(fopen($db, "a"), filesize($db))
}
?>
