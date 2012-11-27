<?php
//require("inc/db_fns.php");

	DEFINE ('DB_USER', '');  
	DEFINE ('DB_PASSWORD', '');  
	DEFINE ('DB_HOST', '');  
	DEFINE ('DB_NAME', ''); 
	
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