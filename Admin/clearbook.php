<html>
    
    <body>

<?php
 mysql_connect("localhost","root","") or die("can not connect");
mysql_select_db("bookshop") or die("can not connect");
    
            
            $bid=$_GET['bid'];
$qry="DELETE from book WHERE bid='$bid'";
$result=mysql_query($qry);
if($result)
{
     echo"<center><font color=red size=6>Book is Deleted Successfuly</font><br>";
}
else{
     echo"<center><font color=red size=6>Sorry,Book NOT Delete Because Of Technical Problem Try Next Time</font><br>";
}
            
    ?>
        </body>
    </html>