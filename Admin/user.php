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
        <center>
            <font color=rainbow size=7>....Our Users....</font>
        <table border="0">
            <tr bgcolor=red><th>User Id</th><th>First Name</th><th>Last Name</th><th>Date Of Birth</th><th>Gender</th><th>Email ID</th><th>Contact No.</th><th>Residential Address</th><th>Permanant Address</th><th>Pin Code</th></tr>
        <?php
        mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bookshop") or die(mysql_error());
$count=0; 

$q=mysql_query("select * from signup") or die(mysql_error());
$n=0;
while($row=mysql_fetch_array($q))
{

$count++;
    ?>
            <tr align=center bgcolor=pink><td><?php echo $row['uid'];?></td>
                <td><?php echo $row['fname'];?></td>
                <td><?php echo $row['lname'];?></td>
                <td><?php echo $row['bod'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['contact'];?></td>
                <td><?php echo $row['residential'];?></td>
                <td><?php echo $row['permanant'];?></td>
                <td><?php echo $row['pin'];?></td></tr>
                
            <?php

}

?>
            
        </table>
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

    