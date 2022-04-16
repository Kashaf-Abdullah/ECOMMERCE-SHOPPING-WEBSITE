
<?php
$insert=false;
if(isset($_POST['btnmc'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con){
    die("connect is failed due to ".mysqli_connect_error());

}
//echo "success connecting to db";

$mc1=$_POST['mc1'];
$mcp1=$_POST['mcp1'];
$mc2=$_POST['mc2'];
$mcp2=$_POST['mcp2'];

$mc3=$_POST['mc3'];
$mcp3=$_POST['mcp3'];
$mc4=$_POST['mc4'];
$mcp4=$_POST['mcp4'];
$mc5=$_POST['mc5'];
$mcp5=$_POST['mcp5'];
$mc6=$_POST['mc6'];
$mcp6=$_POST['mcp6'];
$mc7=$_POST['mc7'];
$mcp7=$_POST['mcp7'];
$mc8=$_POST['mc8'];
$mcp8=$_POST['mcp8'];
$mc9=$_POST['mc9'];
$mcp9=$_POST['mcp9'];
$mc10=$_POST['mc10'];
$mcp10=$_POST['mcp10'];
$mc11=$_POST['mc11'];
$mcp11=$_POST['mcp11'];
$mc12=$_POST['mc12'];
$mcp12=$_POST['mcp12'];
$total=$_POST['total'];
$cust_email=$_POST['cust_email'];
$sql="INSERT INTO `man_collection1` .`man_collection1`(`mc1`, `mcp1`, `mc2`, `mcp2`, `mc3`, `mcp3`, `mc4`, `mcp4`, `mc5`, `mcp5`, `mc6`, `mcp6`, `mc7`, `mcp7`, `mc8`, `mcp8`, `mc9`, `mcp9`, `mc10`, `mcp10`, `mc11`, `mcp11`, `mc12`, `mcp12`, `total`,`cust_email`) VALUES ( '$mc1', '$mcp1', '$mc2', '$mcp2','$mc3', '$mcp3','$mc4', '$mcp4','$mc5', '$mcp5', '$mc6', '$mcp6','$mc7', '$mcp7','$mc8', '$mcp8','$mc9', '$mcp9', '$mc10', '$mcp10', '$mc11', '$mcp11','$mc12', '$mcp12','$total','$cust_email');";

// echo $sql;
// echo"hellop";



if($con->query($sql) == true){
    //   echo"successfully inserted";
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
    <link rel="stylesheet"href="Stylemancollection.css">
</head>

<body>
<div class="header">
  <a href="#default" class="logo">FASHIONISTA</a>
  <div class="header-right">
    <a class="active" href="index.html">HOME</a>
    <a href="login2.php">LOGIN</a>
    <a href="login.php">CART </a>
  </div>
</div>

<div style="padding-left:20px">

</div>

   <header>

      <img src="mpic3.webp" height="550px" >


</header>
    <main>

        <form action="phpmancollection.php"method="post">   
            <div class="maincontainer">
                <div class="item">
        <div class="i1">
            <img id="itemimage"src="m1.jpg"width="250px"height="250px">
        </div>
        <input type="text" name="mcp1" id="mcp1"value="550">
        
        <div class="itemdetail">
            <input type="button"value="addtocart"onclick="myFunction();this.onclick=null">
        
        <!-- <button id="btn1"onclick="myFunction()">Add toCart</button> -->
        
            <div class="cartitem">
                <input type=button onclick="decrement(this)"value="-">
                <input type="text"id="mc1"value=0 name="mc1">
                <input type="button" onclick="increment(this)"value="+">

            </div>
        </div>
                    
                </div>
                
               <div class="item">
               <div class="i2">
            <img id="itemimage2"src="m2.jpg"width="250px"height="250px">
        </div>
        <input type="text" name="mcp2" id="mcp2"value="250">
        
        <div class="itemdetail"> 
            <input type="button"value="addtocart"onclick="myFunction2();this.onclick=null">
        <!-- <button id="btn2"onclick="myFunction2()">Add toCart</button> -->
       
        <div class="cartitem">
            <input type=button onclick="decrement2(this)"value="-">
            <input type="text"id="mc2"value=0 name="mc2">
            <input type="button" onclick="increment2(this)"value="+">

        </div>
        </div>
               </div>
            
              <div class="item">
              <div class="i3">
            <img id="itemimage3"src="m3.jpg"width="250px"height="250px">
        </div>
        <input type="text" name="mcp3" id="mcp3"value="1050">
        
        <div class="itemdetail">
        
         <input type="button"value="addtocart"onclick="myFunction3();this.onclick=null">
       
         <div class="cartitem">
            <input type=button onclick="decrement3(this)"value="-">
            <input type="text"id="mc3"value=0 name="mc3">
            <input type="button" onclick="increment3(this)"value="+">

        </div>     
        
                  
              </div>
              </div>
            
            
        
              <div class="item">
        <div class="i4">
            <img id="itemimage4"src="m4.jpg"width="250px"height="250px">
        </div>
        <input type="text" name="mcp4" id="mcp4"value="550">
        
        <div class="itemdetail">
        
            <input type="button"value="addtocart"onclick="myFunction4();this.onclick=null">
        
            <div class="cartitem">
                <input type=button onclick="decrement4(this)"value="-">
                <input type="text"id="mc4"value=0 name="mc4">
                <input type="button" onclick="increment4(this)"value="+">

            </div>
        </div>
              </div>
                
            </div>
            
            <div class="maincontainer2">
                <div class="item2">
        <div class="i5">
            <img id="itemimage5"src="m5.jpg"width="250px"height="250px">
        </div>
        <input type="text" name="mcp5" id="mcp5"value="550">
        
        <div class="itemdetail">
            <input type="button"value="addtocart"onclick="myFunction5();this.onclick=null">
        
        <!-- <button id="btn1"onclick="myFunction()">Add toCart</button> -->
        
            <div class="cartitem">
                <input type=button onclick="decrement5(this)"value="-">
                <input type="text"id="mc5"value=0 name="mc5">
                <input type="button" onclick="increment5(this)"value="+">

            </div>
        </div>
                    
                </div>
                
               <div class="item2">
               <div class="i6">
            <img id="itemimage6"src="m6.jpg"width="250px"height="250px">
        </div>
        <input type="text" name="mcp6" id="mcp6"value="250">
        
        <div class="itemdetail">
            <input type="button"value="addtocart"onclick="myFunction6();this.onclick=null">
        <!-- <button id="btn2"onclick="myFunction2()">Add toCart</button> -->
       
        <div class="cartitem">
            <input type=button onclick="decrement6(this)"value="-">
            <input type="text"id="mc6"value=0 name="mc6">
            <input type="button" onclick="increment6(this)"value="+">

        </div>
        </div>
               </div>
            
              <div class="item2">
              <div class="i7">
            <img id="itemimage7"src="m7.jpg"width="250px"height="250px">
        </div>
        <input type="text" name="mcp7" id="mcp7"value="1050">
        
        <div class="itemdetail">
        
         <input type="button"value="addtocart"onclick="myFunction7();this.onclick=null">
       
         <div class="cartitem">
            <input type=button onclick="decrement7(this)"value="+">
            <input type="text"id="mc7"value=0 name="mc7">
            <input type="button" onclick="increment7(this)"value="+">

        </div>     
        
                  
              </div>
              </div>
            
            
        
              <div class="item2">
        <div class="i8">
            <img id="itemimage8"src="m8.jpg"width="250px"height="250px">
        </div>
        <input type="text" name="mcp8" id="mcp8"value="550">
        
        <div class="itemdetail">
        
            <input type="button"value="addtocart"onclick="myFunction8();this.onclick=null">
        
            <div class="cartitem">
               <input type=button onclick="decrement8(this)"value="-">
                <input type="text"id="mc8"value=0 name="mc8">
                <input type="button" onclick="increment8(this)"value="+">

            </div> 
        </div>
              </div>
                
            </div>

<div class="maincontainer3">
    <div class="item3">
<div class="i9">
<img id="itemimage9"src="m9.jpg"width="250px"height="250px">
</div>
<input type="text" name="mcp9" id="mcp9"value="550">

<div class="itemdetail">
<input type="button"value="addtocart"onclick="myFunction9();this.onclick=null">

<!-- <button id="btn1"onclick="myFunction()">Add toCart</button> -->

<div class="cartitem">
    <input type=button onclick="decrement9(this)"value="-">
    <input type="text"id="mc9"value=0 name="mc9">
    <input type="button" onclick="increment9(this)"value="+">

</div>
</div>
        
    </div>
    
   <div class="item3">
   <div class="i10">
<img id="itemimage10"src="m10.jpg"width="250px"height="250px">
</div>
<input type="text" name="mcp10" id="mcp10"value="250">

<div class="itemdetail">
<input type="button"value="addtocart"onclick="myFunction10();this.onclick=null">
<!-- <button id="btn2"onclick="myFunction2()">Add toCart</button> -->

<div class="cartitem">
<input type=button onclick="decrement10(this)"value="-">
<input type="text"id="mc10"value=0 name="mc10">
<input type="button" onclick="increment10(this)"value="+">

</div>
</div>
   </div>

  <div class="item3">
  <div class="i11">
<img id="itemimage11"src="m11.jpg"width="250px"height="250px">
</div>
<input type="text" name="mcp11" id="mcp11"value="1050">

<div class="itemdetail">

<input type="button"value="addtocart"onclick="myFunction11();this.onclick=null">

<div class="cartitem">
<input type=button onclick="decrement11(this)"value="-">
<input type="text"id="mc11"value=0 name="mc11">
<input type="button" onclick="increment11(this)"value="+">

</div>     

      
  </div>
  </div>



  <div class="item3">
<div class="i12">
<img id="itemimage8"src="m12.jpg"width="250px"height="250px">
</div>
<input type="text" name="mcp12" id="mcp12"value="550">

<div class="itemdetail">

<input type="button"value="addtocart"onclick="myFunction12();this.onclick=null">

<div class="cartitem">
    <input type=button onclick="decrement12(this)"value="-">
    <input type="text"id="mc12"value=0 name="mc12">
    <input type="button" onclick="increment12(this)"value="+">

</div>
</div>
  </div>
    
</div>

            <div class="cart">
                <div id="shirtshow1"><div id="i1"></div></div>
                <input type="button"id="cb1"onclick="clear1()"style="display:none"value="clear1">
                <div id="shirtshow2"><div id="i2"></div></div>
                <input type="button"id="cb2"onclick="clear2()"style="display:none"value="clear2">
                <div id="shirtshow3"><div id="i3"></div></div>
                <input type="button"id="cb3"onclick="clear3()"style="display:none"value="clear3">
                <div id="shirtshow4"><div id="i4"></div></div>
                <input type="button"id="cb4"onclick="clear4()"style="display:none"value="clear4">
                <div id="shirtshow5"><div id="i5"></div></div>
                <input type="button"id="cb5"onclick="clear5()"style="display:none"value="clear5">
                <div id="shirtshow6"><div id="i6"></div></div>
                <input type="button"id="cb6"onclick="clear6()"style="display:none"value="clear6">
                <div id="shirtshow7"><div id="i7"></div></div>
                <input type="button"id="cb7"onclick="clear7()"style="display:none"value="clear7">
                <div id="shirtshow8"><div id="i8"></div></div>
                <input type="button"id="cb8"onclick="clear8()"style="display:none"value="clear8">
                <div id="shirtshow9"><div id="i9"></div></div>
                <input type="button"id="cb9"onclick="clear9()"style="display:none"value="clear9">
                <div id="shirtshow10"><div id="i10"></div></div>
                <input type="button"id="cb10"onclick="clear10()"style="display:none"value="clear10">
                <div id="shirtshow11"><div id="i11"></div></div>
                <input type="button"id="cb11"onclick="clear11()"style="display:none"value="clear11">

                <div id="shirtshow12"><div id="i12"></div></div>
                <input type="button"id="cb12"onclick="clear12()"style="display:none"value="clear12">
                <div id="finalamt"><input type="text" id="total"name="total"></input>
                <input type="text"id ="cust_email"name="cust_email"placeholder="enter email"></input>
            </div>

                </div>
           
                <button name="btnmc"id="btnmc"onclick="totalamt()">CONFIRM</button>
                <button ><a href ="order.php">CONFIRM</a></button>          
              </form>
              <footer>
        <div class="cwh">
            <img src="brown logo.jpeg"width="40px"height="30px">FASHIONISTA</div>    
       <div class="flex-all-center">
    
        <p> Copyright &copy; MyCart.com</p>
    
        </footer>
    </main>

    <script src="Mancollection.js">
  


    </script>
</body>
</html>
