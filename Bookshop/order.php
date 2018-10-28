<html>
    <body>
        <center>
        <table border="1">
            <tr><th>Purchase ID</th><th>Book ID</th><th>User ID</th><th>Date</th><th>Pay Type</th><th>Bank Name</th><th>IFSC Code</th><th>Card Type</th><th>Delivery Status</th></tr>
        <?php
        mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bookshop") or die(mysql_error());
$count=0; 

$q=mysql_query("select * from purchase") or die(mysql_error());
$n=0;
while($row=mysql_fetch_array($q))
{

$count++;



echo "<tr ><td >";
echo $row['pid'] ."</td>";
echo "<td >";
echo $row['bid'] ."</td>";
echo "<td >";
echo $row["uid"]."</td>";
echo "<td >";
echo $row["date"]."</td>";
echo "<td >";
echo $row["paytype"]."</td>";
echo "<td>";
echo $row["bank_name"]."</td>";
echo "<td>";
echo $row["IFSC"]."</td>";
echo "<td>";
echo $row["card_type"]."</td>";
echo "<td>";
echo $row["d_status"]."</td></tr>";


}

?>
            
        </table>
            <font size=4><a href="setdelivery.php"><b>Set Delivery Status</b></a></font></center>
        
</body>
</html>

    