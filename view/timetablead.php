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

							
							<h3 div class="text-center text-dark">Timetable</h3>
								<input type="text" class="form-control inputcomponent mt-md-3 space" name="day"  placeholder="day">
								
								<input type="text" class="form-control inputcomponent mt-md-3 space" name="subname"  placeholder="subname">
                                <input type="text" class="form-control inputcomponent mt-md-3 space" name="coursename"  placeholder="coursename">
								<input type="text" class="form-control inputcomponent mt-md-3 space" name="subcode"  placeholder="subcode">
                                <input type="time" class="form-control inputcomponent mt-md-3 space" name="time"  placeholder="time">
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
            $day=$_POST['day'];
			$subname=$_POST['subname'];
			$coursename=$_POST['coursename'];
			$subcode=$_POST['subcode'];
			$time=$_POST['time'];
			$adminid=$_POST['adminid'];
			include '../controller/MyController.php';
			$obj=new MyController();
			$obj->Inserttimetable($day,$subname,$coursename,$subcode,$time,$adminid);
		}
		?>
		
</body>
</html>