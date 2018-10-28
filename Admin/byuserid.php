<?php
$uid=$_POST['uid'];
        
        $d_status=$_POST['d_status'];
        $n=0;
        
            mysql_connect("localhost","root","") or die("can not connect");
            mysql_select_db("bookshop") or die("can not connect");
        
           
         $qry1=mysql_query("select * from purchase");
        while($row=mysql_fetch_array($qry1))
        {
            if($row['uid']==$uid)
            {
                $n=1;
            }
           
                
        }
        if($n==1)
        {
          
    
            $qry="UPDATE purchase SET d_status='$d_status' WHERE uid='$uid'";
            $result=mysql_query($qry);
            if($result)
            {
                echo"<center><font color=red size=6>Delivery Status Changed Successfuly</font><br>";
                echo"New Delivery Status Is:".$d_status."<br>";
                
            }
            else
            {
                echo"check code";
            }
           
        }
        else{
            echo"<center><font color=red size=6>Entered Purchase ID is NOT EXIST OR NOT VALID</font></center>";
        }
?>
    
