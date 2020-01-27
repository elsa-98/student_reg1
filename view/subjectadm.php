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
						<form  name="myform" onsubmit="return validate_form()"method="post" class="m-auto py-3  text-light p-3 form-style rounded">

							
							<h3 div class="text-center text-dark">Subject Operations</h3>
								<input type="text" class="form-control inputcomponent mt-md-3 space" name="subcode"  placeholder="subcode">
								
								<input type="text" class="form-control inputcomponent mt-md-3 space" name="sem"  placeholder="sem">
                                <input type="text" class="form-control inputcomponent mt-md-3 space" name="year"  placeholder="year">
								<input type="text" class="form-control inputcomponent mt-md-3 space" name="credit"  placeholder="credit">
                                <input type="text" class="form-control inputcomponent mt-md-3 space" name="subname"  placeholder="subname">
								<input type="password" class="form-control inputcomponent mt-md-3 space" name="adminid"  placeholder="adminid">
							
							<button type="submit" name="submit" class="btn-primary mt-md-3 px-5 rounded shadow">Submit</button>
								
								<button type="button" class="btn btn-default loginbutton m-t-5">
								

						</form>
					</div>
				</div>
			</div>
		</section>
        <?php
		if(isset($_POST['submit']))
		{
            $subcode=$_POST['subcode'];
			$sem=$_POST['sem'];
			$year=$_POST['year'];
			$credit=$_POST['credit'];
			$subname=$_POST['subname'];
			$adminid=$_POST['adminid'];
			include '../controller/MyController.php';
			$obj=new MyController();
			$obj->Insertsub($subcode,$sem,$year,$credit,$subname,$adminid);
		}
		?>
		
</body>
</html>