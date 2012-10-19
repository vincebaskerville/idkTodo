<?php

function do_html_header($title) {
  // print an HTML header
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
	
	<meta name="google-site-verification" content="B46dsxpg9FNZ3pjdkyDmG1IN-mljivX0jB941DNHuFg" />

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
    



    
  </head>
  <body>


<?php
  //if($title) {
    //do_html_heading($title);
  //}
}

function do_top_logoSM_out() {
	// prints the narrow, default logo & top stuff; log out
	?>
	    <div class="containerProj">				
    	
	    	<div class="span-5 alt append-9">
				<h2 class="noPadd"><a class="btnLogo" href="index.php">idkTodo&trade;: Quick & Simple GTD app</a></h2>
			</div>
	     	
	     	<div class="span-2 last">
				<p align="center">
					<br />
					<a class="small awesome" href="logout.php">Logout</a>
				</p>
	     	</div>
		
		<div class="clear"></div>
		
		
<?php
}

function do_top_logoSM_in() {
	// prints the narrow, default logo & top stuff; log in
	?>
	

	    <div class="containerProj">				
    	
	    	<div class="span-5 alt append-9">
				<h2 class="noPadd"><a class="btnLogo" href="index.php">idkTodo&trade;: Quick & Simple GTD app</a></h2>
			</div>
	     	
	     	<div class="span-2 last">
				<p align="center">
				<br />
					<a class="small awesome" href="login.php">Login</a>
				</p>
	     	</div>
	
		<div class="span-10">
			<h2>Create Your idkTodo&trade; Account</h2>
		</div>
		
		<div class="clear"></div>

	<?php
}

function do_html_footer() {
  // print an HTML footer
?>

<div class="clear"></div>
		
		<div class="btmFooter">
			<div class="fContent">
				<div class="span-2">
					<a href="index.php"><img src="inc/images/idk-logo-sm.png" alt="idk-logo-sm" /></a>
				</div>
				<div class="span-4 push-1">
		    		<p>
					<span align="center" class="caps2"><strong><a class="large orange awesome" href="register_form.php">Sign Up FREE</a></strong></span>
					<br />
						&copy;2010 idkTodo.com <br />
						VJ&Co&trade;, llc
					</p>
				</div>
				<div class="span-5">
		    		<span class="caps">Get In Touch</span> 
		    		
		    			<ul>
		    				<li><a href="http://www.ip.whoisvince.com/" target="_blank">whois.vince&trade;</a></li>
		    				<li><a class="greybox" href="http://whoisvince.wufoo.com/forms/s7x2r7/" target="_blank">Contact vince</a></li>			
		    			</ul>
				</div>
				<div class="span-4 last">
		    		<span class="caps">Follow</span> 
		    		
		    			<ul>
		    				<li><a href="http://twitter.com/whoisvince" target="_blank">Twitter</a></li>
		    				<li><a href="http://vincebaskerville.tumblr.com/" target="_blank">Tumblr</a></li>     	
		    				<li><a href="http://www.facebook.com/vincebaskerville" target="_blank">Facebook</a></li>    				
		    			</ul>
				</div>
			</div>
		</div>
		
		<script language="javascript" type="text/javascript" src="http://quickribbon.com/ribbon/2010/03/de2c80b7dd193a986bcdcc535c582810.js"></script><noscript><a href="http://quickribbon.com/">Quickribbon</a></noscript>

	<div id="uservoice-feedback">
		<a class="greybox" href="http://whoisvince.wufoo.com/forms/s7x2r7/" target="_blank" id="uservoice-feedback-tab">feedback</a>
	</div>

<script type="text/javascript" src="http://s3.amazonaws.com/new.cetrk.com/pages/scripts/0010/9394.js"> </script>


</body>
</html>

<?php
}


function do_html_footer2() {
  // print an HTML footer
?>

  </div>
<div class="clear"></div>
		
		<div class="btmFooter">
			<div class="fContent">
				<div class="span-2">
					<a href="index.php"><img src="inc/images/idk-logo-sm.png" alt="idk-logo-sm" /></a>
				</div>
				<div class="span-4 push-1">
		    		<p>
					<span align="center" class="caps2"><strong><a class="large orange awesome" href="register_form.php">Sign Up FREE</a></strong></span>
					<br />
						&copy;2010 idkTodo.com <br />
						VJ&Co&trade;, llc
					</p>
				</div>
				<div class="span-5">
		    		<span class="caps">Get In Touch</span> 
		    		
		    			<ul>
		    				<li><a href="http://vincentjordan.com/" target="_blank">VJ&Co&trade;</a></li>
		    				<li>Contact Us</li>			
		    			</ul>
				</div>
				<div class="span-4 last">
		    		<span class="caps">Follow Us</span> 
		    		
		    			<ul>
		    				<li>Twitter</li>
		    				<li>Facebook</li>    				
		    			</ul>
				</div>
			</div>
		</div>
		
		<script language="javascript" type="text/javascript" src="http://quickribbon.com/ribbon/2010/03/de2c80b7dd193a986bcdcc535c582810.js"></script><noscript><a href="http://quickribbon.com/">Quickribbon</a></noscript>




</body>
</html>

<?php
}




