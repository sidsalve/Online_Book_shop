<html>
    <body bgcolor=black>
        <?php
        session_start();
         if(isset($_SESSION['logged_in1']) && $_SESSION['logged_in1']==true)
    { 
        
    ?>
       
            
<form action="aconfirm.php" method="GET">
    <br><br><br><br><br><br><br>
  <table width="400" height="100" border="0" align="center">
    <tr>
        <td colspan="2" bgcolor=yellow><div align="center"><font color=red size=5><span class="style2">Delete Book</span></font></div></td>
    </tr>
    <tr height=100 align=center>
      <td width=""><font color=white>Enter Book ID:</td>
      <td width=""><input name="bid" type="text" id="bid" required></td>
    </tr>

    <tr align=>
        <td><input type="button" value="Back" onclick="history.go(-1);"></td>
      <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>
  
     <?php
    }
        else
        {
            echo"<center><font color=blue size=7>You Have To Login First......</font></center>";
        }
        ?>
        
        
        
       
    </body>
</html>