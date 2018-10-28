<html>
    <head>
      <style>
       .footer {
    max-width: 1200px;
    margin: auto;
    background: purple;
    padding: 10px;
           text-align:center;
	position:absolute;
	left:0;
	right:0;
	margin:0 auto;
	bottom:50px;
       
} </style>   
    </head>
    <body bgcolor=black>
            <?php
        session_start();
         if(isset($_SESSION['logged_in1']) && $_SESSION['logged_in1']==true)
    { 
        
    ?>
<?php
        
       
        if($_SERVER['REQUEST_METHOD']=='GET')
        {
            ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"><br><br><br>
  <table width="523" height="227" border="0" align="center">
    <tr>
        <td colspan="2" bgcolor=orange><div align="center"><strong><span class="style2"><font color=blue size=5>Change Password</font> </span></strong></div></td>
    </tr>
    <tr align=center>
        <td width="172"><font color=white>Enter Old Password:</font></td>
      <td width="204"><input name="old" type="text" id="old" required placeholder="Old Password"></td>
    </tr>
    <tr align=center>
        <td width="172"><font color=white>Enter New Password: </font></td>
      <td><input name="pass" type="password" id="pass" value="" required placeholder=" new password"></td>
    </tr>
    <tr align=center>
        <td><font color=white>Re-enter New Password: </font></td>
      <td><input name="cpass" type="password" id="cpass" required placeholder="Re-enter password"></td>
    </tr>
    <tr>
      <td></td>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>
   <?php     
        }
else
{
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $n=0;
          mysql_connect("localhost","root","") or die("can not connect");
            mysql_select_db("bookshop") or die("can not connect");
       $old=$_POST['old'];
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];
        $p=$_SESSION['uname1'];
    $match=mysql_query("select * from admin");
        while($check=mysql_fetch_array($match))
        {
            if($check['cpass']==$old)
            {
            
        if($pass==$cpass)
        {
          
            $qry="UPDATE admin SET pass='$pass',cpass='$cpass' WHERE uname='$p'";
            $result=mysql_query($qry);
            if($result)
            {
                echo"<center><font color=red size=6>Password Changed Successfuly</font><br>";
                
                
            }
            else
            {
                echo"check code";
            }
        }
        else
        {
            echo"<center><font color=red size=6>Password Is NOT Match With Re-entered Password</font></center> ";
        }
     
            
       
    }
            else
            {
                $n=1;
            }
        }
        if($n==1)
        {
           echo"<center><font color=red size=6>Old Password is NOT Match,Please Check Old Password </font><br>";
        }
    }
     else
            {
                die("not able to process the script");
            }
}
        
        ?>
        <div class="footer">
                    <font size=4 color="white">**Admin Profile**</font><br><br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Back" onclick="history.go(-1);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="afterlogin.php" ><font color="white">Goto First Page</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="changepass.php"><font color="white">Change Password</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="logout.php"><font color="white">Logout</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="t&c.php"><font color="white">Terms And Conditions</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <?php
    }
        else
        {
            echo"<center><font color=blue size=7>You Have To Login First......</font></center>";
        }
        ?>

    </body>
</html>

   