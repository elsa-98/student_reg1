<?php
class Mymodel
{
function adlogin($user,$pass)
	{
        include'../config/connection.php';
        $sql="select * from addadmin where username='".$user."' and password='".$pass."'";
        $result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row= mysqli_fetch_assoc($result))
			{
                header('location:../view/adminhome.php');
			}
		}
    }
    function stlogin($uname,$pass)
	{
        include'../config/connection.php';
        $sql="select * from addstudent where username='".$uname."' and password='".$pass."'";
        $result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row= mysqli_fetch_assoc($result))
			{
                session_start();
                $_SESSION['username']=$row['username'];
                $_SESSION['firstname']=$row['firstname'];
                $_SESSION['year']=$row['year'];
                header('location:../view/studenthome.php');
			}
		}
    }
    function logsuper($user,$pass)
	{
        include'../config/connection.php';
        $sql="select * from superuser where username='".$user."' and password='".$pass."'";
        $result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row= mysqli_fetch_assoc($result))
			{
                header('location:../view/superuserhome.php');
			}
		}
    }
    function insertad($fname,$uname,$pass)
	{
        include'../config/connection.php';
        $sql="insert into addadmin (fullname,username,password) values ('".$fname."','".$uname."','".$pass."')";
        if(mysqli_query($con,$sql))
		{
			echo "registration successful";
		}
		
    }
    function viewadmin()
    {
        include'../config/connection.php';
        include_once('../controller/Mycontroller.php');
        $sql="SELECT * FROM addadmin";
        $result=mysqli_query($con,$sql);
        return $result;
    }
    function insertst($fname,$lname,$sid,$email,$uname,$pass,$year,$phoneno)
	{
        include'../config/connection.php';
        $sql="insert into addstudent (firstname,lastname,sid,username,password,year,phoneno) values ('".$fname."','".$lname."','".$sid."',
        '".$uname."','".$pass."','".$year."','".$phoneno."')";
        if(mysqli_query($con,$sql))
		{
			echo "registration successful";
		}
		
    }
    function insertsubject($subcode,$sem,$year,$credit,$subname,$adminid)
	{
        include'../config/connection.php';
        $sql="insert into subjectoperation (subcode,sem,year,credit,subname,adminid) values ('".$subcode."','".$sem."','".$year."',
        '".$credit."','".$subname."','".$adminid."')";
        if(mysqli_query($con,$sql))
		{
			echo "registration successful";
		}
		
    }
    function insertable($day,$subname,$coursename,$subcode,$time,$adminid)
	{
        include'../config/connection.php';
        $sql="insert into timetable (day,subname,coursename,subcode,time,adminid) values ('".$day."','".$subname."','".$coursename."',
        '".$subcode."','".$time."','".$adminid."')";
        if(mysqli_query($con,$sql))
		{
			echo "registration successful";
		}
		
    }
    function viewstu()
    {
        include'../config/connection.php';
        $sql="SELECT * FROM addstudent";
        $result=mysqli_query($con,$sql);
        return ($result);
    }
    function viewadm()
    {
        include'../config/connection.php';
        $sql="SELECT * FROM addadmin";
        $result=mysqli_query($con,$sql);
        return ($result);
    }
    function viewresult($firstname)
    {
        include'../config/connection.php';
        $sql="SELECT * FROM resultpv where firstname='".$firstname."'";
        $result1=mysqli_query($con,$sql);
        return ($result1);
    }
    function viewsubject($year)
    {
        include'../config/connection.php';
        $sql="SELECT * FROM subjectoperation where  year='".$year."'";
        $result=mysqli_query($con,$sql);
        return ($result);
    }
    function viewtime()
    {
        include'../config/connection.php';
        $sql="SELECT * FROM timetable ";
        $result1=mysqli_query($con,$sql);
        return ($result1);
    }
    function resultview($regno,$indexno,$coursecode,$firstname,$subname,$result,$credit,$totalcgpa)
	{
        include'../config/connection.php';
        $sql="insert into resultpv(regno,indexno,coursecode,firstname,subname,result,credit,totalcgpa) values ('".$regno."','".$indexno."',  '".$coursecode."','".$firstname."','".$subname."','".$result."','".$credit."','".$totalcgpa."')";
        if(mysqli_query($con,$sql))
		{
			echo "registration successful";
        }
    }
    function studentremove($firstname)
    {
        include'../config/connection.php';
        $sql="DELETE  FROM addstudent WHERE firstname='".$firstname."'";
        $result=mysqli_query($con,$sql);
        return $result;
    }
    function removeadm($fullname)
    {
        include'../config/connection.php';
        $sql="DELETE  FROM addadmin WHERE fullname='".$fullname."'";
        $result=mysqli_query($con,$sql);
        return $result;
    }
}
?>
