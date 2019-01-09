<?php
function ampdb_create($name)
{
  return fopen("./" . $name . ".json", "a");
}
function ampdb_set($db, $key, $value)
{
  $contents = fread(fopen($db, "a"), filesize($db));
  $json = json_decode($content);
  $json[$key] = $value;
  fwrite(fopen($db, "a"), json_encode($json))
}
function ampdb_get_all($db, $key, $value)
{
  return json_decode(fread(fopen($db, "a")))
}
function ampdb_get($db)
?>
