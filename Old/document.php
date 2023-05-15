<?php 
//Get a list of file paths using the glob function.
$fileList = glob('uploads/*');
 
//Loop through the array that glob returned.
foreach($fileList as $filename){
   //Simply print them out onto the screen.
   echo "<img src=".$filename." style='width: 20px; height:20px;'>", '<br>'; 
}
?>