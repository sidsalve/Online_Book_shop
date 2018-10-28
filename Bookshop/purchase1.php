<html>
    <head>
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

    
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

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
    <a href="bussiness1.php">Bussiness</a>
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
    <a href="bussiness2.php">Bussiness</a>
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
    <a href="bussiness3.php">Bussiness</a>
                <a href="biography3.php">Biography</a>
                <a href="historical3.php">Historical</a>
                <a href="scientific3.php">Scientific</a>
                    <a href="other3.php">Other</a>
                
                </div></div>
        </font></div>
    
    </head>
    <body>
        
<?php 

    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
    {
        $uid=$_SESSION['uid'];
    mysql_connect("localhost","root","") or die("Can't open");
	mysql_select_db("bookshop") or die("can't select");
    $bid=$_GET['bid'];
        
        $user=mysql_query("select * from signup where uid='$uid'");
    while( $row=mysql_fetch_array($user))
    {
        $permanant=$row['permanant'];
        $contact=$row['contact'];
        $_SESSION['fullname']=$row['fname'].'&nbsp;'.$row['lname'];
        
        
    }

	$result=mysql_query("select * from book where bid='$bid'");
    while( $row=mysql_fetch_array($result))
    
    { $_SESSION['bid']=$row['bid'];
      $_SESSION['bname']=$row['bname'];   
        ?>
        <center><font size=5 color=blue>Purchasing Book Details</font></center><br/><br/><br/>
<table width="612" border="0">
<tr>
    <td width="90" rowspan="5"> 
        
        
	
    <img height="80" width="70" src="data:image;base64,<?php echo $row[14]; ?>">
    </td>
    
   </tr>
  <tr>
    <td><?php echo"<b>Book Name:<font color=red>";
    echo $row['bname']."</font></b>&nbsp;&nbsp;:::&nbsp;&nbsp;"; echo"<b>Author Name:<font color=red>";
    echo $row['author']."</font></b>";?></td>
  </tr>
  <tr>
    <td><?php echo"<b>Publication:<font color=red>";
    echo $row['publication']."</font></b>&nbsp;&nbsp;:::&nbsp;&nbsp;"; echo"<b>Edition:<font color=red>";
    echo $row['edition']."</font></b>";?></td>
  </tr>
  <tr>
    <td><?php echo"<b>Category:<font color=red>";
    echo $row['category']."</font></b>&nbsp;&nbsp;:::&nbsp;&nbsp;"; echo"<b>Pages:<font color=red>";
    echo $row['pages']."</font></b>";?></td>
  </tr>
  <tr>
    <td><?php echo"<b>Price:<font color=red><u>";
    echo $row['price']."</font></u></b>&nbsp;&nbsp;:::&nbsp;&nbsp;"; echo"<b>Available in:<font color=red>";
    echo $row['lang']."</font><b>&nbsp;&nbsp;";?></td>
  </tr>
     <?php $_SESSION['price']=$row['price']; ?>
</table>
        <form action="purchase3.php?bid=<?php echo $bid; ?>" method="post">
        <fieldset><legend><b>Fill Your Purchasing Details</b></legend>
            <br/><br/><fieldset><legend><font color=purple>If You Want To Pay Cash-On-Delivery</font></legend>
             Your Name:<input type="text" name="fullname" value="<?php echo  $_SESSION['fullname'];?>"><br><br>
             Your Address:<input type="text" name="address" value="<?php echo $permanant;?>"><br><br>
             Your Contact NO.:<input type="text" name="contact" value="<?php echo $contact;?>"><br><br>
            <font color=red>Please Note:Your Books is Deliver To Your Address,So Before Purchasing Check Your Address As Well As Contact Number</font><br> <br>
            <input type="submit" value="Purchase" name="cash"></fieldset></form>
        <form action="purchase2.php?bid=<?php echo $bid; ?>" method="post">
            <br/><br/><fieldset><legend><font color=purple>If You Want To Pay Online Banking</font></legend><br>
            Bank Name:<input type="text" name="bank_name" required><br><br>
            Bank IFSC Code:<input type="text" name="ifsc" required><br><br>
            Select Card Type:<br>
            Debit Card<input name="c" type="radio" value="debit" checked><br>
            Smart Card<input name="c" type="radio" value="smart"><br><br>
            3 Digit CVV Code Of Card:<input type="password" name="puk" required maxlength="3" ><br><br>
            
            <input type="submit" value="Purchase" name="online"></fieldset>
        </fieldset>
        </form>
<input type="button" value="Back" onclick="history.go(-1);">

 

    <?php
    }
    }
    else
    {
        echo"<center><b><font size=6 color=red>!!!----Please Login First----!!!</font><b></center><br>";
          echo"<center><b><font size=6 color=red><a href=login1.php>Login Now....</a></font><b></center><br>";
    }
        ?>
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