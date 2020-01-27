<?php
include('adminhome.php');
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
						<form  name="myform" onsubmit="return validate_form()" role="form" method="post" class="m-auto py-3  text-light p-3 form-style rounded">

							
							<h3 div class="text-center text-dark">Add Student</h3>
								<input type="text" class="form-control inputcomponent mt-md-3 space" name="firstname"  placeholder="firstname">
								
								<input type="text" class="form-control inputcomponent mt-md-3 space" name="lastname"  placeholder="lastname">
                                <input type="text" class="form-control inputcomponent mt-md-3 space" name="sid"  placeholder="sid">
								<input type="text" class="form-control inputcomponent mt-md-3 space" name="email"  placeholder="email">
                                <input type="text" class="form-control inputcomponent mt-md-3 space" name="username"  placeholder="username">
								<input type="password" class="form-control inputcomponent mt-md-3 space" name="password"id="password"  placeholder="Password">
								<input type="text" class="form-control inputcomponent mt-md-3 space" name="year"  placeholder="year">
								<input type="text" class="form-control inputcomponent mt-md-3 space" name="phoneno" id="phoneno"  placeholder="phoneno">
							<button type="submit" name="submit" class="btn-primary mt-md-3 px-5 rounded shadow">Submit</button>
								
								<button type="button" class="btn btn-default loginbutton m-t-5">
								

						</form>
					</div>
				</div>
			</div>
			<!-----------script validation------------>
			<script>
			function validate_form()
			{
				var str=document.forms["myform"]["password"].value;
				var ph=document.forms["myform"]["phoneno"].value;

			
				if(str.length<6)
				{
					alert("password is too short");
					return false;
				}
				else if(ph.length!=10)
				{
					alert("inavlid phoneno");
					return false;

				}
				else{
					return true;
				}
			}
			</script>
		</section>
        <?php
		if(isset($_POST['submit']))
		{
            $fname=$_POST['firstname'];
			$lname=$_POST['lastname'];
			$sid=$_POST['sid'];
			$email=$_POST['email'];
			$username=$_POST['username'];
			$pass=$_POST['password'];
			$year=$_POST['year'];
			$phoneno=$_POST['phoneno'];
			include '../controller/MyController.php';
			$obj=new MyController();
			$obj->Insertstudent($fname,$lname,$sid,$email,$username,$pass,$year,$phoneno);
		}
		?>
		
</body>
</html>