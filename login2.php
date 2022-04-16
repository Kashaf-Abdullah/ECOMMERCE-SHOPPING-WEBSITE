<!DOCTYPE html>
<html>
<head>
	<title>CART ITEM</title>
    <style>
    
.header {
  overflow: hidden;
  background-color:bisque;
  padding: 20px 10px;
  
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color:rgb(51, 32, 22);
  color: white;
}

.header a.active {
  background-color: rgb(51, 32, 22);
  color: white;
}

.header-right {
  float: right;
}

   .nameofbrand{
color:brown;
position: relative;
left:39%;
   }
   .myitems{
       display: grid;
       grid-template-columns: 60% 40%;
  
    }

   img{
       width:100%;
   }

  
.i h1{
    text-align: center;
    justify-content: center;
    font-size: 93px;
    color:rgb(51, 32, 22);
    padding-top: 120px;
}
.cartinput{
    background-color: bisque;
}
.cartinput .inputtext{
    width:11%;
    height:39px;
}
.cartinput .submitbtn{
    width:50px;
    height:50px;
}
table{
    width:10px;
}
table tr{
    color:white;
    background-color: rgb(125, 87, 68);
}

table th{
    color:white;
    background-color: rgb(117, 71, 46);
}

label{
    font-size: 56px;
    color:rgb(51, 32, 22);
}
   @media only screen and (max-width:600px){
    
    .header a {
        float: none;
        display: block;
        text-align: left;
      }

      
      .header-right {
        float: none;
      }
       .nameofbrand{
           position: relative;
           left:0%;
       }
       footer{
    height:10vh;
}
   }
</style>
</head>

<body>
    
<div class="header">
    
    
    <a href="#default" class="logo">FASHIONISTA</a>
    <div class="header-right">
      <a class="active" href="index.html">HOME</a>
      <a href="login2.php">CART MAN</a>
      <a href="login.php">CART WOMEN</a>


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

$sth=$con->prepare("select * from `man_collection1`.`man_collection1` AS m JOIN `cust_order2`.`cust_order2` AS o  on m.cust_email=o.cust_email  
where m.cust_email='$str'");
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
     
    
    <th>name</th>
    
    <th>Lname</th>
    
    <th>city</th>
      
    
</tr>
<tr>
    <th><?php echo $row->mc1; ?></th>
    
    <th><?php echo $row->mc2; ?></th>

    <th><?php echo $row->mc3; ?></th>

    <th><?php echo $row->mc4; ?></th>
    
    <th><?php echo $row->mc6; ?></th>
    <th><?php echo $row->mc7; ?></th>
    <th><?php echo $row->mc8; ?></th>
    
    <th><?php echo $row->mc9; ?></th>
    <th><?php echo $row->mc10; ?></th>

    <th><?php echo $row->mc11; ?></th>

    <th><?php echo $row->mc12; ?></th>

    
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
