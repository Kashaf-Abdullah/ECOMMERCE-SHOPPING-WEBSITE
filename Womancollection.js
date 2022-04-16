var total1=0;
var total2=0;
var total3=0;
var total4=0;
var total5=0;
var total6=0;var total7=0;
var total8=0;
var total9=0;var total10=0;
var total11=0;
var total12=0;
var total13=0;
var total14=0;
var total15=0;
var total16=0;

function myfunctionimage(){
    var image1=document.getElementById('imageshow');
    
    var x=document.createElement("img");
    x.setAttribute("src","w1.jpg");
    x.setAttribute("width", "50");
    x.setAttribute("height", "50");
    x.setAttribute("alt", "The Pulpit Rock");
  

image1.appendChild(x);
    


}

function increment(obj){
        var a=document.getElementById('shirt1').value;
                a++;
document.getElementById('shirt1').value=a;
// if(a==10){
//     obj.disabled=true;

// }    
}

    function decrement(obj){
        var a=document.getElementById('shirt1').value;
        a--;
document.getElementById('shirt1').value=a;
    
// if(a==0){
//     obj.disabled=true;
// }
}
const myFunction=()=>{
          var c1=document.getElementById('cb1');
   c1.style.display='block';
  const s1=document.getElementById('shirt1').value;
const p1=document.getElementById('wcp1').value;
  //display
  var shirtshow1=document.getElementById('shirtshow1');
  // var x=document.createElement("img");
  // x.setAttribute("src","m1.jpg");
  // x.setAttribute("width", "200");
  // x.setAttribute("height", "200");
  // x.setAttribute("alt", "The Pulpit Rock");

 
total1=s1*p1;
    
shirtshow1.innerHTML=`<hr>shirt quantity: ${s1}   <br>
      price: ${p1} <br>
      Total : ${total1} `;
//     console.log(`Customer order ${kilo} kilo potaoes`)
//shirtshow1.appendChild(x);
}



function increment2(obj){
        var a=document.getElementById('shirt2').value;
                a++;
document.getElementById('shirt2').value=a;
  
}

    function decrement2(obj){
        var a=document.getElementById('shirt2').value;
        a--;
document.getElementById('shirt2').value=a;
    

}
const myFunction2=()=>{
          var c1=document.getElementById('cb2');
   c1.style.display='block';
  const s1=document.getElementById('shirt2').value;
const p1=document.getElementById('wcp2').value;
  //display
  var shirtshow1=document.getElementById('shirtshow2');

 
total2=s1*p1;
    
shirtshow1.innerHTML=`<hr>shirt quantity: ${s1}<br>
      price: ${p1} <br>
      Total ${total2} `;
/
}

function myfunctionimage2(){
    var image2=document.getElementById('imageshow2');
    
    var x=document.createElement("img");
    x.setAttribute("src","w2.jpg");
    x.setAttribute("width", "50");
    x.setAttribute("height", "50");
    x.setAttribute("alt", "2");
  

image2.appendChild(x);
    


}

function myfunctionimage3(){
    var image3=document.getElementById('imageshow3');
    
    var x=document.createElement("img");
    x.setAttribute("src","w3.jpg");
    x.setAttribute("width", "50");
    x.setAttribute("height", "50");
    x.setAttribute("alt", "3");
  

image3.appendChild(x);
    


}

function increment3(obj){
        var a=document.getElementById('shirt3').value;
                a++;
document.getElementById('shirt3').value=a;
}

    function decrement3(obj){
        var a=document.getElementById('shirt3').value;
        a--;
document.getElementById('shirt3').value=a;
    

}
const myFunction3=()=>{
          var c1=document.getElementById('cb3');
   c1.style.display='block';
  const s1=document.getElementById('shirt3').value;
const p1=document.getElementById('wcp3').value;
  //display
  var shirtshow1=document.getElementById('shirtshow3');
 
total3=s1*p1;
    
shirtshow1.innerHTML=`<hr>shirt quantity: ${s1}<br>
      price: ${p1} <br>
      Total ${total3} `;
}

function myfunctionimage4(){
    var image4=document.getElementById('imageshow4');
    
    var x=document.createElement("img");
    x.setAttribute("src","w4.jpg");
    x.setAttribute("width", "50");
    x.setAttribute("height", "50");
    x.setAttribute("alt", "4");
  

image4.appendChild(x);
    


 }
 
