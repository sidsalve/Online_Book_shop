<html>
    <body>
        <?php
        $pid=$_GET['pid'];
        ?>
        <center><font size=6 color=black>Do You Want to Delete This Book Permanantly From Shopping Cart.</font><br>
            <font size=6 color=blue><a href="clear.php?pid=<?php echo $pid; ?>">Confirm</a><br><a href="shoppingcart.php">Cancel</a></font><br><input type="button" value="Back" onclick="history.go(-1);"></center>
        
    </body>
</html>
        