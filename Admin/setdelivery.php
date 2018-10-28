<html>
    <head>
        <style>
       .footer {
    max-width: 1200px;
    margin: auto;
    background: purple;
    padding: 10px;
        
       
}  
            </style>

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
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <table width="584" height="245" border="0" align="center" >
    <tr>
      <td colspan="2" bgcolor=orange ><div align="center"><strong><span class="style2">Set Delivery Status By Purchase Id</span></strong></div></td>
    </tr>
    <tr>
      <td width="172"><font color=blue size=4>Enter User Purchase ID </td>
      <td width="204"><input name="pid" type="text"  required></td>
    </tr>
      <tr>
      <td width="172"><font color=blue size=4>Set Delivery Status </td>
      <td width="204"><input name="d_status" type="text"  required></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form><br><br>
    <form action="byuserid.php" method="post">
  <table width="584" height="245" border="0" align="center">
    <tr>
      <td colspan="2" bgcolor=#808000><div align="center"><strong><span class="style2">Set Delivery Status By User Id</span></strong></div></td>
    </tr>
    <tr>
      <td width="172"><font color=blue size=4>Enter User  ID </td>
      <td width="204"><input name="uid" type="text"  required></td>
    </tr>
      <tr>
      <td width="172"><font color=blue size=4>Set Delivery Status </td>
      <td width="204"><input name="d_status" type="text"  required></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form><br><br>
    <form action="bybookid.php" method="post">
  <table width="584" height="245" border="0" align="center">
    <tr>
      <td colspan="2" bgcolor=#008080><div align="center"><strong><span class="style2">Set Delivery Status By Book Id</span></strong></div></td>
    </tr>
    <tr>
      <td width="172"><font color=blue size=4>Enter Book ID </td>
      <td width="204"><input name="bid" type="text"  required></td>
    </tr>
      <tr>
      <td width="172"><font color=blue size=4>Set Delivery Status </td>
      <td width="204"><input name="d_status" type="text"  required></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
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
        $pid=$_POST['pid'];
        
        $d_status=$_POST['d_status'];
        $n=0;
        
            mysql_connect("localhost","root","") or die("can not connect");
            mysql_select_db("bookshop") or die("can not connect");
        
           
         $qry1=mysql_query("select * from purchase");
        while($row=mysql_fetch_array($qry1))
        {
            if($row['pid']==$pid)
            {
                $n=1;
            }
           
                
        }
        if($n==1)
        {
          
    
            $qry="UPDATE purchase SET d_status='$d_status' WHERE pid='$pid'";
            $result=mysql_query($qry);
            if($result)
            {
                echo"<center><font color=red size=6>Delivery Status Changed Successfuly</font><br>";
                echo"New Delivery Status Is:".$d_status."<br>";
                
            }
            else
            {
                echo"check code";
            }
           
        }
        else{
            echo"<center><font color=red size=6>Entered Purchase ID is NOT EXIST OR NOT VALID</font></center>";
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
          echo"<center><font color=blue size=7>You Have To Login First</font></center>";  
        }
?>      
    </body>
</html>