function increment4(obj){
        var a=document.getElementById('shirt4').value;
                a++;
document.getElementById('shirt4').value=a;
}

    function decrement4(obj){
        var a=document.getElementById('shirt4').value;
        a--;
document.getElementById('shirt4').value=a;
    

}
const myFunction4=()=>{
          var c1=document.getElementById('cb4');
   c1.style.display='block';
  const s1=document.getElementById('shirt4').value;
const p1=document.getElementById('wcp4').value;
  //display
  var shirtshow1=document.getElementById('shirtshow4');
 
 
total4=s1*p1;
    
shirtshow1.innerHTML=`<hr>shirt quantity: ${s1}<br>
      price: ${p1} <br>
      Total ${total4} `;

}
function myfunctionimage5(){
    var image5=document.getElementById('imageshow5');
    
    var x=document.createElement("img");
    x.setAttribute("src","w5.jpg");
    x.setAttribute("width", "50");
    x.setAttribute("height", "50");
    x.setAttribute("alt", "5");
  

image5.appendChild(x);
    


}

function increment5(obj){
        var a=document.getElementById('shirt5').value;
                a++;
document.getElementById('shirt5').value=a;
  
}

    function decrement5(obj){
        var a=document.getElementById('shirt5').value;
        a--;
document.getElementById('shirt5').value=a;
    

}
const myFunction5=()=>{
          var c1=document.getElementById('cb5');
   c1.style.display='block';
  const s1=document.getElementById('shirt5').value;
const p1=document.getElementById('wcp5').value;
  //display
  var shirtshow1=document.getElementById('shirtshow5');
 
 
total5=s1*p1;
    
shirtshow1.innerHTML=`<hr>shirt quantity: ${s1}<br>
      price: ${p1} <br>
      Total ${total5} `;

}

function myfunctionimage6(){
    var image6=document.getElementById('imageshow6');
    
    var x=document.createElement("img");
    x.setAttribute("src","w6.jpg");
    x.setAttribute("width", "50");
    x.setAttribute("height", "50");
    x.setAttribute("alt", "6");
  

image6.appendChild(x);
    


 }
 
function increment6(obj){
        var a=document.getElementById('shirt6').value;
                a++;
document.getElementById('shirt6').value=a;
   
}

    function decrement6(obj){
        var a=document.getElementById('shirt6').value;
        a--;
document.getElementById('shirt6').value=a;
    

}
const myFunction6=()=>{
          var c1=document.getElementById('cb6');
   c1.style.display='block';
  const s1=document.getElementById('shirt6').value;
const p1=document.getElementById('wcp6').value;
  //display
  var shirtshow1=document.getElementById('shirtshow6');
  
total6=s1*p1;
    
shirtshow1.innerHTML=`<hr>shirt quantity: ${s1}<br>
      price: ${p1} <br>
      Total ${total6} `;

}
function myfunctionimage7(){
    var image7=document.getElementById('imageshow7');
    
    var x=document.createElement("img");
    x.setAttribute("src","w7.jpg");
    x.setAttribute("width", "50");
    x.setAttribute("height", "50");
    x.setAttribute("alt", "7");
  

image7.appendChild(x);
    


}

function increment7(obj){
        var a=document.getElementById('shirt7').value;
                a++;
document.getElementById('shirt7').value=a;
   
}

    function decrement7(obj){
        var a=document.getElementById('shirt7').value;
        a--;
document.getElementById('shirt7').value=a;
    

}
const myFunction7=()=>{
          var c1=document.getElementById('cb7');
   c1.style.display='block';
  const s1=document.getElementById('shirt7').value;
const p1=document.getElementById('wcp7').value;
  //display
  var shirtshow1=document.getElementById('shirtshow7');
 
total7=s1*p1;
    
shirtshow1.innerHTML=`<hr>shirt quantity: ${s1}<br>
      price: ${p1} <br>
      Total ${total7} `;
}


function myfunctionimage8(){
    var image8=document.getElementById('imageshow8');
    
    var x=document.createElement("img");
    x.setAttribute("src","w8.jpg");
    x.setAttribute("width", "50");
    x.setAttribute("height", "50");
    x.setAttribute("alt", "8");
  

image8.appendChild(x);
    


 }
 
function increment8(obj){
        var a=document.getElementById('shirt8').value;
                a++;
document.getElementById('shirt8').value=a;
   
}

    function decrement8(obj){
        var a=document.getElementById('shirt8').value;
        a--;
document.getElementById('shirt8').value=a;
    }
