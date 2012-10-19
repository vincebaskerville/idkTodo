<?php	

	/* include ("../../inc/config.inc.php"); */
	
  @ $db = new mysqli('external-db.s69392.gridserver.com', 'db69392_idktodo', 'happyness', 'db69392_idktodo');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

	// CLIENT INFORMATION
	$idk = htmlspecialchars_decode($_POST['idk']);
    $query = "UPDATE todo_tasks SET complete = 'no' WHERE tasks LIKE '".$idk."'";
    
    $result = $db->query($query);
	
	if (!$result) {
		echo "<br /> wtf";
	}

    

?>
