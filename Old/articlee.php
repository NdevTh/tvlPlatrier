
<?php
include_once 'db_connect.php';
if (isset($_POST['edit'])) {
mysqli_query($connection,"UPDATE articles set create_at='" . $_POST['create_at'] . "', title='" . $_POST['title'] . "', contenu='" . $_POST['content'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($connection,"SELECT * FROM articles WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Article Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="../styles/mystyle.css">
   
    <style> 
		* { font-family: Helvetica, sans-serif; font-size: auto; letter-spacing: 0.5px; }
div.scroll { 

                margin:4px, 4px; 
                padding:4px; 
                background-color: green; 
                width: auto ; 
                height: 300px; 
                overflow-x: hidden; 
                overflow-x: auto; 
                text-align:justify; 

            } 
.imgleftp {
 
  width: auto;
  height: auto;
  object-fit: cover;
  float: left;
  margin-right: 20px;
  max-width:50%;
  maw-height:50%;
}
.imgnormal {
 
  width: 100%;
  height: 100%;
  float: none;
}

.imgrightp {
 
  width: auto;
  height: auto;
  object-fit: cover;
  float: right ;
  margin-right: 20px;
  max-width:50%;
  maw-height:50%;
}

.headerarticle {
		margin: 50px auto 0px;
		
		height: 50px;
	color: white;
	background: #4CAF50;
	text-align: center;
		
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	
}
		form, .container {
	
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
		.input-group {
	margin: 10px 0px 10px 0px;
}

.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 80%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
		margin-top:15px;
 margin-left:5px;
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px;
		text-transform: uppercase;
}

.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

 </style>
    
</head>
<body>
<form name="frmUser" method="post" action="">
    
    <div class="w3-bar w3-light-gray">
        <div class="input-group">
            <button type="submit" name="edit" value="Sauvegarder" class="btn">Sauvegarder</button>
            <button class="btn"><a style="text-decoration: none;" href="articles.php">Retourner à la liste</a></button>
            
            <button id="html_code">HTML Code</button>
        <button id="html_preview">HTML Preview</button>
        <button id="html_pdf">PDF</button>
        
        <button id="myBtn" data-edit="insertImage:images/map.jpg"><b>Image</b></button>
            <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
    </div>
    
</div>
    
        <button onclick="imgLeft();"><b>Image Left</b></button>
        <button onclick="imgCenter();"><b>Image Center</b></button>
        <button onclick="imgRight();"><b>Image Right</b></button>
        
        <button data-edit="bold"><b>B</b></button>
        <button data-edit="italic"><i><b>I</b></i></button>
        <button data-edit="underline"><b><u>U</u></b></button>
        <button data-edit="strikeThrough"><b><del>U</del></b></button>
        
        <button data-edit="superscript"><b>a</b><sup>x</sup></button>
        <button data-edit="subscript"><b>a</b><sub>x</sub></button>
        
        <button data-edit="backColor:red"><mark style="background-color: red;"><b>T</b></mark></button>
        <button data-edit="backColor:blue"><mark style="background-color: blue;"><b>T</b></mark></button>
        <button data-edit="backColor:yellow"><mark><b>T</b></mark></button>
        <button data-edit="backColor:green"><mark style="background-color: green;"><b>T</b></mark></button>
        <button data-edit="backColor:black"><mark style="background-color: black; color:white;"><b>T</b></mark></button>
        <button data-edit="backColor:white"><mark style="background-color: white;"><b>T</b></mark></button>
        <button data-edit="backColor:pink"><mark style="background-color: pink;"><b>T</b></mark></button> 
        <button data-edit="backColor:violet"><mark style="background-color: violet;"><b>T</b></mark></button>
        <button data-edit="backColor:powderblue"><mark style="background-color: powderblue;"><b>T</b></mark></button>
        
        <button data-edit="ForeColor:red"><b style="color:red">T</b></button>
        <button data-edit="ForeColor:blue"><b style="color:blue">T</b></button>
        <button data-edit="ForeColor:yellow"><b style="color:yellow">T</b></button>
        <button data-edit="ForeColor:green"><b style="color:green">T</b></button>
        <button data-edit="ForeColor:black"><b style="color:black">T</b></button>
        <button data-edit="ForeColor:white"><b style="color:white">T</b></button>
        <button data-edit="ForeColor:pink"><b style="color:pink">T</b></button>
        <button data-edit="ForeColor:violet"><b style="color:violet">T</b></button>
        <button data-edit="ForeColor:powderblue"><b style="color:powderblue">T</b></button>

        <button data-edit="formatBlock:p"><b>P</b></button>
        <button data-edit="insertHorizontalRule"><b>Rule</b></button>
        <button data-edit="insertBrOnReturn"><b>&#9252;</b></button>
    
        <button data-edit="formatBlock:H1"><b>H</b>1</button>
        <button data-edit="formatBlock:H2"><b>H</b>2</button>
        <button data-edit="formatBlock:H3"><b>H</b>3</button>
        <button data-edit="formatBlock:H4"><b>H</b>4</button>
        <button data-edit="formatBlock:H5"><b>H</b>5</button>
        <button data-edit="formatBlock:H6"><b>H</b>6</button>
        
        <button data-edit="insertUnorderedList"><b>UL</b></button>
        <button data-edit="insertOrderedList"><b>OL</b></button>
        
        <button data-edit="justifyLeft"><b>&#8676;</b></button>
        <button data-edit="justifyCenter"><b>&#8633;</b></button>
        <button data-edit="justifyFull">🔛</button>
        <button data-edit="justifyRight"><b>&#8677;</b></button>
        <button data-edit="indent">Tab In</button>
        <button data-edit="outdent">Tab Out</button>
        <button data-edit="removeFormat">&times;</button>

        <button data-edit="selectAll">Select All</button>
        <button data-edit="copy">Copy</button>
        <button data-edit="cut">&#9986;</button>
        <button id="paste" onclick="textPaste()">Paste</button>
        <button data-edit="delete">&#9003</button>
        <button data-edit="forwardDelete">DEL</button>
        <button data-edit="undo"><b>&#8630;</b></button>
        <button data-edit="redo"><b>&#8631;</b></button>
        
        <select id="select_font" onchange="changeFont(this.value);">
            <option value="Arial">Arial</option>
            <option value="Sans Serif" selected>Sans Serif</option>
            <option value="Comic Sans MS">Comic Sans MS</option>
            <option value="Times New Roman">Times New Roman</option>
            <option value="Courier New">Courier New</option>
            <option value="Verdana">Verdana</option>
            <option value="Trebuchet MS">Trebuchet MS</option>
            <option value="Arial Black">Arial Black</option>
            <option value="Impact">Impact</option>
            <option value="Bookman">Bookman</option>
            <option value="Garamond">Garamond</option>
            <option value="Palatino">Palatino</option>
            <option value="Georgia">Georgia</option>
            
        </select>
        
        <button id="text_increase_size" style="font-weight:bold;" >S+</button>
        <button id="text_decrease_size" style="font-weight:bold;" >S-</button>
         
					
				    <div class="headerarticle">
				        <h2>Modifier Article </h2>
				    </div>
				    
				    <div class="container">
				        <?php if(isset($message)) { echo '<div class="error">'.$message.'</div>'; } ?>
				        
				        <div class="input-group">
				            <label>ID</label>
				            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				            <input type="text" name="id"  value="<?php echo $row['id']; ?>">
				        </div>
				        <div class="input-group">
				            <label>DATE </label>
				            <input type="date" name="create_at" value="<?php echo $row['create_at']; ?>">
				        </div>
				        <div class="input-group">
				            <label>Title</label>
				            <input type="text" name="title" value="<?php echo $row['title']; ?>">
				        </div>
				        <div class="input-group">
				            <label>CONTENT</label>				  
				            <textarea style="display:none;" id="text" name="content" rows="4" cols="50"  style="">
				            </textarea>	
				            <div class="scroll" id="divcontent" contenteditable>
				                <?php echo $row['contenu']; ?>
				            </div>
				        </div>
				    </div>
				    
            <script type="text/javascript">
                // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    
                //Add P Tag when press Enter 
            document.addEventListener('keypress', function(e){
                if(e.keyCode == '13') {
                   e.preventDefault();
                   document.execCommand('insertParagraph', false);
                   document.execCommand('formatBlock', false, 'p');
                }
                if(e.keyCode == '86') {
                   alert ("Ctl+V pressed key");
                   e.preventDefault();
                   window.document.execCommand('insertText', false, "test");
                   //document.execCommand('insertParagraph', false);
                  // document.execCommand('formatBlock', false, 'p');
                }
                if(e.keyCode == '67') {
                   alert ("Ctl+C pressed key ");
                   e.preventDefault();
                  // document.execCommand('insertParagraph', false);
                  // document.execCommand('formatBlock', false, 'p');
                }
             }, false);
                
                function imgLeft(){
var images = document.querySelectorAll("img");
alert ("images : " + images );
// Get Selection
  sel = window.getSelection();
alert ("Select : " + sel);
for (var x = 0; x < images.length; ++x) {
      /*
    if (images[x].parentNode.tagName != "QWE") {
        images[x].outerHTML = "<qwe>" + images[x].outerHTML + "</qwe>";
      }*/
      if(x == imageId){
         images[x].className = "imgleftp";
      }
      
    }

}
function imgCenter(){
var images = document.querySelectorAll("img");
alert ("images : " + images );
// Get Selection
  sel = window.getSelection();
alert ("Select : " + sel);
for (var x = 0; x < images.length; ++x) {
      /*
    if (images[x].parentNode.tagName != "QWE") {
        images[x].outerHTML = "<qwe>" + images[x].outerHTML + "</qwe>";
      }*/
      if(x == imageId){
         images[x].className = "imgnormal";
      }
      
    }

}

function imgRight(){
var images = document.querySelectorAll("img");
alert ("images : " + images );
// Get Selection
  sel = window.getSelection();
alert ("Select : " + sel);
for (var x = 0; x < images.length; ++x) {
      /*
    if (images[x].parentNode.tagName != "QWE") {
        images[x].outerHTML = "<qwe>" + images[x].outerHTML + "</qwe>";
      }*/
      if(x == imageId){
         images[x].className = "imgrightp";
      }
      
    }

}
                [].forEach.call(document.querySelectorAll("[data-edit]"), function(btn) {
  btn.addEventListener("click", edit, false);
});

function edit(event) {
  event.preventDefault();
  var cmd_val = this.dataset.edit.split(":");
  if(cmd_val[0] == "insertImage"){
     alert (cmd_val[1]);
     cmd_val[1] = prompt("Please enter url of image ", "images/map.jpg");
  }
  document.execCommand(cmd_val[0], false, cmd_val[1]);

  var images = document.querySelectorAll("img");
for (var x = 0; x < images.length; ++x) {
      /*
    if (images[x].parentNode.tagName != "QWE") {
        images[x].outerHTML = "<qwe>" + images[x].outerHTML + "</qwe>";
      }*/
      if(images[x].hasAttribute("class")){
         //images[x].className = "imgnormal";
       }else{
         images[x].className="imgnormal";
       }
      //
      var imgId = x;
      //alert("image id : "+imgId);
      images[x].setAttribute("id",imgId);
      images[x].setAttribute("onclick","storeImgId("+x+");");
    }
  
}

var imageId;
function storeImgId(id){
   imageId = id;
   alert("Image Selected !");
}

                //pass 
                document.addEventListener("click", function() { 
                // if(activities.value == "addNew") { addActivityItem(); } 
			var div = document.getElementById("divcontent");
			    var textarea = document.getElementById("text");
			    textarea.value = div.innerHTML;
			//alert("Click " + div.innerHTML);
			});
            </script>
				    

</form>
</body>
</html>
