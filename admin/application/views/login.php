
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="">

<title>GeoGrout - Login</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?php echo base_url("public/assets/plugins/bootstrap/css/bootstrap.min.css");?>">

<!-- Custom Css -->  
<link rel="stylesheet" href="<?php echo base_url("public/css/login.css");?>">
</head>

<body class="simple-page">
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			<a href="#">
				<span></span>
			</a>
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
		<div class="text-center">
		<img src="<?php echo base_url("public/assets/images/logo.png"); ?>" />
		</div>
		<h6 class="form-title m-b-xl text-center">
			<?php echo ($this->session->flashdata('global_message') != "" ? $this->session->flashdata('global_message') : "Sign In With Your Geo Grout Account"); ?>
		</h6>
		 <br/>
			<form id="auth" class="form" method="post" action="<?php echo base_url("user/login/submit"); ?>">
				<div class="form-group">
					<input id="sign-in-email" type="email" name="useremail" class="form-control" placeholder="Email" required />
				</div>
				<div class="form-group">
					<input id="sign-in-password" type="password" name="userpass" placeholder="Password" class="form-control" required />
				</div>

				<input type="submit" class="btn btn-primary" value="SIGN IN"  >
			</form>
		</div>

	</div>

</body>
</html>