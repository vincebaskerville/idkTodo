<?php	
//require_once('todo_fns.php');
  require_once('user_auth_fns.php');
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
	
  @ $db = new mysqli('external-db.s69392.gridserver.com', 'db69392_idktodo', 'happyness', 'db69392_idktodo');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

	// CLIENT INFORMATION
	$idk = htmlspecialchars_decode($_POST['idk']);
    //$query = "insert into itodo values ('NULL','".$idk."','no','0')";
    
    $query = "INSERT into todo_lists values ('".$valid_user."','".$idk."');";
    
  	$result = $db->query($query);
	
	if (!$result) {
		echo "<br /> wtf";
	}
			
			
			
/*

							
							$query = "SHOW tables";    
							$result = mysql_query($query) or die ('Query couldn\'t be executed');  
							while ($row = mysql_fetch_row($result)) {
	echo "<li class=\"editable\" id=\"".$row[0]."\"><a href=\"lists/".$row[0]."\">".$row[0]."</a></li> \n";
							}
*/
							
    

?>
