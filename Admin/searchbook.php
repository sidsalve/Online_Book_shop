<html>
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
  <table width="400" height="200" border="0" align="center">
    <tr height=50>
        <td colspan="2" bgcolor=purple><div align="center"><font color=red size=5><span class="style2">*Search Book By ID*</span></font></div></td>
    </tr>
    <tr>
      <td width="" align=center><font color=white>Enter Book ID:</td>
      <td width="" align=center><input name="bid" type="text" id="bid" required></td>
    </tr>

    <tr>
        <td></td>
      <td height=50> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="Submit"></td>
    </tr>
    </table>
    <center><font size=5 color=blue>OR</font></center>
        </form>
      <form action="searchbname.php" method="post">
  <table width="400" height="200" border="0" align="center">

      <tr height=50>
        <td colspan="2" bgcolor=orange><div align="center"><font color=red size=5><span class="style2">*Search Book By Name*</span></font></div></td>
    </tr>
    <tr align=center>
      <td width=""><font color=white>Enter Book Name:</td>
      <td width=""><input name="bname" type="text" id="bname" required></td>
    </tr>

    <tr>
        <td height=50><input type="button" value="Back" onclick="history.go(-1);"></td>
      <td
          height=50> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>
   <?php     
        }
else
{
    ?><center>
        <font size=5 color=blue>***Search Books***</font>
        <table border="0" width=100%>
            <tr bgcolor=orange><th>Book Image</th><th>Book ID</th><th>Book Name</th><th>Author</th><th>Publication</th><th>Edition</th><th>Category</th><th>Pages</th><th>Price</th><th>Nos.</th><th>Language</th><th>ISBN No.</th><th>Operation On Book</th></tr>
 
        <?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
       $bid=$_POST['bid'];
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
                <td><a href="editbook.php?bid=<?php echo $bid; ?>">Edit</a><br>
                    <a href="aconfirm.php?bid=<?php echo $bid; ?>">Delete</a><br>
                    </td>
            </tr></table><br>
 
        <input type="button" value="Back" onclick="history.go(-1);"></center>
        <?php
            }
        
               }
        if(!$n==1) 
        {
                echo"<center><font size=6 color=red>Book ID is NOT Valid</font></center>";
            }

    }
     else
            {
                die("not able to process the script");
            }
}
        
        ?>
        
    

        <?php
    }
        else
        {
            echo"<center><font color=blue size=7>You Have To Login First......</font></center>";
        }
        ?>
        
        
       
    </body>
</html>