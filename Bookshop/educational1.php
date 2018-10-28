<html>
<head>
    <title>Search Educational Books</title>
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
    <a href="educational3.php">Educational</a>
    <a href="novel3.php">Novel</a>
    <a href="bussiness3.php">Bussiness</a>
                <a href="biography3.php">Biography</a>
                <a href="historical3.php">Historical</a>
                <a href="scientific3.php">Scientific</a>
                    <a href="other3.php">Other</a>
                
                </div></div>
        </font></div>

        <form method="post" action="search1.php">
          <table width= 401 height="267" border="0" align="center" hight=800>
            <tr>
            <tr>
              <td><h3><font color=blue>Search Book As You Want</font></h3></td>
            </tr>
            <tr>
              <td><strong> *Enter Book Name:</strong></td>
              <td><input type="search" name="bname"></td>
            </tr>
            <tr>
              <td><strong>*Stream:</strong></td>
              <td><select name="stream" required>
                  <option value="empty" selected>------Select Stream------</option>
                  <option value="Art">Art</option>
                  <option value="Science">Science</option>
                  <option value="Commerce">Commerce</option>
              </select></td>
            </tr>
            <tr>
              <td><strong>*Class:</strong></td>
              <td><select name="class" required>
                  <option value="empty" selected>------Select Class------</option>
                  <option value="B.A">B.A</option>
                  <option value="M.A">M.A</option>
                  <option value="B.C.S">B.C.S</option>
                  <option value="B.Sci">B.Sci</option>
                  <option value="M.Sci">M.Sci</option>
                  <option value="B.Com">B.Com</option>
                  <option value="M.Com">M.Com</option>
              </select></td>
            </tr>
            <tr>
              <td><strong>*Year:</strong></td>
              <td><select name="year" required>
                  <option value="empty" selected>------Select Year------</option>
                  <option value="F.Y">F.Y</option>
                  <option value="S.Y">S.Y</option>
                  <option value="T.Y">T.Y</option>
              </select></td>
            </tr>
            <tr>
                <td><input type="button" value="Back" onclick="history.go(-1);"></td><td><input type="submit" name="submit" value="Search"></td>
            </tr>
          </table>
            
        </form>
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
    </body>
</html>