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
?>

	<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>idkTodo&trade; | Quick & Simple GTD app | <?php echo $title;?></title>        
    <link rel="Shortcut Icon" href="http://idktodo.com/favicon.ico">

    
    <meta name="keywords" content="to-do list, to do list, iphone, tasks, todo, todos, smart phone, black berry, android" />
	<meta name="description" content="idkTodo app is the web's newest loveable and easy to-do list maker. idkTodo works on the iPhone, HTC, android, blackberry & any other smartphones. Remember those important things Never don't know again!." />
	<meta name="author" content="VJ&Co(tm)" />
	<meta name="copyright" content="Copyright (c) 2010 VJ&Co(tm)" />

    <!-- Framework CSS -->
    <link rel="stylesheet" href="inc/css/blueprint/gridcs.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="inc/css/blueprint/print.css" type="text/css" media="print">
    <link rel="stylesheet" href="inc/css/blueprint/src/typography.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="inc/css/blueprint/src/forms.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="inc/css/style.css" type="text/css" media="screen, projection">
    
    
    <!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

    <!-- Import fancy-type plugin for the sample page. -->
    <link rel="stylesheet" href="inc/css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
    
    <!-- Jquery JS --> 
    <script src="inc/js/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="inc/js/jquery-ui-1.7.2.custom.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="inc/js/tasks.js" type="text/javascript" charset="utf-8"></script>
    <script src="inc/js/mojo.js" type="text/javascript" charset="utf-8"></script>
    
    <script>

    jQuery(document).ready(function() {
    $("form input, form select").live('keypress', function (e) {
    if ($(this).parents('form').find('button[type=submit].default, input[type=submit].default').length <= 0)
    return true;

    if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
    $(this).parents('form').find('button[type=submit].default, input[type=submit].default').click();
    return false;
    } else {
    return true;
    }
    });
    });  

</script>
    
    
  </head>
  <body>

<?php
//do_html_header('Tasks');
do_top_logoSM_out();
	
	  if (!isset($_SESSION['valid_list']))  {
	  	echo "WTF!!!!";
      } else {
      	echo "current list name is ".$_SESSION['valid_list'].".<br />";      }

?>

<div class="Content span-16 last"  id="form-right">
	    
	    	<div class="tpnav">
	    		<h3 id="idkLists"><a href="member.php"> &#171;my.Lists&trade; </a> </h3> <em> Click task to make edit. </em>  
	    	</div>
	    		

			    
			<!-- Incomplete todo's -->
        	<div id="home" selected="true">  
        	
			    	  				        	
							<h3 class="itasks"><ul class="incomplete"> <!-- INCOMPLETE -->
							<br />
					
						<?php							
							// get the tasks this user has saved
							if ($tasks_array = get_user_tasks_edit($_SESSION['valid_user'], $_SESSION['valid_list'])) {
							  display_user_tasks_edit($tasks_array);
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
							  display_user_tasks_checked_disabled($tasks_array);
							}
							
						?>
						</ul></div>	
			        
			        
			        <br />
			</div>

	    	</div>
	    	
	 <!-- </div> -->

							
							
						

<?php




// give menu of options

do_html_footer();
?>
