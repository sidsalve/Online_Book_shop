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
        <center><font size=5 color=blue>Dispatched Orders</font>
        <table border="0" width=100%>
            <tr bgcolor=blue><th>Purchase ID</th><th>Book ID</th><th>User ID</th><th>Date</th><th>Pay Type</th><th>Bank Name</th><th>IFSC Code</th><th>Card Type</th><th>Delivery Status</th></tr>
        <?php
        mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bookshop") or die(mysql_error());
$count=0; 

$q=mysql_query("select * from purchase") or die(mysql_error());
$n=0;
while($row=mysql_fetch_array($q))
{
   if($row['d_status']=='Dispatched')
    {
    


$count++;



echo "<tr align=center bgcolor=pink><td >";
echo $row['pid'] ."</td>";
echo "<td >";
?>
            <a href="bookid.php?bid=<?php echo $row['bid'];?>"><?php echo $row['bid'];?></a>
            <?php
    
    
echo "</td>";
echo "<td >";
    ?>
          <a href="userid.php?uid=<?php echo $row['uid'];?>"><?php echo $row['uid'];?></a>   
            <?php
echo "<td >";
echo $row["date"]."</td>";
echo "<td >";
echo $row["paytype"]."</td>";
echo "<td>";
echo $row["bank_name"]."</td>";
echo "<td>";
echo $row["IFSC"]."</td>";
echo "<td>";
echo $row["card_type"]."</td>";
echo "<td>";
echo $row["d_status"]."</td></tr>";


}
}

?>
            
        </table>
            <font size=4><a href="setdelivery.php"><b>Set Delivery Status</b></a></font></center>
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

    