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
	left:6%;
	right:0;
	margin:0 auto;
	bottom:50px;
       
} 
            .content1{
                 text-align:center;
	position:inherit;
	left:0;
	right:0;
	margin:0 auto;
	bottom:50px;
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
         mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bookshop") or die(mysql_error());

            $count=0;
            $q=mysql_query("select * from book") or die(mysql_error());
            while($row=mysql_fetch_array($q))
            {
    
              $count++;
            }
        $count3=$count;
        ?>
        <?php
        $count=0;
        $date=date("D d.M.Y");
            $q=mysql_query("select * from purchase where date like '$date%'") or die(mysql_error());
            while($row=mysql_fetch_array($q))
            {
                $count++;
            }
        $count1=$count;
        ?>
          <?php
        $count=0;
        
            $q=mysql_query("select * from signup") or die(mysql_error());
            while($row=mysql_fetch_array($q))
            {
                $count++;
            }
        $count2=$count;
        ?>
        <?php
        $counter=0;
        $status='IN';
            $q=mysql_query("select * from purchase where d_status like '%$status%'") or die(mysql_error());
            while($row=mysql_fetch_array($q))
            {
              
              
                $counter++;
              
                 
            }
        $count6=$counter;
       
        ?>
        <?php
        $counter=0;
        $status='Dis';
            $q=mysql_query("select * from purchase where d_status like '%$status%'") or die(mysql_error());
            while($row=mysql_fetch_array($q))
            {
              
              
                $counter++;
              
                 
            }
        $count7=$counter;
       
        ?>
        <?php
        $counter=0;
        $status='Deli';
            $q=mysql_query("select * from purchase where d_status like '%$status%'") or die(mysql_error());
            while($row=mysql_fetch_array($q))
            {
              
              
                $counter++;
              
                 
            }
        $count8=$counter;
       
        ?>
        
<font color=blue size=7><center>*....Welcome Admin....*</center></font><hr color=purple>
        <br><div class="content1"><font size=6 color=blue>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="books.php">Books</a><?php echo '('.$count3.')';?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="addbook%20.html">Add New Book</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="order.php">Order Of The Day</a><?php echo '('.$count1.')';?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="user.php">Our Users</a><?php echo '('.$count2.')';?>
     </font></div><br><br>
        
        <table width="1015" height="186" border="0" align="center">
  <tr>
    <td><font size=5 color=red>Operation On A Book</font>
        <font size=5 color=blue><li><a href="searchbook.php">Search Book</a></li>
            <li><a href="editbook.php">Edit Book</a></li>
            <li><a href="deletebook.php">Delete Book</a></li></font></td>
      <td width="500"><br><br><center><font color=orange size=5>*******</font></center></td>
    <td><font size=5 color=red>Operation On Order</font>
        <font size=5 color=blue><li><a href="inprocess.php">In Process Orders</a><?php echo '('.$count6.')';?></li>
            <li><a href="dispatched.php"> Dispatched Orders</a><?php echo '('.$count7.')';?></li>
            <li><a href="deliver.php"> Deliver Orders</a><?php echo '('.$count8.')';?></li></font></td>
  </tr>
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