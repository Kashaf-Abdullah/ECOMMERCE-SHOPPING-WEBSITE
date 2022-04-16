<?php
$insert=false;
if(isset($_POST['card'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con){
    die("connect is failed due to ".mysqli_connect_error());

}
echo "success connecting to db";

$girlshirt=$_POST['girlshirt'];
$boyshirt=$_POST['boyshirt'];
$watch=$_POST['watch'];
$sql="INSERT INTO `cart2`.`cart2`(`girlshirt`,`boyshirt`,`watch`) VALUES ('$girlshirt','$boyshirt','$watch'); ";

echo $sql;
if($con->query($sql) == true){
    
      echo"successfully inserted";
      $insert=true;
  }
  else{
    echo "alert('not inserted')";
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
    <link rel="stylesheet"href="styleshopnow.css">
</head>
<body>
   <header>
       <ul>
           <li>HOME</li>
           <li>FEATURE</li>
           <li>CONTACT US</li>
           <li>ABOUT US</li>
       </ul>

   </header>
<main>
    <div class="bg">
    <img class="backgroundpic"src="backgroundpic2.jpg">
</div>
<form action="phpshopnow.php" method="post">
<div class="mainitems">
    <div class="item"><img src="gpro1.jpg"><h3>Espirit Ruffle Shirt</h3>
    <p>$16.61</p>
    <div class="addtocart">
    <input type="radio"name="girlshirt"id="c1"value="girlshirt">Add to Cart</input>
    </div>
    <!-- <div class="cartcontainer">
        <button  class="btnincre"onclick="increment()">+</button><h2 class="count"id="counting"></h2><button class="btndecre" onclick="decrement()">-</button>
    </div> -->
  
</div>
<!-- 2item -->
    <div class="item"><img src="bpro1.jpg">
    
        <h3>Espirit Ruffle Shirt</h3>
        <p>$16.61</p>
        <div class="addtocart">
        <input type="radio"name="boyshirt"id="c2"value="boyshirt">Add to Cart</input>
        </div>
       
    </div>
    <!-- 3rd item -->
   
    <div class="item"><img src="apro1.jpg"><h3>Espirit Ruffle Shirt</h3>
        <p >$16.61</p>
        <div class="addtocart">
        <input type="radio"name="watch"id="c3"value="watch">Add to Cart</input>
       
    </div>
        </div>
<!-- 2nd line -->
<div class="item"><img src="gpro1.jpg"><h3>Espirit Ruffle Shirt</h3>
    <p>$16.61</p>
    <div class="addtocart">
    <input type="radio"name="girlshirt"id="c1"value="girlshirt">Add to Cart</input>
    </div>
    <!-- <div class="cartcontainer">
        <button  class="btnincre"onclick="increment()">+</button><h2 class="count"id="counting"></h2><button class="btndecre" onclick="decrement()">-</button>
    </div> -->
  
</div>
<!-- 2item -->
    <div class="item"><img src="bpro1.jpg">
    
        <h3>Espirit Ruffle Shirt</h3>
        <p>$16.61</p>
        <div class="addtocart">
        <input type="radio"name="boyshirt"id="c2"value="boyshirt">Add to Cart</input>
        </div>
       
    </div>
    <!-- 3rd item -->
   
    <div class="item"><img src="apro1.jpg"><h3>Espirit Ruffle Shirt</h3>
        <p >$16.61</p>
        <div class="addtocart">
        <input type="radio"name="watch"id="c3"value="watch">Add to Cart</input>
       
    </div>
        </div>
</div>
<button name="card">MY CARD</button>
</form>
</main>
<script src="shopnow.js">
  

</script>
</body>
</html>