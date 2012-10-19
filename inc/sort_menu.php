<?php
  
// Connecting to Database
mysql_connect('external-db.s69392.gridserver.com', 'db69392_idktodo', 'happyness') or die ('Cant Connceto to MySQL');

// Selecting Database
mysql_select_db('db69392_idktodo') or die ('Cant select Database');

$menu = $_POST['menu'];
for ($i = 0; $i < count($menu); $i++) {
mysql_query("UPDATE todo_tasks SET sort = ".$i." WHERE task_id =" .$menu[$i]."") or die(mysql_error());
 
  //mysql_query("UPDATE 'itodo' SET 'sort'=" . mysql_real_escape_string($i) . " WHERE 'id'='" . mysql_real_escape_string($menu[$i]) . "'") or die(mysql_error());
}
?>

