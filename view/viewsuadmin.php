<?php 
include '../view/superuserhome.php';

?>
<h1>STUDENT PROFILE</h1>
<table class="table table-striped card-text bg-light">

	<th>FNAME</th><br>
	<th>USERNAME</th><br>
	<th>PASSWORD</th>
	<?php
		include '../controller/Mycontroller.php';
		$obj=new Mycontroller();
		$result=$obj->Viewadmprofile();
		while($row = mysqli_fetch_assoc($result))
		{
	
			?>
		<tr>
		<form method="post">
		 <td class="frm"><input type="text" value="<?php echo $row["fullname"];?>" name="fullname"></td>
         <td class="frm"><?php echo $row["username"];?></td>
         <td class="frm"><?php echo $row["password"];?></td>
		 <td><input type="submit" value="Remove" name="submit"></td>
		 </form>
         
         
         
		 </tr>
		<?php }
		?>
</table>
<?php
if(isset($_POST['submit']))
{
	$ob=new Mycontroller();
	$ob->Removeadmin($_POST["fullname"]);
}
	