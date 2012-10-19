<?php

// include function files for this application
require_once('inc/todo_fns.php');
session_start();

  if (!filled_out($_POST)) {
		    // unsuccessful login
		    do_html_header('Problem:');
		    do_top_logoSM_out();
		    echo '<div class="Content span-16 last"  id="form-right">	';
		    echo '<h2>You could not be logged in.<br />
		          There was an error with your username &/or password.</h2>';
		    echo '<h3><a href="login.php">Try again.</a></h3> <br /> <br /><br /> <br /><br /> <br /><br /> <br />&nbsp;';
		    //do_html_url('login.php', 'Login');
		    do_html_footer2();
		    exit;
  }

//create short variable names
$username = $_POST['username'];
$passwd = $_POST['passwd'];
$_SESSION['valid_list'] = $_POST['listname'];


if ($username && $passwd) {
// they have just tried logging in
  try  {
    login($username, $passwd);
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $username;
  }
  catch(Exception $e)  {
    // unsuccessful login
    do_html_header('Problem:');
    do_top_logoSM_out();
    echo '<div class="Content span-16 last"  id="form-right">	';
    echo '<h2>You could not be logged in.<br />
          There was an error with your username &/or password.</h2>';
    echo '<h3><a href="login.php">Try again.</a></h3> <br /> <br /><br /> <br /><br /> <br /><br /> <br />&nbsp;';
    //do_html_url('login.php', 'Login');
    do_html_footer2();
    exit;
  }
}

/* do_html_header('Home'); */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>idkTodo&trade; | Quick & Simple GTD app | <?php echo $title;?></title>
    
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
    <script src="inc/js/addlist.js" type="text/javascript" charset="utf-8"></script>
    
    <script type="text/javascript" src="inc/js/greybox.js"></script>
    <link href="inc/css/greybox.css" rel="stylesheet" type="text/css" media="all" />

    
        <script type="text/javascript">
      var GB_ANIMATION = true;
      $(document).ready(function(){
        $("a.greybox").click(function(){
          var t = this.title || $(this).text() || this.href;
          GB_show(t,this.href,600,750);
          return false;
        });
      });
    </script>
 
  <script language="JavaScript" type="text/javascript">

function listname ( selectedtype )
	{
	 document.u_lists.listname.value = selectedtype;
	 document.u_lists.submit();
	}

</script>
  </head>
  <body>

<?php
do_top_logoSM_out();
check_valid_user();
?>

<div class="Content span-16 last"  id="form-right">
	    
	    	<div class="tpnav">
	    		<h3 id="idkLists">my.Lists&trade; </h3> <em> This set -> </em>  Edit
	    	</div>
	    		
	    	<!-- Add todo's -->
			<div id="add" class="edit">		
		
			    			<p class="pad0">
				    			<input type="text" class="title" name="todo" id="todo" placeholder="Create a new list"> &nbsp;
				    			<input type="image" class="whiteButton nudgeDown" value="Add idk.List" src="inc/images/add-button-list.png"><br />		    	
			        		</p>
			    
			<!-- Incomplete todo's -->
        	<div id="home" selected="true">  
        	
        			    	  				        	
							<h3 class="itasks"><ul class="incomplete">
							<br />
					
						<?php
							
							// get the bookmarks this user has saved
							if ($lists_array = get_user_lists($_SESSION['valid_user'])) {
							  display_user_lists($lists_array);
							}
						?>		
						
							</ul></h3>
							
			        
			        
			        
			        <br />
			</div>
					

	    	</div>
	<!-- </div> -->

							
							
						

<?php




// give menu of options
display_user_menu();
?>
	<h3 class="alt noPadd">
		Major features not working yet: Edit <strike> & delete </strike> for lists.<br />
	</h3><br />
	<p class="alt">This web.app(lication) is currently in alpha, meaning still early in development. <br /> Please help me out by reporting any bugs &/or issues you may experience. Thank you!  -vince <br />

	<br />
		<strong>Upcoming scheduled (server) maintenance</strong> <br />
		n/a <br />
	</p>
<?php
do_html_footer();
?>
