<?php 
include '../view/studenthome.php';

?>
<h1>STUDENT PROFILE</h1>
<table class="table table-striped card-text bg-light">

	<th>FNAME</th><br>
    <th>LNAME</th><br>
    <th>SID</th><br>
    <th>EMAIL</th><br>
	<th>USERNAME</th><br>
	<th>PASSWORD</th>
	<th>Phoneno</th>
	<?php
		include '../controller/Mycontroller.php';
		$obj=new Mycontroller();
		$result=$obj->Viewstuprofile();
		while($row = mysqli_fetch_assoc($result))
		{
	
			?>
		<tr>
		<form method="post">
		 <td class="frm"><input type="text" value="<?php echo $row["firstname"];?>" name="firstname"></td>
		 <td class="frm"><?php echo $row["lastname"];?></td>
		 <td class="frm"><?php echo $row["sid"];?></td>
         <td class="frm"><?php echo $row["email"];?></td>
         <td class="frm"><?php echo $row["username"];?></td>
         <td class="frm"><?php echo $row["password"];?></td>
		 <td class="frm"><?php echo $row["phoneno"];?></td>
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
	$ob->Removestudent($_POST["firstname"]);
}
	