<!DOCTYPE html>
<html>
<head>
    <title>HOME:Online Book Shopping</title>

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
        background-image:url();

    
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
    background:green;
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
        .button-wrapper {
    margin: 0 auto;
/*    padding: 20px 0;
    width: 320px;
	clear: both;*/
}

.button-wrapper a {
	color: #000;
	text-decoration: none;
	font-family: 'Oswald',Arial,sans-serif;	
}

/* ################# BUTTON STYLE 1 ################# */

.a-btn{
    background:#a9db80;
    background:-webkit-gradient(linear,left top,left bottom,color-stop(#fff,0),color-stop(#fff,1));
    background:-webkit-linear-gradient(top, #fff 0%, #fff 100%);
    background:-moz-linear-gradient(top, #fff 0%, #fff 100%);
    background:-o-linear-gradient(top, #fff 0%, #fff 100%);
    background:linear-gradient(top, #fff 0%, #fff 100%);
    filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff', endColorstr='#fff',GradientType=0 );
    padding-left:7px;
    padding-right:70px;
    width:130px;
    height:40px;
    display:inline-block;
    position:relative;
    border:1px solid #666;
    -webkit-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 3px rgba(0,0,0,0.2);
    -moz-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 3px rgba(0,0,0,0.2);
    box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 3px rgba(0,0,0,0.2);
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    float:left;
    clear:both;
    margin:5px 5px;
    overflow:hidden;
    -webkit-transition:box-shadow 0.3s ease-in-out;
    -moz-transition:box-shadow 0.3s ease-in-out;
    -o-transition:box-shadow 0.3s ease-in-out;
    transition:box-shadow 0.3s ease-in-out;

}
.a-btn img{
    position:absolute;
    left:7px;
    top:0px;
    border:none;
    -webkit-transition:all 0.3s ease-in-out;
    -moz-transition:all 0.3s ease-in-out;
    -o-transition:all 0.3s ease-in-out;
    transition:all 0.3s ease-in-out;
}
.a-btn .a-btn-slide-text{
    position:absolute;
    font-size:36px;
    top:10px;
    right:10px;
    color:#6d954e;
    opacity:0;
    text-shadow:0px 1px 1px rgba(255,255,255,0.4);
    -webkit-transition:opacity 0.2s ease-in-out;
    -moz-transition:opacity 0.2s ease-in-out;
    -o-transition:opacity 0.2s ease-in-out;
    transition:opacity 0.2s ease-in-out;
}
.a-btn-text{
    padding-top:2px;
	padding-left:2px;
    display:block;
    font-size:15px;
   /* text-shadow:0px -1px 1px #666;*/
}

.a-btn-icon-right{
    position:absolute;
    right:0px;
    top:0px;
    height:100%;
    width:50px;
    border-left:1px solid #666;
    -webkit-box-shadow:1px 0px 1px rgba(255,255,255,0.4) inset;
    -moz-box-shadow:1px 0px 1px rgba(255,255,255,0.4) inset;
    box-shadow:1px 0px 1px rgba(255,255,255,0.4) inset;
}
.a-btn-icon-right span{
    width:38px;
    height:38px;
    opacity:0.7;
    -webkit-border-radius:20px;
    -moz-border-radius:20px;
    border-radius:20px;
    position:absolute;
    left:40%;
    top:50%;
    margin:0px 0px 0px 0px;
    border:1px solid rgba(0,0,0,0.5);
    background:#4e5c50 url(http://design14.volusion.com/v/proofs/Hack_Day_CSS3/images/arrow_right.png) no-repeat center 

center;
    -webkit-box-shadow:0px 1px 1px rgba(255,255,255,0.3) inset, 0px 1px 2px rgba(255,255,255,0.5);
    -moz-box-shadow:0px 1px 1px rgba(255,255,255,0.3) inset, 0px 1px 2px rgba(255,255,255,0.5);
    box-shadow:0px 1px 1px rgba(255,255,255,0.3) inset, 0px 1px 2px rgba(255,255,255,0.5);
    -webkit-transition:all 0.3s ease-in-out;
    -moz-transition:all 0.3s ease-in-out;
    -o-transition:all 0.3s ease-in-out;
    transition:all 0.3s ease-in-out;
}
.a-btn:active{
    position:relative;
    top:1px;
    background:#fff;
    -webkit-box-shadow:1px 1px 2px rgba(0,0,0,0.4) inset;
    -moz-box-shadow:1px 1px 2px rgba(0,0,0,0.4) inset;
    box-shadow:1px 1px 2px rgba(0,0,0,0.4) inset;
    border-color:#2B5555;
}
.a-btn:active .a-btn-icon-right span{
    -webkit-transform:scale(1.4);
    -moz-transform:scale(1.4);
    -ms-transform:scale(1.4);
    -o-transform:scale(1.4);
    transform:scale(1.4);
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
        <img width="1200px" height="200px" src="book.jpg">
        <div>
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
            <div>
            
            <font color="purple"><h3><u>Categories</u></h3>
            
                <h4>
                    <div class="button-wrapper">
                    <a href="educational2.php" class="a-btn">
                        <span style="color:#205A5A;font-weight:bold;line-height:1.3">Educational</span>
                        <span class="a-btn-icon-right"><?php echo'&nbsp;(' .$count1.')';?></span>
                        <span class="a-btn-slide-text"><span class="a-btn-icon-right">
<span>
</span>
</span>
</span>
</a>
                    </div><br><br><br>
                    
                    
    
                    <div class="button-wrapper">
                    <a href="novel2.php" class="a-btn">
                        <span style="color:#205A5A;font-weight:bold;line-height:1.3">Novels</span>
                        <span class="a-btn-icon-right"><?php echo'&nbsp;(' .$count2.')';?></span>
                        <span class="a-btn-slide-text"><span class="a-btn-icon-right">
<span>
</span>
</span>
</span>
</a>
                    </div><br><br><br>
                    <div class="button-wrapper">
                    <a href="bussiness2.php" class="a-btn">
                        <span style="color:#205A5A;font-weight:bold;line-height:1.3">Business</span>
                        <span class="a-btn-icon-right"><?php echo'&nbsp;(' .$count7.')';?></span>
                        <span class="a-btn-slide-text"><span class="a-btn-icon-right">
<span>
</span>
</span>
</span>
</a>
                    </div><br><br><br>

            
                    <div class="button-wrapper">
                    <a href="biography2.php" class="a-btn">
                        <span style="color:#205A5A;font-weight:bold;line-height:1.3">Biography</span>
                        <span class="a-btn-icon-right"><?php echo'&nbsp;(' .$count3.')';?></span>
                        <span class="a-btn-slide-text"><span class="a-btn-icon-right">
<span>
</span>
</span>
</span>
</a>
                    </div><br><br><br>
                    

           <div class="button-wrapper">
                    <a href="historical2.php" class="a-btn" >
                        <span style="color:#205A5A;font-weight:bold;line-height:1.3">Historical</span>
                        <span class="a-btn-icon-right"><?php echo'&nbsp;(' .$count4.')';?></span>
                        <span class="a-btn-slide-text"><span class="a-btn-icon-right">
<span>
</span>
</span>
</span>
</a>
                    </div><br><br><br>

            <div class="button-wrapper">
                    <a href="scientific2.php" class="a-btn" >
                        <span style="color:#205A5A;font-weight:bold;line-height:1.3">Scientific</span>
                        <span class="a-btn-icon-right"><?php echo'&nbsp;(' .$count5.')';?></span>
                        <span class="a-btn-slide-text"><span class="a-btn-icon-right">
<span>
</span>
</span>
</span>
</a>
                    </div><br><br><br>

            <div class="button-wrapper">
                    <a href="other2.php" class="a-btn" >
                        <span style="color:#205A5A;font-weight:bold;line-height:1.3">Other</span>
                        <span class="a-btn-icon-right"><?php echo'&nbsp;(' .$count6.')';?></span>
                        <span class="a-btn-slide-text"><span class="a-btn-icon-right">
<span>
</span>
</span>
</span>
</a>
                    </div><br><br><br>

            
            </h4></font>
                
                <HR COLOR=red SIZE=1>
                
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
 </div>
                    <br>
            
            
         <center>Copyright&nbsp;&copy;&nbsp;2017 OnlineBookShop<br>
             <img src="obs.gif" height="100 px" width="170 px"></center>

            </div>
        </div>
    </div>
            </body>
</html>
