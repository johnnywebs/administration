
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
                            <!--<h5>Geo Grout Login</h5>-->
                            <img src="<?php echo base_url("public/assets/images/logo.png"); ?>" />
                        </div>
                        <form class="form">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Email">
                                <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                            <div class="input-group">
                                <input type="password" placeholder="Password" class="form-control" />
                                <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                            </div>                            
                        </form>
                        <div class="footer">
                            <a href="<?php echo base_url("employees/dashboard"); ?>" class="btn btn-primary btn-round btn-block">SIGN IN</a>
                        </div>
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