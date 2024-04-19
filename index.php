<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>MySocial</title>
    <style>
        *{
            padding:0;
            margin:0;
        }
        #signup{
		width: 60%;
		border-radius: 30px;
	}
	#login{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}
	#login:hover{
		width: 60%;
		background-color: #fff;
		color: #1da1f2;
		border: 2px solid #1da1f2;
		border-radius: 30px;
	}
	.well{
		
	}
    </style>
</head>
<body>

<!-- As a heading -->
<nav class="navbar navbar-light bg-light  justify-content-center : Active">
  <span class="navbar-brand mb-0 h1"> <h1>MySocial</h1></span>
</nav>



    <!-- Hero Section -->
   <div class="container-fluid">
     <div class="row">

        <div class="col-sm-6" style="margin-top">
            <img src="./images/hero-section.jpg" class="img-rounded" style="margin-left:30px;" alt="No Found" width="600px" height="500px">
        </div>

        
        <div class="col-sm-6" style="margin-top:10px;" >
          <div style="margin-left:10px;">
          <h2 style="margin-top:7rem;">See what's happening in <br> the world right now</h2>
           <h4>Join <strong>MySocial</strong> Today..</h4>

           <form method="post" action="">
				<button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
				<?php
					if(isset($_POST['signup'])){
						echo "<script>window.open('signup.php','_self')</script>";
					}
				?>
				<button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
				<?php
					if(isset($_POST['login'])){
						echo "<script>window.open('signin.php','_self')</script>";
					}
				?>
			</form>

          </div>

          
        </div>
        
    </div>
   </div>

   <!-- footer -->

   <!-- Footer -->
<footer class="page-footer font-small blue">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2022 Copyright:
  <a href="#"> Noman Ali</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>