const myFunction8=()=>{
          var c1=document.getElementById('cb8');
   c1.style.display='block';
  const s1=document.getElementById('shirt8').value;
const p1=document.getElementById('wcp8').value;
  //display
  var shirtshow1=document.getElementById('shirtshow8');

 
total8=s1*p1;
    
shirtshow1.innerHTML=`<hr>shirt quantity: ${s1}<br>
      price: ${p1} <br>
      Total ${total8} `;

}
function myfunctionimage9(){
    var image9=document.getElementById('imageshow9');
    
    var x=document.createElement("img");
    x.setAttribute("src","w9.jpg");
    x.setAttribute("width", "50");
    x.setAttribute("height", "50");
    x.setAttribute("alt", "9");
  

image9.appendChild(x);
    


}

function increment9(obj){
        var a=document.getElementById('shirt9').value;
                a++;
document.getElementById('shirt9').value=a;
  
}

    function decrement9(obj){
        var a=document.getElementById('shirt9').value;
        a--;
document.getElementById('shirt9').value=a;
   
}
const myFunction9=()=>{
          var c1=document.getElementById('cb9');
   c1.style.display='block';
  const s1=document.getElementById('shirt9').value;
const p1=document.getElementById('wcp9').value;
  //display
  var shirtshow1=document.getElementById('shirtshow9');
 
 
total9=s1*p1;
    
shirtshow1.innerHTML=`<hr>shirt quantity: ${s1}<br>
      price: ${p1} .<br>
      Total ${total9} `;

}


function myfunctionimage10(){
    var image10=document.getElementById('imageshow10');
    
    var x=document.createElement("img");
    x.setAttribute("src","w16.jpg");
    x.setAttribute("width", "50");
    x.setAttribute("height", "50");
    x.setAttribute("alt", "10");
  

image10.appendChild(x);
    


}

function increment10(obj){
        var a=document.getElementById('shirt10').value;
                a++;
document.getElementById('shirt10').value=a;
  
}

    function decrement10(obj){
        var a=document.getElementById('shirt10').value;
        a--;
document.getElementById('shirt10').value=a;
    

}
const myFunction10=()=>{
          var c1=document.getElementById('cb10');
   c1.style.display='block';
  const s1=document.getElementById('shirt10').value;
const p1=document.getElementById('wcp10').value;
  //display
  var shirtshow1=document.getElementById('shirtshow10');
  
 
total10=s1*p1;
    
shirtshow1.innerHTML=`<hr>shirt quantity: ${s1}<br>
      price: ${p1} <br>
      Total ${total10} `;
}
function myfunctionimage11(){
    var image11=document.getElementById('imageshow11');
    
    var x=document.createElement("img");
    x.setAttribute("src","w11.jpg");
    x.setAttribute("width", "50");
    x.setAttribute("height", "50");
    x.setAttribute("alt", "11");
  

image11.appendChild(x);
    


}

function increment11(obj){
        var a=document.getElementById('shirt11').value;
                a++;
document.getElementById('shirt11').value=a;
   
}

    function decrement11(obj){
        var a=document.getElementById('shirt11').value;
        a--;
document.getElementById('shirt11').value=a;
    

}
const myFunction11=()=>{
          var c1=document.getElementById('cb11');
   c1.style.display='block';
  const s1=document.getElementById('shirt11').value;
const p1=document.getElementById('wcp11').value;
  //display
  var shirtshow1=document.getElementById('shirtshow11');
 
total11=s1*p1;
    
shirtshow1.innerHTML=`<hr>shirt quantity: ${s1}<br>
      price: ${p1} <br>
      Total ${total11} `;
}
function myfunctionimage12(){
    var image12=document.getElementById('imageshow12');
    
    var x=document.createElement("img");
    x.setAttribute("src","w12.jpg");
    x.setAttribute("width", "50");
    x.setAttribute("height", "50");
    x.setAttribute("alt", "12");
  

image12.appendChild(x);
    


}

