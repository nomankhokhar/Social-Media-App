<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn | MySocial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		/* height: 40%; */
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #187FAB;
	}
	#signin{
		width: 60%;
		border-radius: 30px;
	}
	.overlap-text{
		position: relative;
	}
	.overlap-text a{
		position: absolute;
		top: 8px;
		right: 10px;
		font-size: 14px;
		text-decoration: none;
		font-family: 'Overpass Mono', monospace;
		letter-spacing: -1px;

	}
</style>
</head>
<body>
<nav class="navbar navbar-light bg-light  justify-content-center : Active">
  <span class="navbar-brand mb-0 h1"> <h1>MySocial</h1></span>
</nav>
 

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="main-content">
                <div class="header">
                    <h3 style="text-align: center;"><strong>Login to MySocial</strong></h3>
                </div>
                <div class="l-part">
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Email" required="required" class="form-control input-md"><br>
                        <div class="overlap-text">
                            <input type="password" name="pass" placeholder="Password" required="required" class="form-control input-md"><br>
                            <a style="text-decoration:none;float: right;color: #187FAB;" data-toggle="tooltip" title="Reset Password" href="forgot_password.php">Forgot?</a>
                        </div>
                        <a style="text-decoration: none;float: right;color: #187FAB;" data-toggle="tooltip" title="Create Account!" href="signup.php">Don't have an account?</a><br><br>

                        <center><button id="signin" class="btn btn-info btn-lg" name="login">Login</button></center>
                        <?php include("login.php"); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
   
</body>
</html>