function do_html_heading($heading) {
  // print heading
?>
  <h2><?php echo $heading;?></h2>
<?php
}

function do_html_URL($url, $name) {
  // output URL as link and br
?>
  <br /><a href="<?php echo $url;?>"><?php echo $name;?></a><br />
<?php
}

function display_site_info() {
  // display some marketing info
?>
  <ul>
  <li>Store your tasks online with us!</li>
  <li>Share your favorite tasks & lists with others!</li>
  </ul>
<?php
}

function display_login_form() {
?>
 <div class="Content span-16 last"  id="form-right">	
  <form method="post" action="member.php">

	<fieldset>


		<legend>Login & Get Todoin'</legend>
		<p>
			<label for="email">User Name:</label> <br />
			<input type="text" class="title" name="username" id="username" value="">
		</p>
		
		<p>
			<label for="email">Password:</label> <br />
			<input type="password" class="title" name="passwd" id="passwd" value="">
		</p>   
		   
	    <p>
	    	<input type="submit" value="Login"> | <a href="forgot_form.php">Forgot Password</a><br />
	  		</p>

	</fieldset>	  
		<br />  	
  </form>
  </div>
  
     
 
<?php
}

function display_registration_form() {
?>

<div class="Content span-16 last"  id="form-right">		
 <form method="post" action="register_new.php">
	<fieldset>
		<legend>Step 1: Your Email Address</legend>
		<p>
			<label for="email">Email:</label> <br />
			<input type="text" class="title" name="email" id="email" maxlength="100" value="">
		</p>
	</fieldset>
	<fieldset>
		<legend>Step 2: Username & Password</legend>
		<p>
			<label for="username">Username:</label> <br />
			<input type="text" class="title" name="username" id="username" value="case-sensitive">
		</p>
		<p>
			<label for="username">Password:</label> <br />
			<input type="password" class="title" name="passwd" id="passwd" size="16" maxlength="16" value="">
		</p>
		<p>
			<label for="username">Confirm Password:</label> <br />
			<input type="password" class="title" name="passwd2" id="passwd2" size="16" maxlength="16" value="">
		</p>
	</fieldset>
		<p>
	    	<input type="submit" value="Create Account"><br />
	    	<span class="small">By clicking 'Creat Account', you agree to our <a href="#">Terms of Use Policy</a>.</span>
	  	</p>
 </form>
</div>

<?php

}

function display_user_lists($lists_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $bm_table;
  $bm_table = true;
?>
  
  <!-- <form name="bm_table" action="tasks.php" method="post"> -->
  
  <?php
  
  if ((is_array($lists_array)) && (count($lists_array) > 0)) {
    foreach ($lists_array as $lists)  {
     
      //remember to call htmlspecialchars() when we are displaying user data  
      echo "<form name=\"u_lists\" action=\"tasks.php\" method=\"POST\"><input type=\"submit\" name=\"listname\" value='".htmlspecialchars($lists)."' class=\"awesome2\" ><a href=\"javascript:listname('".$lists."')\" name=\"listname\" value='".htmlspecialchars($lists)."' ></a><br /></form> \n";
      

    }
  } else {
    echo "No tasks on record";
  }
?>

  <!-- </form> -->
<?php
}

function display_user_tasks($tasks_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $bm_table;
  $bm_table = true;
?>
  
   <form name="bm_table" action="delete_bms.php" method="post">
  
  <?php
  
  if ((is_array($tasks_array)) && (count($tasks_array) > 0)) {
    foreach ($tasks_array as $tasks)  {
     
      //remember to call htmlspecialchars() when we are displaying user data
      echo "<li id=\"menu_".$row['task_id']."\"><input type=\"checkbox\" value=\"".htmlspecialchars($tasks)."\">".htmlspecialchars($tasks)."</li> \n";
      
    }
  } else {
    echo "<tr><td>No tasks on record</td></tr>";
  }
?>

   </form> 
<?php
}

