function openNav() {
  
    //alert("working");
    var x = document.getElementById("myNavLeft");
    if (x.className === "nav-left") {
        x.className += " responsive";
        //alert("working" + x );
    } else {
        x.className = "nav-left";
    }
    
    //x.style.display = "block";
}
