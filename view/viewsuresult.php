<?php session_start();
include '../view/studenthome.php';
include '../controller/Mycontroller.php';
$obj=new Mycontroller();
$result=$obj->Viewresultsu($_SESSION['firstname']);
while($row = mysqli_fetch_assoc($result))
{
?>
<h1>STUDENT PROFILE</h1>
<table class="table table-striped card-text bg-light">

	<th>REGNO</th><br>
	<th>INDEXNO</th><br>
	<th>CCODE</th>
    <th>NAME</th>
    <th>SUBNAME</th>
    <th>RESULT</th>
    <th>CREDIT</th>
    <th>CGPA</th>
	
	
	

	
		<tr> <td class="frm"><?php echo $row["regno"]?></td>
		 <td class="frm"><?php echo $row["indexno"]?></td>
		 <td class="frm"><?php echo $row["coursecode"]?></td>
         <td class="frm"><?php echo $row["firstname"]?></td>
         <td class="frm"><?php echo $row["subname"]?></td>
         <td class="frm"><?php echo $row["result"]?></td>
         <td class="frm"><?php echo $row["credit"]?></td>
         <td class="frm"><?php echo $row["totalcgpa"]?></td>
		 </tr>
		<?php }
		?>
</table>
	