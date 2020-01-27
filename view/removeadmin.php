<?php
include_once('../controller/Mycontroller.php');
include('../view/superuserhome.php');
$var2=new Mycontroller();
$result=$var2->adminview();
?>


<h1>Remove admin</h1>
<table class="table table-striped card-text bg-light">

	<th>NAME</th>
	<th>USERNAME</th>
	<th>PASSWORD</th>
    

    <?php
	while($row=mysqli_fetch_assoc($result))
    {
        ?>
        <tr><form class="form-control" method="post">
		 <td class=""><input class="bg-dark text-white" type="text" name="id" value="<?php echo $row["fullname"];?>"readonly></td>
		 <td class=""><input class="bg-dark text-white" type="text" name="id" value="<?php echo $row["username"];?>"readonly></td>
         <td class=""><input class="bg-dark text-white" type="text" name="id" value="<?php echo $row["password"];?>"readonly></td>
        
		 </tr>
         <?php}
         ?>
		
</table>
<?php
while($row=mysqli_fetch_assoc($result))
{
    $var=$row['fullname'];
    echo $var;
}  
?>
    