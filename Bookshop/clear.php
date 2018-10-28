<html>
    
    <body>

<?php
 mysql_connect("localhost","root","") or die("can not connect");
mysql_select_db("bookshop") or die("can not connect");
    
            
            $pid=$_GET['pid'];
$qry="DELETE from purchase WHERE pid='$pid'";
$result=mysql_query($qry);
if($result)
{
     echo"<center><font color=red size=6>Order is Deleted Successfuly</font><br>";
}
else{
     echo"<center><font color=red size=6>Sorry,Order NOT Delete Because Of Technical Problem Try Next Time</font><br>";
}
            
    ?>
        </body>
    </html>