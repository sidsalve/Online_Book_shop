<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <style>
body {
    background: grey;
}
    .content1 {
    max-width: 1000px;
    max-height:1000px;
    margin: auto;
    background: white;
    padding: 10px;
    position: relative;
    
    }
        </style>

    
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<body>
    <?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bookshop") or die(mysql_error()); 
$q=mysql_query("select * from book") or die(mysql_error());
$n=0;
while($row=mysql_fetch_array($q))
{
    if($row['category']=='Educational')
    {
$id=$row['id'];
?>
<div class="content1">
 <table width="612" border="0">
  <tr>
    <td width="90" rowspan="5"> 
        
        
	<a href="detail.php?id=<?php echo $id; ?>">
    <img height="80" width="70" src="data:image;base64,<?php echo $row[14]; ?>">
    </a></td>
    
   </tr>
  <tr>
    <td><?php echo"<b>Book Name:";
    echo $row['bname']."<b>&nbsp;&nbsp;:::&nbsp;&nbsp;"; echo"<b>Author Name:";
    echo $row['author']."<b>";?></td>
  </tr>
  <tr>
    <td><?php echo"<b>Publication:";
    echo $row['publication']."<b>&nbsp;&nbsp;:::&nbsp;&nbsp;"; echo"<b>Edition:";
    echo $row['edition']."<b>";?></td>
  </tr>
  <tr>
    <td><?php echo"<b>Category:";
    echo $row['category']."<b>&nbsp;&nbsp;:::&nbsp;&nbsp;"; echo"<b>Pages:";
    echo $row['pages']."<b>";?></td>
  </tr>
  <tr>
    <td><?php echo"<b>Price:<u>";
    echo $row['price']."</u><b>&nbsp;&nbsp;:::&nbsp;&nbsp;"; echo"<b>Available in:";
    echo $row['lang']."<b>";?></td>
  </tr>
</table>
        </div>
        
    <?php
    }
}
    ?>
 
</body>
</html>
