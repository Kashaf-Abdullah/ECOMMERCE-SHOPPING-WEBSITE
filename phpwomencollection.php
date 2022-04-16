<?php
$insert=false;
if(isset($_POST['btnwc'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con){
    die("connect is failed due to ".mysqli_connect_error());

}
//echo "success connecting to db";
$shirt1=$_POST['shirt1'];


$wcp1=$_POST['wcp1'];
$shirt2=$_POST['shirt2'];


$wcp2=$_POST['wcp2'];
$shirt3=$_POST['shirt3'];


$wcp3=$_POST['wcp3'];
$shirt4=$_POST['shirt4'];


$wcp4=$_POST['wcp4'];
$shirt5=$_POST['shirt5'];


$wcp5=$_POST['wcp5'];
$shirt6=$_POST['shirt6'];


$wcp6=$_POST['wcp6'];

$shirt7=$_POST['shirt7'];


$wcp7=$_POST['wcp7'];
$shirt8=$_POST['shirt8'];


$wcp8=$_POST['wcp8'];
$shirt9=$_POST['shirt9'];


$wcp9=$_POST['wcp9'];


$shirt10=$_POST['shirt10'];


$wcp10=$_POST['wcp10'];
$shirt11=$_POST['shirt11'];


$wcp11=$_POST['wcp11'];
$shirt12=$_POST['shirt12'];


$wcp12=$_POST['wcp12'];


$shirt13=$_POST['shirt13'];


$wcp13=$_POST['wcp13'];
$shirt14=$_POST['shirt14'];


$wcp14=$_POST['wcp14'];
$shirt15=$_POST['shirt15'];


$wcp15=$_POST['wcp15'];
$shirt16=$_POST['shirt16'];


$wcp16=$_POST['wcp16'];

$total=$_POST['total'];
$cust_email=$_POST['cust_email'];
$sql="INSERT INTO `womencollection3`.`womencollection3` ( `shirt1`, `wcp1`, `shirt2`, `wcp2`,`shirt3`,`wcp3`,`shirt4`, `wcp4`, `shirt5`, `wcp5`,`shirt6`,`wcp6`,`shirt7`, `wcp7`, `shirt8`, `wcp8`,`shirt9`,`wcp9`,`shirt10`, `wcp10`, `shirt11`, `wcp11`,`shirt12`,`wcp12`, `shirt13`, `wcp13`,`shirt14`,`wcp14`, `shirt15`, `wcp15`,`shirt16`,`wcp16`,`total`,`cust_email`) VALUES ( '$shirt1', '$wcp1', '$shirt2', '$wcp2', '$shirt3', '$wcp3','$shirt4', '$wcp4', '$shirt5', '$wcp5', '$shirt6', '$wcp6','$shirt7', '$wcp7', '$shirt8', '$wcp8', '$shirt9', '$wcp9','$shirt10', '$wcp10', '$shirt11', '$wcp11', '$shirt12', '$wcp12', '$shirt13', '$wcp13', '$shirt14', '$wcp14', '$shirt15', '$wcp15', '$shirt16', '$wcp16','$total','$cust_email');";

//echo $sql;

if($con->query($sql) == true){
  //    echo"successfully inserted";
    }
  else{
    //echo "alert('not inserted')";
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
    <link rel="stylesheet"href="styleWomencollection.css">


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
<section>
    <div class="main_image">
        <img src="womencolbc1.jpg"id="main_img"height="500px">
    </div>
</section>
    <main>
<form action="phpwomencollection.php"method="post">   
    <div class="maincontainer">
        <div class="item">
<div class="i1">
    <img id="itemimage"src="w1.jpg"width="250px"height="250px">
</div>
<input type="text" name="wcp1" id="wcp1"value="550">

<div class="itemdetail">
    <input type="button"value="addtocart"onclick="myFunction();myfunctionimage();this.onclick=null">
    <div class="cartitem">
               <input type=button onclick="decrement(this)"value="-">
                <input type="text"id="shirt1"value=0 name="shirt1">
                <input type="button" onclick="increment(this)"value="+">

            </div> 

</div>
            
        </div>
        
       <div class="item">
       <div class="i2">
    <img id="itemimage2"src="w2.jpg"width="250px"height="250px">
</div>
<input type="text" name="wcp2" id="wcp2"value="250">

<div class="itemdetail">
    <input type="button"value="addtocart"onclick="myFunction2();myfunctionimage2();this.onclick=null">
    <div class="cartitem">
               <input type=button onclick="decrement2(this)"value="-">
                <input type="text"id="shirt2"value=0 name="shirt2">
                <input type="button" onclick="increment2(this)"value="+">

            </div> 
    
</div>
       </div>
    
      <div class="item">
      <div class="i3">
    <img id="itemimage3"src="w3.jpg"width="250px"height="250px">
</div>
<input type="text" name="wcp3" id="wcp3"value="1050">

<div class="itemdetail">

  <input type="button"value="addtocart"onclick="myFunction3();myfunctionimage3();this.onclick=null">
  <div class="cartitem">
               <input type=button onclick="decrement3(this)"value="-">
                <input type="text"id="shirt3"value=0 name="shirt3">
                <input type="button" onclick="increment3(this)"value="+">

            </div> 
 

          
      </div>
      </div>
    
    

      <div class="item">
<div class="i4">
    <img id="itemimage4"src="w4.jpg"width="250px"height="250px">
</div>
<input type="text" name="wcp4" id="wcp4"value="550">

<div class="itemdetail">

    <input type="button"value="addtocart"onclick="myFunction4();myfunctionimage4();this.onclick=null">
    <div class="cartitem">
               <input type=button onclick="decrement4(this)"value="-">
                <input type="text"id="shirt4"value=0 name="shirt4">
                <input type="button" onclick="increment4(this)"value="-">

            </div> 
    
</div>
      </div>
        </div>
      
        <div class="maincontainer2">        
       <div class="item">
       <div class="i5">
    <img id="itemimage5"src="w5.jpg"width="250px"height="250px">
</div>
<input type="text" name="wcp5" id="wcp5"value="250">

<div class="itemdetail">

    <input type="button"value="addtocart"onclick="myFunction5();myfunctionimage5();this.onclick=null">
    <div class="cartitem">
               <input type=button onclick="decrement5(this)"value="-">
                <input type="text"id="shirt5"value=0 name="shirt5">
                <input type="button" onclick="increment5(this)"value="-">

            </div> 
  
    
</div>
       </div>
       <div class="item">
<div class="i6">
    <img id="itemimage6"src="w6.jpg"width="250px"height="250px">
</div>
<input type="text" name="wcp6" id="wcp6"value="550">

<div class="itemdetail">

    <input type="button"value="addtocart"onclick="myFunction6();myfunctionimage6();this.onclick=null">
    <div class="cartitem">
               <input type=button onclick="decrement6(this)"value="-">
                <input type="text"id="shirt6"value=0 name="shirt6">
                <input type="button" onclick="increment6(this)"value="+">

            </div> 
   
</div>
            
        </div>
   
        
       <div class="item">
       <div class="i7">
    <img id="itemimage7"src="w7.jpg"width="250px"height="250px">
</div>
<input type="text" name="wcp7" id="wcp7"value="250">

<div class="itemdetail">

    <input type="button"value="addtocart"onclick="myFunction7();myfunctionimage7();this.onclick=null">
    <div class="cartitem">
               <input type=button onclick="decrement7(this)"value="-">
                <input type="text"id="shirt7"value=0 name="shirt7">
                <input type="button" onclick="increment7(this)"value="+">

            </div> 
       
</div>
       </div>
       <div class="item">
<div class="i8">
    <img id="itemimage8"src="w8.jpg"width="250px"height="250px">
</div>
<input type="text" name="wcp8" id="wcp8"value="550">

<div class="itemdetail">

    <input type="button"value="addtocart"onclick="myFunction8();myfunctionimage8();this.onclick=null">
    <div class="cartitem">
               <input type=button onclick="decrement8(this)"value="-">
                <input type="text"id="shirt8"value=0 name="shirt8">
                <input type="button" onclick="increment8(this)"value="+">

            </div> 
    
</div>
            
        </div>
</div>

<div class="maincontainer5">     
    <div class="item">
    <div class="i15">
 <img id="itemimage15"src="w15.jpg"width="450px"height="450px">
</div>
<input type="text" name="wcp15" id="wcp15"value="250">

<div class="itemdetail">

    <input type="button"value="addtocart"onclick="myFunction15();myfunctionimage15();this.onclick=null">
    <div class="cartitem">
               <input type=button onclick="decrement15(this)"value="-">
                <input type="text"id="shirt15"value=0 name="shirt15">
                <input type="button" onclick="increment15(this)"value="+">

            </div> 
 
</div>
    </div>

    <div class="item">
<div class="i16">
 <img id="itemimage16"src="w16.jpg"width="450px"height="450px">
</div>
<input type="text" name="wcp16" id="wcp16"value="550">

<div class="itemdetail">

    <input type="button"value="addtocart"onclick="myFunction16();myfunctionimage16();this.onclick=null">
    <div class="cartitem">
               <input type=button onclick="decrement16(this)"value="-">
                <input type="text"id="shirt16"value=0 name="shirt16">
                <input type="button" onclick="increment16(this)"value="+">

            </div> 
 
</div>
         
     </div>


             
 </div>

</div>


<div class="maincontainer3">     
       <div class="item">
       <div class="i9">
    <img id="itemimage9"src="w9.jpg"width="250px"height="250px">
</div>
<input type="text" name="wcp9" id="wcp9"value="250">

<div class="itemdetail">

    <input type="button"value="addtocart"onclick="myFunction9();myfunctionimage9();this.onclick=null">
    <div class="cartitem">
               <input type=button onclick="decrement9(this)"value="-">
                <input type="text"id="shirt9"value=0 name="shirt9">
                <input type="button" onclick="increment9(this)"value="+">

            </div> 
    
</div>
       </div>

       <div class="item">
<div class="i10">
    <img id="itemimage8"src="w16.jpg"width="250px"height="250px">
</div>
<input type="text" name="wcp10" id="wcp10"value="550">

<div class="itemdetail">

    <input type="button"value="addtocart"onclick="myFunction10();myfunctionimage10();this.onclick=null">
    <div class="cartitem">
               <input type=button onclick="decrement10(this)"value="-">
                <input type="text"id="shirt10"value=0 name="shirt10">
                <input type="button" onclick="increment10(this)"value="+">

            </div> 
    
</div>
            
        </div>
        <div class="item">
<div class="i11">
    <img id="itemimage11"src="w11.jpg"width="250px"height="250px">
</div>
<input type="text" name="wcp11" id="wcp11"value="550">

<div class="itemdetail">

    <input type="button"value="addtocart"onclick="myFunction11();myfunctionimage11();this.onclick=null">
    <div class="cartitem">
               <input type=button onclick="decrement11(this)"value="-">
                <input type="text"id="shirt11"value=0 name="shirt11">
                <input type="button" onclick="increment11(this)"value="+">

            </div> 
    
</div>
            
        </div>
        <div class="item">
<div class="i12">
    <img id="itemimage12"src="w12.jpg"width="250px"height="250px">
</div>
<input type="text" name="wcp12" id="wcp12"value="550">

<div class="itemdetail">

    <input type="button"value="addtocart"onclick="myFunction12();myfunctionimage12();this.onclick=null">
    <div class="cartitem">
               <input type=button onclick="decrement12(this)"value="-">
                <input type="text"id="shirt12"value=0 name="shirt12">
                <input type="button" onclick="increment12(this)"value="+">

            </div> 
  
</div>
            
        </div>
                
    </div>
    <div class="maincontainer4">     
        <div class="item">
        <div class="i13">
     <img id="itemimage13"src="w13.jpg"width="450px"height="450px">
 </div>
 <input type="text" name="wcp13" id="wcp13"value="250">
 
 <div class="itemdetail">
 
    <input type="button"value="addtocart"onclick="myFunction13();myfunctionimage13();this.onclick=null">
    <div class="cartitem">
               <input type=button onclick="decrement13(this)"value="-">
                <input type="text"id="shirt13"value=0 name="shirt13">
                <input type="button" onclick="increment13(this)"value="+">

            </div> 

     
 </div>
        </div>
 
        <div class="item">
 <div class="i14">
     <img id="itemimage14"src="w17.jpg"width="450px"height="450px">
 </div>
 <input type="text" name="wcp14" id="wcp14"value="550">
 
 <div class="itemdetail">
    <input type="button"value="addtocart"onclick="myFunction14();myfunctionimage14();this.onclick=null">
    <div class="cartitem">
               <input type=button onclick="decrement14(this)"value=" - ">
                <input type="text"id="shirt14"value=0 name="shirt14">
                <input type="button" onclick="increment14(this)"value=" + ">

            </div> 
     
 </div>
             
         </div>
   
  
                 
     </div>
   
</div>
    
<div class="cart">
    <div class="wmn_item1" style="display:inline-flex">
    <div id="shirtshow1" ><div id="i1">
      </div></div>
    
      <div id="imageshow"></div>
      <input type="button"id="cb1"onclick="clear1()" style="display:none;"value="clear1">
      <!-- <button name="del1btnwc"id="del1btnwc"onclick="del1()" style="visibility: hidden;">del</button> -->
</div>
<hr>
<div class="wmn_item2" style="display:inline-flex">
    <div id="shirtshow2"><div id="i2"></div></div>
    <div id="imageshow2"></div>
    <input type="button"id="cb2"onclick="clear2()"style="display:none"value="clear2">
</div>
<hr>
<div class="wmn_item3" style="display:inline-flex">
    <div id="shirtshow3"><div id="i3"></div></div>  
    
    <div id="imageshow3"></div>
    <input type="button"id="cb3"onclick="clear3()"style="display:none"value="clear3">
</div>
<hr>
<div class="wmn_item4" style="display:inline-flex">
    <div id="shirtshow4"><div id="i4">
        
        
    </div></div>
    <div id="imageshow4"></div>
    <input type="button"id="cb4"onclick="clear4()"style="display:none"value="clear4">
</div>
<hr>
<div class="wmn_item5" style="display:inline-flex">
    <div id="shirtshow5"><div id="i5"></div></div>
    <div id="imageshow5"></div>
    <input type="button"id="cb5"onclick="clear5()"style="display:none"value="clear5">
</div>
<hr>
<div class="wmn_item6" style="display:inline-flex">
    <div id="shirtshow6"><div id="i6"></div></div>
    <div id="imageshow6"></div>
    <input type="button"id="cb6"onclick="clear6()"style="display:none"value="clear6">
</div>
<hr>
<div class="wmn_item7" style="display:inline-flex">
    <div id="shirtshow7"><div id="i7"></div></div>
    <div id="imageshow7"></div>
    <input type="button"id="cb7"onclick="clear7()"style="display:none"value="clear7">
</div>
<hr>
<div class="wmn_item8" style="display:inline-flex">
    <div id="shirtshow8"><div id="i8"></div></div>
<div id="imageshow8"></div>
<input type="button"id="cb8"onclick="clear8()"style="display:none"value="clear8">
</div>
<hr>
<div class="wmn_item9" style="display:inline-flex">
<div id="shirtshow9"><div id="i9"></div></div>
<div id="imageshow9"></div>

<input type="button"id="cb9"onclick="clear9()"style="display:none"value="clear9">
</div>
<hr>
<div class="wmn_item10" style="display:inline-flex">
<div id="shirtshow10"><div id="i10"></div></div>
<div id="imageshow10"></div>
<input type="button"id="cb10"onclick="clear10()"style="display:none"value="clear10">
</div>
<hr>
<div class="wmn_item11"  style="display:inline-flex">
<div id="shirtshow11"><div id="i11"></div></div>
<div id="imageshow11"></div>
<input type="button"id="cb11"onclick="clear11()"style="display:none"value="clear11">
</div>
<hr>
<div class="wmn_item12" style="display:inline-flex">
<div id="shirtshow12"><div id="i12"></div></div>
<div id="imageshow12"></div>
<input type="button"id="cb12"onclick="clear12()"style="display:none"value="clear12">
</div>
<hr>
<div class="wmn_item13" style="display:inline-flex">
<div id="shirtshow13"><div id="i13"></div></div>
<div id="imageshow13"></div>
<input type="button"id="cb13"onclick="clear13()"style="display:none"value="clear13">
</div>
<hr>
<div class="wmn_item14" style="display:inline-flex">
<div id="shirtshow14"><div id="i14"></div></div>

<div id="imageshow14"></div>

<input type="button"id="cb14"onclick="clear14()"style="display:none"value="clear14">
</div>
<hr>
<div class="wmn_item15" style="display:inline-flex">
<div id="shirtshow15"><div id="i15"></div></div>
<div id="imageshow15"></div>
<input type="button"id="cb15"onclick="clear15()"style="display:none"value="clear15">
</div>
<hr>
<div class="wmn_item16" style="display:inline-flex">
<div id="shirtshow16"><div id="i16"></div></div>
<div id="imageshow16"></div>
<input type="button"id="cb16"onclick="clear16()"style="display:none"value="clear16">
</div>
<hr>
<div id="finalamt">
    <input type="text" id="total"name="total"></input></div>

</div>
<input type="text"id ="cust_email"name="cust_email"placeholder="enter"></input>

<button name="btnwc"id="btnwc"onclick="totalamt()">TOTAL BILL</button>
<button ><a href ="order.php">CONFIRM</a></button>
<!-- 
<button id="delbtnwc"onclick="clear1()">DELETE</button> -->

</div>
</form>
</main>
<footer>
        <div class="cwh">
            <img src="brown logo.jpeg"width="40px"height="30px">FASHIONISTA</div>    
       <div class="flex-all-center">
    
        <p> Copyright &copy; MyCart.com</p>
    
        </footer>
<script src="Womancollection.js">

</script>

</body>
</html>