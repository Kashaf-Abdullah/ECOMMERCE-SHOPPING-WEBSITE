    //initialising a variable name data
    var data = 0;
  
    //printing default value of data that is 0 in h2 tag
    document.getElementById("counting").innerText = data;
    
  
    //creation of increment function
    function increment() {
        data = data + 1;
        document.getElementById("counting").innerText = data;
    }
    //creation of decrement function
    function decrement() {
        data = data - 1;
        document.getElementById("counting").innerText = data;
  
    }
  
  //2nd item
  var data2 = 0;
    
    //printing default value of data that is 0 in h2 tag
    document.getElementById("counting2").innerText = data2;
    
  
    //creation of increment function
    function increment2() {
        data2 = data2 + 1;
        document.getElementById("counting2").innerText = data2;
    }
    //creation of decrement function
    function decrement2() {
        data2 = data2 - 1;
        document.getElementById("counting2").innerText = data2;
  
    }
  //   3rd item
  var data3 = 0;
    
    //printing default value of data that is 0 in h2 tag
    document.getElementById("counting3").innerText = data3;
    
  
    //creation of increment function
    function increment3() {
        data3 = data3 + 1;
        document.getElementById("counting3").innerText = data3;
    }
    //creation of decrement function
    function decrement3() {
        data3 = data3 - 1;
        document.getElementById("counting3").innerText = data3;
  
    }