function showImage(imageId){
       //alert(imageId);
       // Get the modal
       var modal = document.getElementById('myModal');
       // Get the image and insert it inside the modal - use its "alt" text as a caption
       var img = document.getElementById(imageId);
       var modalImg = document.getElementById("imgModal");
       modal.style.display = "block";
       modalImg.src = img.src;
       var captionText = document.getElementById("caption");
       captionText.innerHTML = img.alt;

   }

   function closeModal() {
       var modal = document.getElementById('myModal');
       modal.style.display = "none";
   }