function increment12(obj){
        var a=document.getElementById('shirt12').value;
                a++;
document.getElementById('shirt12').value=a;
  
}

    function decrement12(obj){
        var a=document.getElementById('shirt12').value;
        a--;
document.getElementById('shirt12').value=a;
    

}
const myFunction12=()=>{
          var c1=document.getElementById('cb12');
   c1.style.display='block';
  const s1=document.getElementById('shirt12').value;
const p1=document.getElementById('wcp12').value;
  //display
  var shirtshow1=document.getElementById('shirtshow12');
 
total12=s1*p1;
    
shirtshow12.innerHTML=`<hr>shirt quantity: ${s1}<br>
      price: ${p1} ...
      Total ${total12} `;

}


function myfunctionimage13(){
    var image13=document.getElementById('imageshow13');
    
    var x=document.createElement("img");
    x.setAttribute("src","w13.jpg");
    x.setAttribute("width", "50");
    x.setAttribute("height", "50");
    x.setAttribute("alt", "13");
  

image13.appendChild(x);
    


}

function increment13(obj){
        var a=document.getElementById('shirt13').value;
                a++;
document.getElementById('shirt13').value=a;
   
}

    function decrement13(obj){
        var a=document.getElementById('shirt13').value;
        a--;
document.getElementById('shirt13').value=a;
    

}
const myFunction13=()=>{
          var c1=document.getElementById('cb13');
   c1.style.display='block';
  const s1=document.getElementById('shirt13').value;
const p1=document.getElementById('wcp13').value;
  //display
  var shirtshow1=document.getElementById('shirtshow13');
  
 
total13=s1*p1;
    
shirtshow1.innerHTML=`<hr>shirt quantity: ${s1}<br>
      price: ${p1} <br>
      Total ${total13} `;

}

function myfunctionimage14(){
    var image14=document.getElementById('imageshow14');
    
    var x=document.createElement("img");
    x.setAttribute("src","w17.jpg");
    x.setAttribute("width", "50");
    x.setAttribute("height", "50");
    x.setAttribute("alt", "14");
  

image14.appendChild(x);
    


}

function increment14(obj){
        var a=document.getElementById('shirt14').value;
                a++;
document.getElementById('shirt14').value=a;
}

    function decrement14(obj){
        var a=document.getElementById('shirt14').value;
        a--;
document.getElementById('shirt14').value=a;
    
}
const myFunction14=()=>{
          var c1=document.getElementById('cb14');
   c1.style.display='block';
  const s1=document.getElementById('shirt14').value;
const p1=document.getElementById('wcp14').value;
  //display
  var shirtshow1=document.getElementById('shirtshow14');

 
total14=s1*p1;
    
shirtshow1.innerHTML=`<hr>shirt quantity: ${s1}<br>
      price: ${p1} <br>
      Total ${total14} `;

}

function myfunctionimage15(){
    var image15=document.getElementById('imageshow15');
    
    var x=document.createElement("img");
    x.setAttribute("src","w15.jpg");
    x.setAttribute("width", "50");
    x.setAttribute("height", "50");
    x.setAttribute("alt", "15");
  

image15.appendChild(x);
    


}

function increment15(obj){
        var a=document.getElementById('shirt15').value;
                a++;
document.getElementById('shirt15').value=a;

}

    function decrement15(obj){
        var a=document.getElementById('shirt15').value;
        a--;
document.getElementById('shirt15').value=a;
    

}
const myFunction15=()=>{
          var c1=document.getElementById('cb15');
   c1.style.display='block';
  const s1=document.getElementById('shirt15').value;
const p1=document.getElementById('wcp15').value;
  //display
  var shirtshow1=document.getElementById('shirtshow15');
 

 
total15=s1*p1;
    
shirtshow1.innerHTML=`<hr>shirt quantity: ${s1}<br>
      price: ${p1} <br>
      Total ${total15} `;

}


function myfunctionimage16(){
    var image16=document.getElementById('imageshow16');
    
    var x=document.createElement("img");
    x.setAttribute("src","w16.jpg");
    x.setAttribute("width", "50");
    x.setAttribute("height", "50");
    x.setAttribute("alt", "16");
  

image16.appendChild(x);
    


}

function increment16(obj){
        var a=document.getElementById('shirt16').value;
                a++;
document.getElementById('shirt16').value=a;
    
}

    function decrement16(obj){
        var a=document.getElementById('shirt16').value;
        a--;
document.getElementById('shirt16').value=a;
    

}
const myFunction16=()=>{
          var c1=document.getElementById('cb16');
   c1.style.display='block';
  const s1=document.getElementById('shirt16').value;
const p1=document.getElementById('wcp16').value;
  //display
  var shirtshow1=document.getElementById('shirtshow16');
 
 
total16=s1*p1;
    
shirtshow1.innerHTML=`<hr>shirt quantity: ${s1}<br>
      price: ${p1} <br>
      Total ${total16} `;

}


