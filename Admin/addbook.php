<HTML>
    <BODY>
<?php
mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("bookshop") or die(mysql_error());
$bid=0;
$n1=$_REQUEST["n1"];
$n2=$_REQUEST["n2"];
$n3=$_REQUEST["n3"];
$n4=$_REQUEST["n4"];
$n5=$_REQUEST["n5"];
$n6=$_REQUEST["n6"];
$n7=$_REQUEST["n7"];
$n8=$_REQUEST["n8"];
$n9=$_REQUEST["n9"];
$n10=$_REQUEST["n10"];
$n11=$_REQUEST["n11"];
$n12=$_REQUEST["n12"];
$n13=$_REQUEST["n13"];
$n14=addslashes($_FILES['image']['tmp_name']);

$n15=file_get_contents($n14);
$n16=base64_encode($n15);
        

        $qry="insert into book values('$bid','$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10','$n11','$n12','$n13','$n16')";
    	$result=mysql_query($qry);
if($result)
{
    echo"<center><font color=Green size=7>".$n1."<font><font color=orange size=7> Is sucsessfuly Added </font><br>";
    echo"<a href='http://localhost/Bookshop/Admin/addbook%20.html'>Add Another Book</a>";
}
    else
    {
        echo"<font color=red size=5>Opps,Somthing Went Wrong,Try Later</font>";
    }
mysql_close();
        ?>
    </BODY>
</HTML>
    