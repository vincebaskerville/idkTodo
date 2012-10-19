<?php
require_once('db_fns.php');
			

function get_user_lists($username) {
  //extract from the database all the lists this user has stored

  $conn = db_connect();
  $result = $conn->query("select list_name
                          from todo_lists
                          where user_id = '".$username."'");
  if (!$result) {
    return false;
  }

  //create an array of the lists
  $lists_array = array();
  for ($count = 1; $row = $result->fetch_row(); ++$count) {
    $lists_array[$count] = $row[0];
  }
  return $lists_array;
}

function get_user_tasks_no($username, $listname) {
  //extract from the database all the tasks this user has stored

  $conn = db_connect();
  $result = $conn->query("SELECT *
                          FROM todo_tasks
                          WHERE user_id = '".$username."'
                          AND list_name = '".$listname."'
                          AND complete = 'no'
                          ORDER by sort ASC");
/*
  if (!$result) {
    return false;
  }
*/

  //create an array of the tasks
/*
  $tasks_array = array();
  for ($count = 1; $row = $result->fetch_row(); ++$count) {
    $tasks_array[$count] = $row[0];
  }
*/
							
	if ($result) {
		// this is where the list (INCOMPLETE) is actually getting printed out 1st
	  
	  $num_results = $result->num_rows;	
	  for ($i=0; $i <$num_results; $i++) {
	     $row = $result->fetch_assoc();
	     echo "<li id=\"menu_".$row['task_id']."\"><input type=\"checkbox\"";
	     echo "value=\"".stripslashes($row['tasks'])."\">";
	     echo stripslashes($row['tasks']);
	     echo "</li> \n";
	     
	  }}
  
  
  //return $tasks_array;
}

function get_user_tasks_edit($username, $listname) {
  //extract from the database all the tasks this user has stored

  $conn = db_connect();
  $result = $conn->query("SELECT *
                          FROM todo_tasks
                          WHERE user_id = '".$username."'
                          AND list_name = '".$listname."'
                          AND complete = 'no'
                          ORDER by sort ASC");
                          
   	if ($result) {
		// this is where the list (INCOMPLETE) is actually getting printed out 1st
	  
	  $num_results = $result->num_rows;	
	  for ($i=0; $i <$num_results; $i++) {
	     $row = $result->fetch_assoc();
	     echo '<li class="editable edit" id="'.$row['task_id'].'">'.$row['tasks'].'</li>';
	     //echo "value=\"".stripslashes($row['tasks'])."\">";
	     //echo stripslashes($row['tasks']);
	     echo " \n";
	     
	  }}
  
  
  //return $tasks_array;
}

function get_user_tasks_yes($username, $listname) {
  //extract from the database all the tasks this user has stored

  $conn = db_connect();
  $result = $conn->query("SELECT tasks
                          FROM todo_tasks
                          WHERE user_id = '".$username."'
                          AND list_name = '".$listname."'
                          AND complete = 'yes'");
  if (!$result) {
    return false;
  }

  //create an array of the tasks
  $tasks_array = array();
  for ($count = 1; $row = $result->fetch_row(); ++$count) {
    $tasks_array[$count] = $row[0];
  }
  return $tasks_array;
}





?>