var curr_img=0;
var img_obj=document.getElementById('main_img');
    var img_path=['womencolbc2.jpg','womencolbc3.jfif','womencolbc34.jpg'];

function nextimage(){
    
   
    curr_img++;
  
img_obj.src=img_path[curr_img];
    if(curr_img==2){
        curr_img=-1;
    }
}
setInterval(nextimage,1000);
function totalamt(){
    
    var t=0;
var t=total1+total2+total3+total4+total5+total6+total7+total8+total9+total10+total11+total12+total13+total14+total15+total16;
console.log('t');
alert(t);
document.getElementById('total').value=t;


}
function clear1(){
    var c1=document.getElementById('shirtshow1');
document.getElementById('shirt1').value=0;
total1=0;
var image1=document.getElementById('imageshow');    
c1.remove();
image1.remove();



}
function clear2(){
    var c1=document.getElementById('shirtshow2');
document.getElementById('shirt2').value=0;
total2=0;
var image1=document.getElementById('imageshow2');    
c1.remove();
image1.remove();
    


}
function clear3(){
    var c1=document.getElementById('shirtshow3');
document.getElementById('shirt3').value=0;
total3=0;
var image1=document.getElementById('imageshow3');    
c1.remove();
image1.remove();



}
function clear4(){
    var c1=document.getElementById('shirtshow4');
document.getElementById('shirt4').value=0;
total4=0;
var image1=document.getElementById('imageshow4');    
c1.remove();
image1.remove();
    

}function clear5(){
    var c1=document.getElementById('shirtshow5');
document.getElementById('shirt5').value=0;
total5=0;
var image1=document.getElementById('imageshow5');    
c1.remove();
image1.remove();
   


}
function clear6(){
    var c1=document.getElementById('shirtshow6');
document.getElementById('shirt6').value=0;
total6=0;
var image1=document.getElementById('imageshow6');    
c1.remove();
image1.remove();
    


}
function clear7(){
    var c1=document.getElementById('shirtshow7');
document.getElementById('shirt7').value=0;
total7=0;
var image1=document.getElementById('imageshow7');    
c1.remove();
image1.remove();



}
function clear8(){
    var c1=document.getElementById('shirtshow8');
document.getElementById('shirt8').value=0;
total8=0;
var image1=document.getElementById('imageshow8');    
c1.remove();
image1.remove();
    


}
function clear9(){
    var c1=document.getElementById('shirtshow9');
document.getElementById('shirt9').value=0;
total9=0;
var image1=document.getElementById('imageshow9');    
c1.remove();
image1.remove();
 


}
function clear10(){
    var c1=document.getElementById('shirtshow10');
document.getElementById('shirt10').value=0;
total10=0;
var image1=document.getElementById('imageshow10');    
c1.remove();
image1.remove();



}
function clear11(){
    var c1=document.getElementById('shirtshow11');
document.getElementById('shirt11').value=0;
total11=0;
var image1=document.getElementById('imageshow11');    
c1.remove();
image1.remove();
   


}
function clear12(){
    var c1=document.getElementById('shirtshow12');
document.getElementById('shirt12').value=0;
total12=0;
var image1=document.getElementById('imageshow12');    
c1.remove();
image1.remove();
   


}
function clear13(){
    var c1=document.getElementById('shirtshow13');
document.getElementById('shirt13').value=0;
total13=0;
var image1=document.getElementById('imageshow13');    
c1.remove();
image1.remove();
  


}
function clear14(){
    var c1=document.getElementById('shirtshow14');
document.getElementById('shirt14').value=0;
total14=0;
var image1=document.getElementById('imageshow14');    
c1.remove();
image1.remove();
   


}function clear15(){
    var c1=document.getElementById('shirtshow15');
document.getElementById('shirt15').value=0;
total15=0;
var image1=document.getElementById('imageshow15');    
c1.remove();
image1.remove();
   


}
function clear16(){
    var c1=document.getElementById('shirtshow16');
document.getElementById('shirt16').value=0;
total16=0;
var image1=document.getElementById('imageshow16');    
c1.remove();
image1.remove();
   


}

