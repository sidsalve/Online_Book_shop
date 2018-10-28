<html>
    <body bgcolor=black>
      <center>
        <font size=5 color=blue>***User Details***</font>
        <table border="0" width=100%>
           <tr bgcolor=#ff8c00><th>User Id</th><th>First Name</th><th>Last Name</th><th>Date Of Birth</th><th>Gender</th><th>Email ID</th><th>Contact No.</th><th>Residential Address</th><th>Permanant Address</th><th>Pin Code</th></tr>
        <?php
   
       $uid=$_GET['uid'];
       $n=0;
    mysql_connect("localhost","root","") or die("can not connect");
            mysql_select_db("bookshop") or die("can not connect");
            $qry="select * from signup";
        $result=mysql_query($qry);
        while($row=mysql_fetch_array($result))
        {
            if($row['uid']==$uid)
            {
                $n=1;
       ?>
            <tr align=center bgcolor=pink><td ><?php echo $row['uid'];?></td>
                <td><?php echo $row['fname'];?></td>
                <td><?php echo $row['lname'];?></td>
                <td><?php echo $row['bod'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['contact'];?></td>
                <td><?php echo $row['residential'];?></td>
                <td><?php echo $row['permanant'];?></td>
                <td><?php echo $row['pin'];?></td></tr>
                

            </table><br>
 
        <input type="button" value="Back" onclick="history.go(-1);"></center>
        <?php
            }
        
               }
        if(!$n==1) 
        {
                echo"<center><font size=6 color=red>User ID is NOT Valid</font></center>";
            }

            
   

        
        ?>
        
    

        
        
        
       
    </body>
</html>