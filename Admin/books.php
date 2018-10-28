<html>
    <head>
        <style>
       .footer {
    max-width: 1200px;
    margin: auto;
    background: purple;
    padding: 10px;
           text-align:center;
	position:absolute;
	left:6%;
	right:0;
	margin:0 auto;
	bottom:50px;
        
       
}  
            </style>

    </head>
    <body bgcolor=black>
         <?php
        session_start();
         if(isset($_SESSION['logged_in1']) && $_SESSION['logged_in1']==true)
    { 
        
    ?>
        <?php  mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bookshop") or die(mysql_error());
$count=0; 

$q=mysql_query("select * from book") or die(mysql_error());

while($row=mysql_fetch_array($q))
{
    if($row['category']=='Educational')
    {
        $count++;
    }
}
$count1=$count;?><?php mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bookshop") or die(mysql_error());
$count=0; 

$q=mysql_query("select * from book") or die(mysql_error());


        
            while($row=mysql_fetch_array($q))
{
    if($row['category']=='Novel')
    {
        $count++;
    }
}
            $count2=$count;

            ?>
            <?php mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bookshop") or die(mysql_error());
$count=0; 

$q=mysql_query("select * from book") or die(mysql_error());


        
            while($row=mysql_fetch_array($q))
{
    if($row['category']=='Bussiness')
    {
        $count++;
    }
}
            $count3=$count;

            ?>
            <?php mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bookshop") or die(mysql_error());
$count=0; 

$q=mysql_query("select * from book") or die(mysql_error());


        
            while($row=mysql_fetch_array($q))
{
    if($row['category']=='Biography')
    {
        $count++;
    }
}
            $count3=$count;

            ?>
            <?php mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bookshop") or die(mysql_error());
$count=0; 

$q=mysql_query("select * from book") or die(mysql_error());


        
            while($row=mysql_fetch_array($q))
{
    if($row['category']=='Historical')
    {
        $count++;
    }
}
            $count4=$count;

            ?>
            <?php mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bookshop") or die(mysql_error());
$count=0; 

$q=mysql_query("select * from book") or die(mysql_error());


        
            while($row=mysql_fetch_array($q))
{
    if($row['category']=='Scientific')
    {
        $count++;
    }
}
            $count5=$count;

            ?>
            <?php mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bookshop") or die(mysql_error());
$count=0; 

$q=mysql_query("select * from book") or die(mysql_error());


        
            while($row=mysql_fetch_array($q))
{
    if($row['category']=='Other')
    {
        $count++;
    }
}
            $count6=$count;

            ?>
            <?php mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bookshop") or die(mysql_error());
$count=0; 

$q=mysql_query("select * from book") or die(mysql_error());


        
            while($row=mysql_fetch_array($q))
{
    if($row['category']=='Bussiness')
    {
        $count++;
    }
}
            $count7=$count;

            ?>
        <center><font size=6 color=red>*..Books Category..*</font></center>
<table width="284" height="334" border="0" align="center">
  <tr>
    <td> <h1>

            <font color=blue><li><a href=educational.php>Educational</a><?php echo'&nbsp;(' .$count1.')';?></li>
            <li><a href=novel.php>Novel</a><?php echo'&nbsp;(' .$count2.')';?></li>
            <li><a href=biography.php>Biography</a><?php echo'&nbsp;(' .$count3.')';?></li>
            <li><a href=business.php>Business</a><?php echo'&nbsp;(' .$count7.')';?></li>
            <li><a href=historical.php>Historical</a><?php echo'&nbsp;(' .$count4.')';?></li>
            <li><a href=scientific.php>Scientific</a><?php echo'&nbsp;(' .$count5.')';?></li>
                <li><a href=other.php>Other</a><?php echo'&nbsp;(' .$count6.')';?></li></font>
        
              



            </h1>
        
</td>
  </tr>
</table>
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

    