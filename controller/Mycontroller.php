<?php
class Mycontroller
{
    function Loadfirst()
    {
        header('location:view/home.php');
    }
    function LoginAdm($user,$pass)
    {
      
        include '../model/MyModel.php';
		$mod=new Mymodel();
        $mod->adlogin($user,$pass);
    }
    function LoginStu($uname,$pass)
    {
      
        include '../model/MyModel.php';
		$mod=new Mymodel();
        $mod->stlogin($uname,$pass);
    }
    function LoginSuperuser($user,$pass)
    {
      
        include '../model/MyModel.php';
		$mod=new Mymodel();
        $mod->logsuper($user,$pass);
    }
    function Insertadmin($fname,$uname,$pass)
    {
      
        include '../model/MyModel.php';
		$mod=new Mymodel();
        $mod->insertad($fname,$uname,$pass);
    }
    function adminview()
    {
        include '../model/MyModel.php';
        $var=new Mymodel();
        $result1=$var->viewadmin();
        return $result1;
    }
    function Insertstudent($fname,$lname,$sid,$email,$username,$pass,$year,$phoneno)
    {
      
        include '../model/MyModel.php';
		$mod=new Mymodel();
        $mod->insertst($fname,$lname,$sid,$email,$username,$pass,$year,$phoneno);
    }
    function Insertsub($subcode,$sem,$year,$credit,$subname,$adminid)
    {
      
        include '../model/MyModel.php';
		$mod=new Mymodel();
        $mod->insertsubject($subcode,$sem,$year,$credit,$subname,$adminid);
    }
    function Inserttimetable($day,$subname,$coursename,$subcode,$time,$adminid)
    {
      
        include '../model/MyModel.php';
		$mod=new Mymodel();
        $mod->insertable($day,$subname,$coursename,$subcode,$time,$adminid);
    }
    function Viewstuprofile()
    {
        include '../model/MyModel.php';
        $var=new Mymodel();
        $result=$var->viewstu();
        return ($result);
    }
    function Viewadmprofile()
    {
        include '../model/MyModel.php';
        $var=new Mymodel();
        $result=$var->viewadm();
        return ($result);
    }
    function Viewresultsu($firstname)
    {
        include '../model/MyModel.php';
        $var=new Mymodel();
        $result1=$var->viewresult($firstname);
        return ($result1);
    }
    function Viewsubstu($year)
    {
        include '../model/MyModel.php';
        $var=new Mymodel();
        $result=$var->viewsubject($year);
        return ($result);
    }
    function Viewtimetable()
    {
        include '../model/MyModel.php';
        $var=new Mymodel();
        $result1=$var->viewtime();
        return ($result1);
    }
    function Resultpreview($regno,$indexno,$coursecode,$firstname,$subname,$result,$credit,$totalcgpa)
    {
      
        include '../model/MyModel.php';
		$mod=new Mymodel();
        $mod->resultview($regno,$indexno,$coursecode,$firstname,$subname,$result,$credit,$totalcgpa);
    }
    function Removestudent($firstname)
    {
        $mod=new Mymodel();
        $mod->studentremove($firstname);
    }
    function Removeadmin($fullname)
    {
        $mod=new Mymodel();
        $mod->removeadm($fullname);
    }
}