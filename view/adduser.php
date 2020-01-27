<?php
include('superuserhome.php');
?>
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

							
							<h3 div class="text-center text-dark">Add Admin</h3>
								<input type="text" class="form-control inputcomponent mt-md-3 space" name="fullname"  placeholder="fullname">
								
								<input type="text" class="form-control inputcomponent mt-md-3 space" name="username"  placeholder="username">
								
								<input type="password" class="form-control inputcomponent mt-md-3 space" name="password" id="password" placeholder="Password">
							
							<button type="submit" name="submit" class="btn-primary mt-md-3 px-5 rounded shadow">Submit</button>
								
								<button type="button" class="btn btn-default loginbutton m-t-5">
								

						</form>
					</div>
				</div>
			</div>
			<script>
			function validate_form()
			{
				var str=document.forms["myform"]["password"].value;
			

			}
			if(str.length<6)
			{
				alert("password is too short");
				return false;
			}
			
			else{
				return true;
			}
			</script>
		</section>
        <?php
		if(isset($_POST['submit']))
		{
            $fname=$_POST['fullname'];
            $uname=$_POST['username'];
			$pass=$_POST['password'];
			include '../controller/MyController.php';
			$obj=new MyController();
			$obj->Insertadmin($fname,$uname,$pass);
		}
		?>
		
</body>
</html>