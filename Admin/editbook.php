<body>
    <?php 
    
    $bid=$_GET['bid'];
        
        
        $n=0;
        
            mysql_connect("localhost","root","") or die("can not connect");
            mysql_select_db("bookshop") or die("can not connect");
            $qry="select * from book";
            $result=mysql_query($qry);
            while($row=mysql_fetch_array($result))
            {
            if($row['bid']==$bid)
            {
                
            $n=1;
    ?>
<center><b><h1><strong>ADD BOOK</strong></h1>
    </b></center>
    <hr>
<form action="addbook.php" method="post" enctype="multipart/form-data" >
  <table width="431" height="837" border="0" align="center">
    <tr>
      <td width="139"><strong>*Book Name:</strong></td>
      <td width="230"><input name="n1" type="text" value="<?php echo $row['bname'];?>"></td>
    </tr>
    <tr>
      <td><strong>*Author:</strong></td>
      <td><input name="n2" type="text" id="author" value="<?php echo $row['author'];?>"></td>
    </tr>
    <tr>
      <td><strong>*Publication:</strong></td>
      <td><input name="n3" type="text" id="publication" value="<?php echo $row['publication'];?>"></td>
    </tr>
    <tr>
      <td><strong>*Edition:</strong></td>
      <td><input name="n4" type="text" id="edition" value="<?php echo $row['edition'];?>"></td>
    </tr>
    <tr>
      <td><strong>*Category:</strong></td>
      <td><select name="n5" required>
        <option value="null" selected>------Select Category------</option>
        <option value="Educational">Educational</option>
        <option value="Novel">Novel</option>
        <option value="Bussiness">Bussiness</option>
        <option value="Biography">Biography</option>
        <option value="Historical">Historical</option>
        <option value="Scientific">Scientific</option>
        <option value="Other">Other</option>
      </select></td>
    </tr>
	
    <tr>
	
      <td><strong>*Stream:</strong></td>
      <td><select name="n6">
	  <option value="null" selected>------Select Stream------</option>
        <option value="Art">Art</option>
        <option value="Science">Science</option>
        <option value="Commerce">Commerce</option>
      </select></td>
    </tr>
    <tr>
      <td><strong>*Class;</strong></td>
      <td><select name="n7" id="class">
	  <option value="null" selected>------Select Class------</option>
        <option value="B.C.S">B.C.S</option>
        <option value="B.Sci">B.Sci</option>
        <option value="M.Sci">M.Sci</option>
        <option value="B.A">B.A</option>
        <option value="M.A">M.A</option>
        <option value="B.Com">B.Com</option>
        <option value="M.Com">M.Com</option>
      </select></td>
    </tr>
       
    <tr>
      <td><strong>*Year:</strong></td>
      <td><select name="n8" id="year">
	  <option value="null" selected>------Select Year------</option>
        <option value="F.Y">F.Y</option>
        <option value="S.Y">S.Y</option>
        <option value="T.Y">T.Y</option>
      </select></td>
    </tr>
    <tr>
      <td><strong>*Pages:</strong></td>
      <td><input name="n9" type="text" id="pages" value="<?php echo $row['pages'];?>"></td>
    </tr>
    <tr>
      <td><strong>*Price:</strong></td>
      <td><input name="n10" type="text" id="price" value="<?php echo $row['price'];?>"></td>
    </tr>
    <tr>
      <td><strong>*Nos.:</strong></td>
      <td><input name="n11" type="text" id="nos" value="<?php echo $row['nos'];?>" required></td>
    </tr>
    <tr>
      <td><strong>*Language:</strong></td>
      <td><select name="n12" id="lang">
	  <option value="null" selected>------Select Language------</option>
        <option value="English">English</option>
        <option value="Marathi">Marathi</option>
        <option value="Hindi">Hindi</option>
      </select></td>
    </tr>
    <tr>
      <td><strong>*ISBN No.:</strong></td>
      <td><input name="n13" type="text" id="isbnno" value="<?php echo $row['isbn'];?>"></td>
    </tr>
    <tr>
      <td><strong>*Image Of Book: </strong></td>
      <td><input name="image" type="file" id="image"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"> </td>
	  <td width="48"><input type="reset"> </td>
    </tr>
      
  </table>
</form>
    <?php
            }
            }
    if(!$n==1)
    {
        echo"<center><font size=5 color=red>Book ID is NOT Valid</font><center>";
    }
?>