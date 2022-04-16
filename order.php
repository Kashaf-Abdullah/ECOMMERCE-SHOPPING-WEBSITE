
<?php

if(isset($_POST['btnorder'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con){
    die("connect is failed due to ".mysqli_connect_error());

}
echo "success connecting to db";
$cust_email=$_POST['cust_email'];
$cust_name=$_POST['cust_name'];
$cust_lname=$_POST['cust_lname'];
$cust_address=$_POST['cust_address'];
$cust_city=$_POST['cust_city'];
$cust_pcode=$_POST['cust_pcode']; 
$cust_phonenum=$_POST['cust_phonenum'];

$sql="INSERT INTO `cust_order2`.`cust_order2` ( `cust_email`, `cust_name`, `cust_lname`, `cust_address`, `cust_city`, `cust_pcode`, `cust_phonenum`) VALUES ( '$cust_email', '$cust_name', '$cust_lname', '$cust_address', '$cust_city', '$cust_pcode', '$cust_phonenum');";
//echo $sql;



if($con->query($sql) == true){
  //    echo"successfully inserted";
    }
  else{
  
  echo"not added";
 //  echo "ERROR: $sql <br> $con->error";
  }
  $con->close();
  }
  ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet"href="Styleorder.css">
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
<form action="order.php"method="post"> 
  
    <div class="maincontainer">
                  <label><h1>CONTACT INFORMATION</h1></label>
            <input type ="email"id="cust_email"name="cust_email"placeholder="Email">
            <label><h3>Shipping address</h3></label>
            <input type="text" id="cust_name"name="cust_name"placeholder="Name">
            <input type="text" id="cust_lname"name="cust_lname"placeholder="LNAME">
            <input type="text" id="cust_address"name="cust_address"placeholder="ADDRESS">
            <input type="text" id="cust_city"name="cust_city"placeholder="CITY">
            <input type="text" id="cust_pcode"name="cust_pcode"placeholder="POSTAL CODE">
            <input type="text" id="cust_phonenum"name="cust_phonenum"placeholder="PHONE NUMBER">
       <button name="btnorder"id="btnorder"> submit</button>

    </div>
    </form>
</body>
</html>