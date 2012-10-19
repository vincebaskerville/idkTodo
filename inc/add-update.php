<?php	
require_once('todo_fns.php');
session_start();

//create short variable names
$username = $_POST['username'];
$passwd = $_POST['passwd'];
$listname = $_POST['listname'];

if ($username && $passwd) {
// they have just tried logging in
  try  {
    login($username, $passwd);
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $username;
    $_SESSION['valid_list'] = $listname;
  }
  catch(Exception $e)  {
    // unsuccessful login
    do_html_header('Problem:');
    echo 'You could not be logged in.
          You must be logged in to view this page.';
    do_html_url('login.php', 'Login');
    do_html_footer();
    exit;
  }
}


  $valid_user = $_SESSION['valid_user'];
  $valid_list = $_SESSION['valid_list'];
  
  @ $db = new mysqli('external-db.s69392.gridserver.com', 'db69392_idktodo', 'happyness', 'db69392_idktodo');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

	// CLIENT INFORMATION
	$idk = htmlspecialchars_decode($_POST['idk']);
    $query = "INSERT into todo_tasks values ('NULL','".$valid_user."','".$valid_list."','".addslashes($idk)."','no','0');";
  	$result = $db->query($query);
	
	if (!$result) {
		echo "<br /> wtf";
	}
			

		  
		  $num_results = $result3->num_rows;	
		  for ($i=0; $i <$num_results; $i++) {
		     $row = $result3->fetch_assoc();
		     echo "<li id=\"menu_".$row['task_id']."\"><input type=\"checkbox\"";
		     echo "value=\"".stripslashes($row['task'])."\">";
		     echo stripslashes($row['task']);
		     echo "</li> \n";
		     
		  }
    

?>
