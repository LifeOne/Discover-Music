<html lang='en-US'>
  <head>
    <meta charset='utf-8'>
    <title>Forgot Password | CodeDrop</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="<?=base_url();?>assets/css/lnr.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="js/nhpup.js"></script>
  </head>
  <body>
    <div class="text-center" style="padding:50px 0">
    	<div class="logo">Code Drop <br><br> forgot password</div>
      <p class='logo-to-form-break'><br></p>
    	<!-- Main Form -->
    	<div class="login-form-1">
    		<form id="forgot-password-form" class="text-left">
    			<div class="login-form-main-message"></div>
    			<div class="main-login-form">
    				<div class="login-group">
    					<div class="form-group">
                <a class="reg-type-info" onmouseover="nhpup.popup('Please check your email for further instructions on how to reset your password!');" href="">?</a>
    						<input type="text" class="form-control" id="fp_email" name="fp_email" placeholder="email address">
    					</div>
    				</div>
    				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
    			</div>
    			<div class="etc-login-form text-center">
    				<p><a href="/login">Back to login</a></p>
            <span class="a-divider">or</span>
    				<p><a href="/register">Create a new account</a></p>
    			</div>
    		</form>
    	</div>
    	<!-- end:Main Form -->
    </div>
  </body>
</html>
