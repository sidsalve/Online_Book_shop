<html>
    <head>
        <title>Create a New Account</title>
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
    <a href="educational3.html">Educational</a>
    <a href="novel3.html">Novel</a>
    <a href="bussiness3.html">Bussiness</a>
                <a href="biography3.php">Biography</a>
                <a href="historical3.php">Historical</a>
                <a href="scientific3.php">Scientific</a>
                    <a href="other3.php">Other</a>
                
                </div></div>
        </font></div>
    
        <center><h1 align="center">Sign-Up Form</h1>
        </center>
            <hr>
        <form action="sign.php" method="post">
            <table width="500" height="700" border="0" align="center" >
    <tr>
      <td width="300"><strong>*First Name: </strong></td>
      <td width="300"><input name="fname" type="text" id="fname" required></td>
    </tr>
    <tr>
      <td height="59"><strong>*Last Name : </strong></td>
      <td><input name="lname" type="text" id="lname" required></td>
    </tr>
                    <tr>
      <td height="59"><strong>*Date Of Birth: </strong></td>
      <td><input name="dob" type="date"></td>
    </tr>
                    <tr>
      <td height="59"><strong>*Gender: </strong></td>
      <td><input name="g" type="radio" value="Male" checked>Male
                   <input name="g" type="radio" value="Female">Female</td>
    </tr>
    <tr>
      <td height="54"><strong>*Email Id: </strong></td>
      <td><input name="email" type="text" id="email" required></td>
    </tr>
    <tr>
      <td height="49"><strong>*Contact No: </strong></td>
      <td><input name="no" type="text" id="no" required></td>
    </tr>
    <tr>
      <td><strong>*Residential Address: </strong></td>
      <td><textarea name="residential" id="residential" rows="3" cols="30" required></textarea></td>
    </tr>
    <tr>
      <td><strong>*Permanant Address: </strong></td>
      <td><textarea name="permanant" id="permanant" rows="3" cols="30" required></textarea></td>
    </tr>
	    <tr>
      <td><strong>*Pin code: </strong></td>
      <td><input type="text" name="pin" id="pin" required></td>
    </tr>
    <tr>
      <td height="54"><strong>*Password:</strong></td>
      <td><input name="pass" type="password" id="pass" required></td>
    </tr>
    <tr>
      <td height="57"><strong>*Re-type Password: </strong></td>
      <td><input name="cpass" type="password" id="cpass" required></td>
    </tr>
    <tr>
        <td><input type="button" value="Back" onclick="history.go(-1);"></td>
      <td height="62"><input type="submit" value="Submit"></td>
      <td><input type="reset" value="Reset"></td>
    </tr>
          </table>
        </form>
            
            
                             <?php

    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
    {

?>

                
                <div class="footer">
                    <u><font size=4 color="white">**User Profile**</font></u><br><br>
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
    </body>
</html>
            