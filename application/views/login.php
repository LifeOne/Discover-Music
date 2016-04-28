<?php
  if($logged > 1)
    redirect('index');
  else
    $this->session->sess_destroy();
 ?>

<html lang='en-US'>
  <head>
    <meta charset="utf-8">
    <title>Login | Discover Music</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="<?=base_url();?>assets/css/lnr.css" type="text/css" rel="stylesheet">

  </head>
  <body>
    <div class="text-center" style="padding:50px 0">
    	<div class="logo">Discover Music<br><br>login</div>
    	<!-- Main Form -->
    	<div class="login-form-1">
        <?php
        if(false) { ?>
          <p class='logo-to-form-break text-center'><a href="forgetful.php">Forgot your password?</a></p>
        <?php } else {
          ?> <p class='logo-to-form-break'><br></p><?php
        }
        ?>
    		<form id="login-form" class="text-left" action='/login/vl_1' method='post'>
    			<div class="login-form-main-message"></div>
    			<div class="main-login-form">
    				<div class="login-group">
    					<div class="form-group">
    						<!-- <label for="lg_username" class="sr-only">Username</label> -->
    						<input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username">
    					</div>
    					<div class="form-group">
    						<!-- <label for="lg_password" class="sr-only">Password</label> -->
    						<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
    					</div>
    				</div>
    				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
    			</div>
    			<div class="etc-login-form text-center">
    				<p><a href="/register">Create a new account</a></p>
            <span class="a-divider">or</span>
    				<p><a href="/login/guest">Continue as a guest</a></p>
    			</div>
    		</form>
    	</div>
    	<!-- end:Main Form -->
    </div>
  </body>
</html>
