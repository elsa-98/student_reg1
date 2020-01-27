<?php 
include '../view/studenthome.php';

?>
<h1>STUDENT PROFILE</h1>
<table class="table table-striped card-text bg-light">

	<th>DAY</th><br>
    <th>SUBNAME</th><br>
    <th>COURSENAME</th><br>
    <th>SUBCODE</th><br>
	<th>TIME</th><br>
	<th>ADMINID</th>
	
	<?php
		include '../controller/Mycontroller.php';
		$obj=new Mycontroller();
		$result=$obj->Viewtimetable();
		while($row = mysqli_fetch_assoc($result))
		{
	
			?>
		<tr>
		<form method="post">
		 <td class="frm"><?php echo $row["day"];?></td>
		 <td class="frm"><?php echo $row["subname"];?></td>
		 <td class="frm"><?php echo $row["coursename"];?></td>
         <td class="frm"><?php echo $row["subcode"];?></td>
         <td class="frm"><?php echo $row["time"];?></td>
         <td class="frm"><?php echo $row["adminid"];?></td>
		
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
	