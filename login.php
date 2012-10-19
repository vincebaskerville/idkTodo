<?php
 require_once('inc/todo_fns.php');
 do_html_header('');

 //display_site_info(); 
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
	    
	    <br />
	    <br />
	    <br />	

<?php
 
 display_login_form();

 do_html_footer();
?>