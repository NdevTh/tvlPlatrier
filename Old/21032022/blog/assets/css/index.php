<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>Code barre 128 + EAN</title>
	<style>
		@font-face 
		{
			font-family: 'Code128';
			src: url('code128.woff') format('woff');
		}
		
		@font-face 
		{
			font-family: 'CodeEAN';
			src: url('ean13.woff') format('woff');
		}		
		.barcode128 {
			font-family: 'Code128'; 
			font-size: 40px;
		}	
		
		.barcodeEAN {
			font-family: 'CodeEAN'; 
			font-size: 40px;
		}		


@media print {
  html, body { text-align:center; }
  #invoice {
    padding: 30px;
  }

  .invoice {
    position: relative;
    background-color: #fff;
    min-height: 680px;
    padding: 15px;
  }

  .invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6;
  }
		@font-face 
		{
			font-family: 'Code128';
			src: url('code128.woff') format('woff');
		}
		
		@font-face 
		{
			font-family: 'CodeEAN';
			src: url('ean13.woff') format('woff');
		}		
		.barcode128 {
			font-family: 'Code128'; 
			font-size: 40px;
		}	
		
		.barcodeEAN {
			font-family: 'CodeEAN'; 
			font-size: 40px;
		}		
}
	
	</style>
  </head>
  <body>
	<?php
		/*
		https://fr.wikipedia.org/wiki/Code_128
		https://fr.wikipedia.org/wiki/Code-barres_EAN
		*/
		include('code128-EAN13.php');
		
		$Commande = "cmd3581";
		$code128 = Code128($Commande);
		
		$NoArt = "782940199617";
		$codeEAN =CodeEAN13($NoArt);
		
		$txtcodeEAN = '';
		if (isset($_POST['genCode'])) {
    $txtcodeEAN =Code128($_POST['txtCode']);
 }
	?> 	
	<h1>Code barre 128</h1>
	<h2>Commande N°:<?php echo $Commande; ?></h2>
	<p class="barcode128"><?php echo $code128 ?></p>
	<br>
	<h1>Code barre EAN13</h1>
	<h2>Article N°:<?php echo $NoArt; ?></h2>
	<p class="barcodeEAN"><?php echo $codeEAN ?></p>
	<p>Le 13ème chiffre est un chiffre de contrôle</p>
	
  	
  	
  	<form method="POST" action="">
  					<input type="text" name="txtCode" >
  		  <input name="genCode" type="submit" value="Generate Codes" >
  	</form>
  	<div id="html2pdf">
  		Codes Barres
  		<p  class="barcode128"> <?php echo $txtcodeEAN ?></p>
  		Date Reçue : <?php echo date("Y-m-d"); ?>
  	</div>
  	
  	<button onclick="imprimer()">Imprimer</button>
  	<script type="text/javascript" >
  		   function imprimer() {
  		      alert("Imprimer");
  		      var mywindow = window.open("", "PRINT");
         mywindow.document.write("<html>");
         mywindow.document.write(document.head.outerHTML);
         mywindow.document.write("<body>");
         mywindow.document.write(document.getElementById("html2pdf").outerHTML);
         mywindow.document.write("</body></html>");
  		      
  		      //mywindow.document.close();
  		      //mywindow.focus();
  		
  		      //mywindow.print();
  		      //mywindow.close();
  		
  		      //return true;
  		      
  		   }
  	</script>
  </body>
  </html>
