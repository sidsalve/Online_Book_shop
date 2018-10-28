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
<center><font size=5 color=purple>***Historical Books***</font>
        <table border="0"  width=100%>
            
            <tr bgcolor=#ff8c00><th>Book Image</th><th>Book ID</th><th>Book Name</th><th>Author</th><th>Publication</th><th>Edition</th><th>Category</th><th>Pages</th><th>Price</th><th>Nos.</th><th>Language</th><th>ISBN No.</th></tr>
 
            <?php
             mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bookshop") or die(mysql_error());

            $count=0;
            $q=mysql_query("select * from book") or die(mysql_error());
            while($row=mysql_fetch_array($q))
{
    if($row['category']=='Historical')
    {$count++;
    ?>
            <tr align=center bgcolor=pink><td><img height="80" width="70" src="data:image;base64,<?php echo $row[14]; ?>"></td>
                <td><?php echo $row['bid'];?></td>
                <td><?php echo $row['bname'];?></td>
                <td><?php echo $row['author'];?></td>
                <td><?php echo $row['publication'];?></td>
                <td><?php echo $row['edition'];?></td>
                <td><?php echo $row['category'];?></td>
                <td><?php echo $row['pages'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['nos'];?></td>
                <td><?php echo $row['lang'];?></td>
                <td><?php echo $row['isbn'];?></td></tr>
            <?php

    }
    
}
            echo"<font color=red><h4>Total Historical Books:$count</h4></font>";

?>
            
        </table>
        </center>
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