function display_user_tasks_edit($tasks_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $bm_table;
  $bm_table = true;
?>
  
   <form name="bm_table" action="delete_bms.php" method="post">
  
  <?php
  
  if ((is_array($tasks_array)) && (count($tasks_array) > 0)) {
    foreach ($tasks_array as $tasks)  {
     
      //remember to call htmlspecialchars() when we are displaying user data
      echo "<li class=\"editable\" id=\"".$row['task_id']."\"><input type=\"checkbox\" value=\"".htmlspecialchars($tasks)."\">".htmlspecialchars($tasks)."</li> \n";
      
    }
  } else {
    echo "<tr><td>No tasks on record</td></tr>";
  }
?>

   </form> 
<?php
}

function display_user_tasks_checked($tasks_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $bm_table;
  $bm_table = true;
?>
  
   <form name="bm_table" action="delete_bms.php" method="post">
  
  <?php
  
  if ((is_array($tasks_array)) && (count($tasks_array) > 0)) {
    foreach ($tasks_array as $tasks)  {
     
      //remember to call htmlspecialchars() when we are displaying user data
      echo "<li id=\"menu_\"><input type=\"checkbox\" value=\"".htmlspecialchars($tasks)."\" checked>".htmlspecialchars($tasks)."</li>";
    }
  } else {
    echo "<tr><td>No tasks on record</td></tr>";
  }
?>

   </form> 
<?php
}

function display_user_tasks_checked_disabled($tasks_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $bm_table;
  $bm_table = true;
?>
  
   <form name="bm_table" action="delete_bms.php" method="post">
  
  <?php
  
  if ((is_array($tasks_array)) && (count($tasks_array) > 0)) {
    foreach ($tasks_array as $tasks)  {
     
      //remember to call htmlspecialchars() when we are displaying user data
      echo "<li id=\"menu_\"><input type=\"checkbox\" value=\"".htmlspecialchars($tasks)."\" checked disabled>".htmlspecialchars($tasks)."</li>";
    }
  } else {
    echo "<tr><td>No tasks on record</td></tr>";
  }
?>

   </form> 
<?php
}


function display_user_menu() {
  // display the menu options on this page
?>
<div class="cbSelected">
	<a href="change_passwd_form.php">Change password</a> |
	Change email |
	Cancel account
	<br />
	<br />
	&nbsp;
</div>

<?php
}

function display_add_bm_form() {
  // display the form for people to ener a new bookmark in
?>
<form name="bm_table" action="add_bms.php" method="post">
<table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
<tr><td>New BM:</td>
<td><input type="text" name="new_url" value="http://"
     size="30" maxlength="255"/></td></tr>
<tr><td colspan="2" align="center">
    <input type="submit" value="Add bookmark"/></td></tr>
</table>
</form>
<?php
}

function display_password_form() {
  // display html change password form
?>

<div class="Content span-16 last"  id="form-right">		
 <form action="change_passwd.php" method="post">
	<fieldset>
		<legend>Change your password</legend>
		<p>
			<label for="username">Old Password:</label> <br />
			<input type="password" class="title" name="old_passwd" id="old_passwd" value="">
		</p>
		<p>
			<label for="username">New Password:</label> <br />
			<input type="password" class="title" name="new_passwd" id="new_passwd" size="16" maxlength="16" value="">
		</p>
		<p>
			<label for="username">Confirm Password:</label> <br />
			<input type="password" class="title" name="new_passwd2" id="new_passwd2" size="16" maxlength="16" value="">
		</p>
		<p>
			<br />
	    	<input type="submit" value="Change Password"> | <a href="member.php">Cancel</a>
	  	</p>
	</fieldset>
 </form>
</div>


<?php
}

function display_forgot_form() {
  // display HTML form to reset and email password
?>
   <br />
   <form action="forgot_passwd.php" method="post">
   <table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
   <tr><td>Enter your username</td>
       <td><input type="text" name="username" size="17" maxlength="17"/></td>
   </tr>
   <tr><td colspan=2 align="center">
       <input type="submit" value="Change password"/>
   </td></tr>
   </table>
   <br />
<?php
}

function display_recommended_urls($url_array) {
  // similar output to display_user_urls
  // instead of displaying the users tasks, display recomendation
?>
  <br />
  <table width="300" cellpadding="2" cellspacing="0">
<?php
  $color = "#cccccc";
  echo "<tr bgcolor=\"".$color."\">
        <td><strong>Recommendations</strong></td></tr>";
  if ((is_array($url_array)) && (count($url_array)>0)) {
    foreach ($url_array as $url) {
      if ($color == "#cccccc") {
        $color = "#ffffff";
      } else {
        $color = "#cccccc";
      }
      echo "<tr bgcolor=\"".$color."\">
            <td><a href=\"".$url."\">".htmlspecialchars($url)."</a></td></tr>";
    }
  } else {
    echo "<tr><td>No recommendations for you today.</td></tr>";
  }
?>
  </table>
<?php
}

?>
