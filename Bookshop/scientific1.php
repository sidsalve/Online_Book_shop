<html>
    <head>
        <title>Search Scientific Books</title>
    <meta http-equiv="refresh" content="90">
<style>
body {
    background: pink;
}
    .content1 {
    max-width: 1200px;
    margin: auto;
    background: white;
    padding: 10px;
    position: relative;
    
    }

.content2 {
    max-width: 1200px;
    margin: auto;
    background: red;
    padding: 10px;
    
    
    
}
    .content3 {
    max-width: 1200px;
    margin: auto;
    background: green;
    padding: 10px;
        
       
}
   .footer {
    max-width: 1200px;
    margin: auto;
    background: purple;
    padding: 10px;
        
       
}  
</style>
    <style>
.dropbtn {
    background-color: ;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: white;
}
</style>

    </head>
<body>
    <div class="content1">

<div class="content2">
    <CENTER><MARQUEE behavior="alternate"> <font face="Bauhaus 93" size="10" color="green">B</font><font face="Bauhaus 93" size="10" color="blue">O</font><font face="Bauhaus 93" size="10" color="white">O</font><font face="Bauhaus 93" size="10" color="silver">K</font>&nbsp;&nbsp;<font face="Bauhaus 93" size="10" color="yellow">S</font><font face="Bauhaus 93" size="10" color="violet">H</font>    <font face="Bauhaus 93" size="10" color="blue">O</font><font face="Bauhaus 93" size="10" color="silver">P</font></MARQUEE>
    </CENTER>
    <?php
session_start();
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
    {
echo"<font size=3 align=right><a href=logout.php>Logout</a>&nbsp;&nbsp;(".$_SESSION['uname'].")</font>";
    }
?>
</div>
    <br>
    <div class="content3">
        <font size=4 color="white">
            <img src="tball.gif" width="14" height="14"><a href="home.php" ><font color="white">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="tball.gif" width="14" height="14"><a href="login1.php"><font color="white">Login</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="tball.gif" width="14" height="14"><a href="signup1.php"><font color="white">SignUp</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="dropdown">
                <img src="tball.gif" width="14" height="14"><a href="#"><font color="white">Search Book</font></a>
                <div class="dropdown-content">
                    
    <a href="educational1.php">Educational</a>

    <a href="novel1.php">Novel</a>
    <a href="bussiness1.php">Business</a>
                <a href="biography1.php">Biography</a>
                <a href="historical1.php">Historical</a>
                <a href="scientific1.php">Scientific</a>
                    <a href="other1.php">Other</a>
                
                </div></div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="dropdown">
            <img src="tball.gif" width="14" height="14"><a href="#"><font color="white">Category</font></a>
                          <div class="dropdown-content">
    <a href="educational2.php">Educational</a>
    <a href="novel2.php">Novel</a>
    <a href="bussiness2.php">Business</a>
                <a href="biography2.php">Biography</a>
                <a href="historical2.php">Historical</a>
                <a href="scientific2.php">Scientific</a>
                <a href="other2.php">Other</a>
                
                </div></div>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="dropdown">
            <img src="tball.gif" width="14" height="14"><a href="#"><font color="white">New Issue</font></a>
                <div class="dropdown-content">
    <a href="educational3.php">Educational</a>
    <a href="novel3.php">Novel</a>
    <a href="bussiness3.php">Business</a>
                <a href="biography3.php">Biography</a>
                <a href="historical3.php">Historical</a>
                <a href="scientific3.php">Scientific</a>
                    <a href="other3.php">Other</a>
                
                </div></div>
        </font></div>
    <?php
       
        if($_SERVER['REQUEST_METHOD']=='GET')
        {
            ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <table width="584" height="245" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong><span class="style2">Search Scientific Book</span></strong></div></td>
    </tr>
    <tr>
      <td width="172">Enter Book Name: </td>
      <td width="204"><input name="name" type="text" id="name" required></td>
    </tr>
    <tr>
      <td></td>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>
   <?php     
        }
else
{
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $name=$_POST['name'];
        
        
        $n=0;
        
            mysql_connect("localhost","root","") or die("can not connect");
            mysql_select_db("bookshop") or die("can not connect");
            $qry="select * from book where bname like '%$name%'";
            $result=mysql_query($qry);
            while($row=mysql_fetch_array($result))
            {
                $bid=$row['bid'];
                if($row['category']=='Scientific')
                {
                    $n=1;
              ?>
        <table width="900" height="96" border="0">
<tr>
    <td width="82" rowspan="5"> 
        
        
	<a href="detail.php?bid=<?php echo $bid;?>">
    <img height="80" width="70" src="data:image;base64,<?php echo $row[14]; ?>">
    </a></td>
    
  </tr>
  <tr>
    <td width="283"><?php echo"<b>Book Name:<font color=red>";
    echo $row['bname']."</font></b>"; ?></td>
    <td width="355"><?php echo"<b>Author Name:<font color=red>";
    echo $row['author']."</font></b>";?></td>
  </tr>
  <tr>
    <td><?php echo"<b>Publication:<font color=red>";
    echo $row['publication']."</font></b>";?> </td>
    <td><?php echo"<b>Edition:<font color=red>";
    echo $row['edition']."</font></b>";?></td>
  </tr>
  <tr>
    <td><?php echo"<b>Category:<font color=red>";
    echo $row['category']."</font></b>"; ?></td>
    <td><?php echo"<b>Pages:<font color=red>";
    echo $row['pages']."</font></b>";?></td>
  </tr>
  <tr>
    <td><?php echo"<b>Price:<font color=red><u>";
    echo $row['price']."</font></u></b>";?></td>
    <td><?php echo"<b>Available in:<font color=red>";
    echo $row['lang']."</font><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?><a href="purchase1.php?bid=<?php echo $bid; ?>">Purchase Book</a></td></td>
  </tr>
     
            </table>
            
        <?php
                }
            }
        if(!$n==1)
        {
            echo"<center><font size=6 color=blue>This Book is NOT Available</font></center><br><br><br>";
        }
                
            }
        
    
     else
            {
                die("not able to process the script");
            }
}
        
        ?>
        <input type="button" value="Back" onclick="history.go(-1);">
         <?php

    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
    {

?>

                
                <div class="footer">
                    <font size=4 color="white">**User Profile**</font><br><br>
                                <img src="tball.gif" width="14" height="14"><a href="shoppingcart.php"><font color="white">Shopping Cart</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="tball.gif" width="14" height="14"><a href="changepassword.php" ><font color="white">Change Password</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="tball.gif" width="14" height="14"><a href="changecontact.php"><font color="white">Change Contact No.</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="tball.gif" width="14" height="14"><a href="changeaddress.php"><font color="white">Change Address</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="tball.gif" width="14" height="14"><a href="t&c.php"><font color="white">Terms And Conditions</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           </div>     
                <?php
    }
                ?>

</body>
</html>
