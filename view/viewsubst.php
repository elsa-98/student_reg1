<?php session_start();
include '../view/studenthome.php';
include '../controller/Mycontroller.php';
$obj=new Mycontroller();
$result=$obj->Viewsubstu($_SESSION['year']);?>

<h1>Subject</h1>
<table class="table table-striped card-text bg-light">

	<th>SUBCODE</th><br>
	<th>SEM</th><br>
	<th>YEAR</th>
    <th>CREDIT</th>
    <th>SUBNAME</th>
    <th>ADMINID</th>
    <?php
	while($row = mysqli_fetch_assoc($result))
    {
    ?>
	
	

	
		<tr> <td class="frm"><?php echo $row["subcode"]?></td>
		 <td class="frm"><?php echo $row["sem"]?></td>
		 <td class="frm"><?php echo $row["year"]?></td>
         <td class="frm"><?php echo $row["credit"]?></td>
         <td class="frm"><?php echo $row["subname"]?></td>
         <td class="frm"><?php echo $row["adminid"]?></td>
        
		 </tr>
		<?php }
		?>
</table>
	