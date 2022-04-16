<!DOCTYPE html>
<html>
<head>
	<title>CART ITEM</title>
 
    
<link rel="stylesheet"href="Stylecart.css">

</head>

<body>
    
<div class="header">
    
    
    <a href="#default" class="logo">FASHIONISTA</a>
    <div class="header-right">
      <a class="active" href="index.html">HOME</a>
      <a href="login2.php">LOGIN</a>
      <a href="login.php">CART</a>


    </div>
  </div>
  <div class ="myitems">
 <div class="i"> <img src="womencolbc3.jfif" height="700px"></div>
 <div class="i"><h1>FASHIONISTA</h1>
 <h1>ORDER HISTORY</h1>

</div>
</div>
<form method="post">
<label>ACCOUNT DETAILS</label>
<div class="cartinput">

<input  type="text"class="inputtext" name="search">
<input type="submit"class="submitbtn" name="submit">
</div>
</form>


</body>
</html>

<?php


$con = new PDO("mysql:host=localhost;dbname=womencollection3",'root','');
if (isset($_POST["submit"])) {
$str=$_POST["search"];

// $sth = $con->prepare("SELECT * FROM `womencollection3` WHERE cust_email = '$str'");

$sth=$con->prepare("select * from `womencollection3`.`womencollection3` AS w JOIN `cust_order2`.`cust_order2` AS o  on w.cust_email=o.cust_email  
where w.cust_email='$str'");
// select * from `womencollection3` AS w JOIN `cust_order` AS o on w.cust_email=o.cust_email
// where cust_email='$str'
$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		

?>
<br> <br>
<table border="3">
<tr>
    <th>SHIRT 1</th>
    
    <th>SHIRT 2</th>
    
    <th>SHIRT 3</th>
    
    <th>SHIRT 4</th>
    
    <th>SHIRT 5</th>
    
    <th>SHIRT 6</th>
    
    <th>SHIRT 7</th>
    
    <th>SHIRT 8</th>
        <th>SHIRT 9</th>
    
    <th>SHIRT 10</th>
    
    <th>SHIRT 11</th>
        <th>SHIRT 12</th>
    
    <th>SHIRT 13</th>
    
    <th>SHIRT 14</th>
    
    <th>SHIRT 15</th>
    
    <th>SHIRT 16</th>
    
    
    <th>name</th>
    
    <th>Lname</th>
    
    <th>city</th>
      
    
</tr>
<tr>
    <th><?php echo $row->shirt1; ?></th>
    
    <th><?php echo $row->shirt2; ?></th>

    <th><?php echo $row->shirt3; ?></th>

    <th><?php echo $row->shirt4; ?></th>
    
    <th><?php echo $row->shirt6; ?></th>
    <th><?php echo $row->shirt7; ?></th>
    <th><?php echo $row->shirt8; ?></th>
    
    <th><?php echo $row->shirt9; ?></th>
    <th><?php echo $row->shirt10; ?></th>

    <th><?php echo $row->shirt11; ?></th>

    <th><?php echo $row->shirt12; ?></th>

    <th><?php echo $row->shirt13; ?></th>

    <th><?php echo $row->shirt14; ?></th>

    <th><?php echo $row->shirt15; ?></th>
    <th><?php echo $row->shirt16; ?></th>
    <th><?php echo $row->cust_name; ?></th>
    <th><?php echo $row->cust_lname; ?></th>
    <th><?php echo $row->cust_city; ?></th>
    
    
</tr>
</table>

<?php

}
else{
    echo "You haven't placed any orders yet.";
}}
