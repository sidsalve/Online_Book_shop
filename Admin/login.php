<html>
    <body bgcolor=black>
<?php
session_start();
$_SESSION['uname1']=$_POST['uname'];
$_SESSION['pass1']=$_POST['pass'];
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bookshop") or die(mysql_error()); 
$q=mysql_query("select * from admin") or die(mysql_error());
$n=0;
while($row=mysql_fetch_array($q))
{
    if($row['uname']==$_SESSION['uname1'] && $row['cpass']==$_SESSION['pass1'])
    {
        $n=1;
        

    }
}
    if(!$n==1)
    {
        echo"<center><b><font size=6 color=red>Please Login Again,Entered Username or Password NOT Valid<br>";
        echo"<a href=adminlogin.php>Login Again...</font></b></center>";
    }
    else
    {
        $_SESSION['logged_in1']=true;
    
        header("location:http://localhost/Bookshop/Admin/afterlogin.php");
     
    }
    

?>
    </body>
</html>


