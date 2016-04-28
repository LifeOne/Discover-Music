<?php
  if($this->session->userdata('logged') > 1) {
    redirect('/');
    die();
  }

?>
<html lang='en-US'>
  <head>
    <meta charset="utf-8">
    <title>Register | Discover Music</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href='<?=base_url();?>assets/css/lnr.css' type="text/css" rel="stylesheet">
    <script type="text/javascript" src="<?=base_url();?>assets/js/nhpup.js"></script>

  </head>
  <body>
    <div class="text-center" style="padding:50px 0">
    	<div class="logo">Discover Music<br><br>register</div>
      <p class='logo-to-form-break'><br></p>
    	<!-- Main Form -->
    	<div class="login-form-1">
    		<form id="register-form" class="text-left" action='/login/vr_1' method='post'>
    			<div class="login-form-main-message"></div>
    			<div class="main-login-form">
    				<div class="login-group">
    					<div class="form-group">
          			<a class="reg-type-info" onmouseover="nhpup.popup('Required! Usernames are unique and are displayed next to any drops you make!');" href="">*</a>
                <input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
    					</div>
    					<div class="form-group">
          			<a class="reg-type-info" onmouseover="nhpup.popup('Required! Passwords are safely encrypted and stored, no need to worry about pesky pirateers!');" href="">*</a>
    						<input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
    					</div>
    					<div class="form-group">
          			<a class="reg-type-info" onmouseover="nhpup.popup('Required! Lets make sure thats the password you wanted!');" href="">*</a>
    						<input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
    					</div>

    					<div class="form-group">
          			<a class="reg-type-info" onmouseover="nhpup.popup('Optional! Emails can be used to send you updates (has to be set in your preferences) or to help other users find you (if you set your email to public). You can add your email at any time!');" href="">?</a>
    						<input type="email" class="form-control" id="reg_email" name="reg_email" placeholder="email">
    					</div>
    					<div class="form-group">
          			<a class="reg-type-info" onmouseover="nhpup.popup('Optional! Your name helps your friends find you on Code Drop!');" href="">?</a>
    						<input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="full name">
    					</div>
    				</div>
    				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
    			</div>
          <div class="etc-login-form text-center">
    				<p><a href="/login">Already have an account?</a></p>
            <span class="a-divider">or</span>
    				<p><a href="/login/guest">Continue as a guest</a></p>
    			</div>
    		</form>
    	</div>
    	<!-- end:Main Form -->
    </div>
  </body>
</html>
