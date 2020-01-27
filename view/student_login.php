<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/style.css">
	
		<title>Login</title>
	</head>
	<body>
	<!------------------starts first section----------------------->
		<header class="bg-color py-2">
			<h5 class="container">Orisys Academy</h5>
		</header>
		<section>
			<h4 class="py-4 text-dark text-center text-h">AMS - Convenience and the ability to learn at any place and any time.</h4>
			<div class="container-fluid bg-style media1">
			
				<div class="row">
					
					<div class="col-md-12 log-style">
						<form  name="facultylogin" method="post" class="m-auto py-3 jumbotron text-light p-3 form-style rounded">

							
							<h3 div class="text-center text-dark"> Student Login</h3>
								<input type="text" class="form-control inputcomponent mt-md-3 space" name="username" required="required" placeholder="Username">
							
								<input type="password" class="form-control inputcomponent mt-md-3 space" name="password" required="required" placeholder="Password">
							
							<button type="submit" name="submit" class="btn-primary mt-md-3 px-5 rounded shadow">Sign IN</button>
								
								<button type="button" class="btn btn-default loginbutton m-t-5">
								<span class="google-button__icon">	
								</span>
								<span class="google-button__text">Sign in with Google</span>
								</button>

								<div class='text-center m-t-10'>
									<a href="signupdoct.php">Sign up?</a>
								</div>

						</form>
					</div>
				</div>
			</div>
		</section>
	
		<?php
		if(isset($_POST['submit']))
		{
			$uname=$_POST['username'];
			$pass=$_POST['password'];
			include '../controller/MyController.php';
			$obj=new MyController();
			$obj->LoginStu($uname,$pass);
		}
		?>	
		
</body>
</html>