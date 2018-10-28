<html>
    <body bgcolor=black>
                   <?php
        session_start();
         if(isset($_SESSION['logged_in1']) && $_SESSION['logged_in1']==true)
    { 
      ?>

<center>
        <font size=5 color=blue>***Search Books***</font>
        <table border="0" width=100%>
            <tr bgcolor=orange><th>Book Image</th><th>Book ID</th><th>Book Name</th><th>Author</th><th>Publication</th><th>Edition</th><th>Category</th><th>Pages</th><th>Price</th><th>Nos.</th><th>Language</th><th>ISBN No.</th><th>Operation On Book</th></tr>


<?php
$bname=$_POST['bname'];
        
        
        $n=0;
        
            mysql_connect("localhost","root","") or die("can not connect");
            mysql_select_db("bookshop") or die("can not connect");
            $qry="select * from book where bname like '%$bname%'";
            $result=mysql_query($qry);
            while($row=mysql_fetch_array($result))
            {
                $bid=$row['bid'];

                    $n=1;
                ?>
            <tr bgcolor=pink align=center><td><img height="80" width="70" src="data:image;base64,<?php echo $row[14]; ?>"></td>
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
                <td><a href="editbook.php?bid=<?php echo $bid; ?>">Edit</a><br>
                    <a href="aconfirm.php?bid=<?php echo $bid; ?>">Delete</a><br>
                    </td>
            </tr>
 
        
        <?php
            }
        if(!$n==1)
        {
         echo"<center><font color=red size=7>Invalid Book Name</font></center>";     
        }
       
            ?>
        </center>
        </table>
        <input type="button" value="Back" onclick="history.go(-1);"></center>
    <?php
    }
    else
    {
      echo"<center><font color=blue size=7>You Have To Login First......</font></center>";  
    }
    ?>
    
    </body>
</html>