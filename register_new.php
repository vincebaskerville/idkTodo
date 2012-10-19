<?php
  // include function files for this application
  require_once('inc/todo_fns.php');

  //create short variable names
  $email=$_POST['email'];
  $username=$_POST['username'];
  $passwd=$_POST['passwd'];
  $passwd2=$_POST['passwd2'];
  // start session which may be needed later
  // start it now because it must go before headers
  session_start();
  try   {
    // check forms filled in
    if (!filled_out($_POST)) {
     do_html_header('Problem:');
    	do_top_logoSM_out();
    	echo '<div class="Content span-16 last"  id="form-right">	';
      	echo '<br /> <br /> <h2> You have not filled the form out correctly. <br /> Please go back and try again.</h2>';
  		echo '<h3><a href="register_form.php">Try again..</a></h3> <br /> <br /> <br /> <br /><br /><br /> ';
   		do_html_footer2();
     exit;
    }

    // email address not valid
    if (!valid_email($email)) {
     do_html_header('Problem:');
    	do_top_logoSM_out();
    	echo '<div class="Content span-16 last"  id="form-right">	';
      	echo '<br /> <br /> <h2> That is not a valid email address. <br />  Please go back and try again.</h2>';
  		echo '<h3><a href="register_form.php">Try again..</a></h3> <br /> <br /> <br /><br /><br /> <br /> ';
   		do_html_footer2();
     exit;
    }

    // passwords not the same
    if ($passwd != $passwd2) {
     do_html_header('Problem:');
    	do_top_logoSM_out();
    	echo '<div class="Content span-16 last"  id="form-right">	';
      	echo '<br /> <br /> <h2> The passwords you entered do not match. <br />  Please go back and try again.</h2>';
  		echo '<h3><a href="register_form.php">Try again..</a></h3> <br /> <br /> <br /> <br /><br /><br /> ';
   		do_html_footer2();
     exit;
    }

    // check password length is ok
    // ok if username truncates, but passwords will get
    // munged if they are too long.
    if ((strlen($passwd) < 6) || (strlen($passwd) > 16)) {
     do_html_header('Problem:');
    	do_top_logoSM_out();
    	echo '<div class="Content span-16 last"  id="form-right">	';
      	echo '<br /> <br /> <h2> Your password must be between 6 and 16 characters. <br /> Please go back and try again.</h2>';
  		echo '<h3><a href="register_form.php">Try again..</a></h3> <br /> <br /> <br /><br /><br /> <br /> ';
   		do_html_footer2();
     exit;
    }

    // attempt to register
    // this function can also throw an exception
    register($username, $email, $passwd);
    // register session variable
    $_SESSION['valid_user'] = $username;

    // provide link to members page
    do_html_header('Registration successful');
    do_top_logoSM_out();
    echo '<div class="Content span-16 last"  id="form-right">	';
    echo '<br /> <br /> <h2>Your registration was successful.  <br />Go to your <a href="member.php">idk.List&trade;</a> page to start setting up your todos!</h2>';
    echo '<h3><a href="member.php">Go make lists already!</a></h3>  <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> ';
    //do_html_url('member.php', 'Go to members page');

   // end page
   do_html_footer2();
  }
  catch (Exception $e) {
     do_html_header('Problem:');
     echo $e->getMessage();
     do_html_footer();
     exit;
  }
?>
