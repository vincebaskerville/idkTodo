<?php
 require_once('inc/todo_fns.php');
 session_start();
 do_html_header('Change password');
 ?>
     <div class="containerProj">				
    	
	    	<div class="span-5 alt append-7">
				<h2 class="noPadd"><a class="btnLogo" href="index.php">idkTodo&trade;: Quick & Simple GTD app</a></h2>
			</div>
			
			<div align="center" class="span-4">

				<p align="center">
					<br />
					<a class="large awesome" href="register_form.php"><strong>Register</strong></a>
				</p>
			</div>
		
		<div class="clear"></div>		
	  
 <?php
 check_valid_user();
 display_password_form();

 //display_user_menu(); 
 do_html_footer();
?>
