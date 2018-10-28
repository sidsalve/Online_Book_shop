<html>
<body bgcolor=black>
    <table border="0" width=100% >
            <tr bgcolor=orange height=30><th>Book Image</th><th>Book ID</th><th>Book Name</th><th>Author</th><th>Publication</th><th>Edition</th><th>Category</th><th>Pages</th><th>Price</th><th>Nos.</th><th>Language</th><th>ISBN No.</th></tr>

 
 <?php
        $bid=$_GET['bid'];
       $n=0;
    mysql_connect("localhost","root","") or die("can not connect");
            mysql_select_db("bookshop") or die("can not connect");
            $qry="select * from book";
        $result=mysql_query($qry);
        while($row=mysql_fetch_array($result))
        {
            if($row['bid']==$bid)
            {
                $n=1;
       ?>
                <tr align=center bgcolor=pink><td><img height="80" width="70" src="data:image;base64,<?php echo $row[14]; ?>"></td>
                <td><font><?php echo $row['bid'];?></font></td>
                <td><?php echo $row['bname'];?></td>
                <td><?php echo $row['author'];?></td>
                <td><?php echo $row['publication'];?></td>
                <td><?php echo $row['edition'];?></td>
                <td><?php echo $row['category'];?></td>
                <td><?php echo $row['pages'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['nos'];?></td>
                <td><?php echo $row['lang'];?></td>
                <td><?php echo $row['isbn'];?></td>
                
            </tr></table><br>
        <center><font size=6 color=red>Do You Want to Delete This Book Permanantly.</font><br>
            <font size=6 color=blue><a href="clearbook.php?bid=<?php echo $bid; ?>">Confirm</a><br><a href="afterlogin.php">Cancel</a></font><br><input type="button" value="Back" onclick="history.go(-1);"></center>
        <?php
            }
        
               }
        if(!$n==1) 
        {
                echo"<center><font size=6 color=red>Book ID is NOT Valid</font></center>";
            }

    

        
        ?>
    </body>
</html>
