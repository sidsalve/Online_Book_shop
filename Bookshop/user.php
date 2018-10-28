<html>
    <body>
        <center>
        <table border="1">
            <tr><th>User Id</th><th>First Name</th><th>Last Name</th><th>Date Of Birth</th><th>Gender</th><th>Email ID</th><th>Contact No.</th><th>Residential Address</th><th>Permanant Address</th><th>Pin Code</th></tr>
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
            <tr><td><?php echo $row['uid'];?></td>
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
            
        
</body>
</html>

    