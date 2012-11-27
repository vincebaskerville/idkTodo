<?php

function db_connect() {
   $result = new mysqli('server.com', 'name', 'pw', 'title');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}

?>
