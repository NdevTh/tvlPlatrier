function showImage(id){
     
    // Get the modal
    var modalId = id.replace('myImg','myModal');
    //alert(modalId);
    var modal = document.getElementById(modalId);
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    //alert(id);
    var img = document.getElementById(id);
    var modalImgId = id.replace('myImg','img');
    var modalImg = document.getElementById(modalImgId);
    var captionId = id.replace('myImg','caption');
    //alert(captionId);
    var captionText = document.getElementById(captionId);
    
    //img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = img.src;
        captionText.innerHTML = img.alt;
   // }

    // Get the <span> element that closes the modal
    //var span = document.getElementsByClassName("close")[0];
    var spanId = id.replace('myImg','span');
    var span = document.getElementById(spanId);
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
        modal.style.display = "none";
    }
    
 }