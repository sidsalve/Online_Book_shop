<html>
    <body>
<?php
session_start();
$_SESSION['uname']=$_POST['uname'];
$_SESSION['pass']=$_POST['pass'];
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bookshop") or die(mysql_error()); 
$q=mysql_query("select * from signup") or die(mysql_error());
$n=0;
while($row=mysql_fetch_array($q))
{
    if($row['email']==$_SESSION['uname'] && $row['cpass']==$_SESSION['pass'])
    {
        $n=1;
        $_SESSION['uid']=$row['uid'];

    }
}
    if(!$n==1)
    {
        echo"<center><b><font size=6 color=red>Please Login Again,Entered Username or Password NOT Valid<br>";
        echo"<a href=login1.php>Login Again...</font></b></center>";
    }
    else
    {
        $_SESSION['logged_in']=true;
        
       header("Location:http://localhost/Bookshop/Bookshop/home.php"); 
        
    }
    

?>
    </body>
</html>

