<?php

function db_connect() {
   $result = new mysqli('external-db.s69392.gridserver.com', 'db69392_idktodo', 'happyness', 'db69392_idktodo');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}

?>
