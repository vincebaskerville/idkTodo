<?php

// include function files for this application
require_once('inc/todo_fns.php');
session_start();
$old_user = $_SESSION['valid_user'];

// store  to test if they *were* logged in
unset($_SESSION['valid_user']);
$result_dest = session_destroy();

// start output html
do_html_header('Logging Out');
 do_top_logoSM_in();
    echo '<div class="Content span-16 last"  id="form-right">	';

if (!empty($old_user)) {
  if ($result_dest)  {
    // if they were logged in and are now logged out
    echo 'Logged out.<br />';
    do_html_url('login.php', 'Login');
  } else {
   // they were logged in and could not be logged out
    echo 'Could not log you out.<br />';
  }
} else {
  // if they weren't logged in but came to this page somehow
  echo '<h2>You were not logged in, <br /> and so have not been logged out.</h2>';
  echo '<h3><a href="login.php">Go make lists already!</a></h3> <br /> <br /> <br /> <br /> ';
  
  //do_html_url('login.php', 'Login');
}

do_html_footer2();

?>
