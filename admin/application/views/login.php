
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
<link rel="stylesheet" href="<?php echo base_url("public/css/main.css");?>">    
<link rel="stylesheet" href="<?php echo base_url("public/css/color_skins.css");?>">
</head>
<body class="theme-black">
<div class="authentication">
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                             
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card-plain">
                        <div class="header">
                            <h6><?php echo ($this->session->flashdata('global_message') != "" ? $this->session->flashdata('global_message') : ""); ?></h6>
                            <img src="<?php echo base_url("public/assets/images/logo.png"); ?>" />
                        </div>
                        <form class="form" method="post" action="<?php echo base_url("user/login/submit"); ?>">
                            <div class="input-group">
                                <input type="email" name="useremail" class="form-control" placeholder="Email" required />
                                <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                            <div class="input-group">
                                <input type="password" name="userpass" placeholder="Password" class="form-control" required/>
                                <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                            </div>  
                        <div class="footer">
                            <input type="submit" class="btn btn-primary btn-round btn-block" value="SIGN IN" />
                        </div>
						                          
                        </form>
                        <!--<a href="forgot-password.html" class="link">Forgot Password?</a>-->
                    </div>
                </div>
				<div class="col-lg-4 col-md-12">
			
				</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>