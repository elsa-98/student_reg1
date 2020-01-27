
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
	<script>
	function validate_form()
	{
		var x=document.forms['myform']['username'].value
		var y=document.forms['myform']['password'].value
		
		if(x=="" ||y=="")
		{
			alert("fill the fileds");
		}
	}
	</script>
	<!------------------starts first section----------------------->
	
			<div class="container-fluid bg-style media1">
			
				<div class="row">
					
					<div class="col-md-12 log-style">
						<form  name="myform" onsubmit="return validate_form()"method="post" class="m-auto py-3 jumbotron text-light p-3 form-style rounded">

							
							<h3 div class="text-center text-dark">Log In</h3>
								<input type="text" class="form-control inputcomponent mt-md-3 space" name="username"  placeholder="Username">
							
								<input type="password" class="form-control inputcomponent mt-md-3 space" name="password"  placeholder="Password">
							
							<button type="submit" name="submit" class="btn-primary mt-md-3 px-5 rounded shadow">Login</button>
								
								

								

						</form>
					</div>
				</div>
			</div>
		</section>
	
		
		

		
		<?php
		if(isset($_POST['submit']))
		{
			$user=$_POST['username'];
			$pass=$_POST['password'];
			include '../controller/MyController.php';
			$obj=new MyController();
			$obj->LoginAdm($user,$pass);
		}
		?>
	</body>
</html>