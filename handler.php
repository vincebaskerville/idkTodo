<?php
//require("inc/db_fns.php");

	DEFINE ('DB_USER', 'db69392_idktodo');  
	DEFINE ('DB_PASSWORD', 'happyness');  
	DEFINE ('DB_HOST', 'external-db.s69392.gridserver.com');  
	DEFINE ('DB_NAME', 'db69392_idktodo'); 
	
	$connection = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or 
	die('Connection to the specified database couldn\'t be established');  
	mysql_select_db(DB_NAME)  or 
	die ('Specified database couldn\'t be selected'); 
	

if (isset($_POST['task_id']) && isset($_POST['task'])) {
	$todoid = htmlspecialchars($_POST['task_id']);
	$task = addslashes($_POST['task']);
	
	$query = "UPDATE todo_tasks SET tasks ='$task' WHERE task_id='$todoid'";   
	$result = mysql_query($query) or die ('Query couldn\'t be executed');
	if ($result) {echo 1;}
} 
 
?> 