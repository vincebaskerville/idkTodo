<?php

// include function files for this application
require_once('inc/todo_fns.php');
session_start();

//create short variable names
$username = $_POST['username'];
$passwd = $_POST['passwd'];
$_SESSION['valid_list'] = $_POST['listname'];
$menu = $_POST['menu'];

if ($username && $passwd && $_SESSION['valid_list']) {
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

do_html_header('Tasks');
do_top_logoSM_out();
	
	  if (!isset($_SESSION['valid_list']))  {
	  	echo "Something broke... your list can't be pulled up  :'(";
      } else {
      	echo "current list name is ".$_SESSION['valid_list'].".<br />";      }

?>

<div class="Content span-16 last"  id="form-right">
	    
	    	<div class="tpnav">
	    		<h3 id="idkLists"><a href="member.php">&#171;my.Lists&trade;</a> &nbsp;</h3> <?php	echo " Edit &#187; <form class=\"finline\" action=\"edit.php\" method=\"post\">[<input class=\"awesome_Edit\" type=\"submit\" name=\"listname\" value=\"".$_SESSION['valid_list']."\" /></form>]"	?>   | <?php	echo "DELETE &#187; <form class=\"finline\" action=\"delete.php\" method=\"post\">[<input class=\"awesome_Edit\" type=\"submit\" name=\"listname\" value=\"".$_SESSION['valid_list']."\" /></form>]"	?>  
	    		
	    		  <!-- | Share -->
	    		
	    	</div>
	    		
	    	<!-- Add todo's -->
			<div id="add" class="edit">			    
					<form id="dummy" action="tasks.php" method="post">
		
			    			<p class="pad0">
				    			<input type="text" class="title" name="todo" id="todo" placeholder="Add Todo Here"> &nbsp;
				    			<input type="image" class="whiteButton nudgeDown" value="Add idk.List" src="inc/images/add-button.png"><br />
			        		</p>	
			    	</form>
			    
			<!-- Incomplete todo's -->
        	<div id="home" selected="true">  
        	
			    	<form>  				        	
							<h3 class="itasks"><ul id="sortme" class="incomplete"> <!-- INCOMPLETE -->
					
						<?php							
							// get the tasks this user has saved
							if ($tasks_array = get_user_tasks_no($_SESSION['valid_user'], $_SESSION['valid_list'])) {
							  display_user_tasks($tasks_array);
							}
						?>		
						
							</ul></h3>
							<br />
			        		
			 <!-- Completed todo's -->
			 
			        	<div class="cbSelected alt"><ul class="complete"> <!-- COMPLETE -->
						<?php
						
							// this is where the list (COMPLETE) is actually getting printed out 1st
							
							// get the tasks this user has saved
							if ($tasks_array = get_user_tasks_yes($_SESSION['valid_user'], $_SESSION['valid_list'])) {
							  display_user_tasks_checked($tasks_array);
							}
							
						?>
						</ul></div>	
						
					</form>
			        
			        
			        <br />
			</div>

	    	</div>
	<!-- </div> -->

							
							
						

<?php




// give menu of options
//display_user_menu();

do_html_footer();
?>
