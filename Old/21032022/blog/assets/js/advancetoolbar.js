function printInvoice(){
   
    alert("Facture");
    var style = "<style>";
    style = style + '@page Section1 { size: 8.27in 11.69in; margin: .5in .5in .5in .5in; mso-header-margin: .5in; mso-footer-margin: .5in; mso-paper-source: 0; }';
    style = style + 'div.Section1 { page: Section1; margin-top:20%; } ';
    style = style + "img{ background-color :red;}"
    style = style + " ";
    style = style + "table thead tbody { background-color:white; width: 100%;font: 17px Calibri;}";
    style = style + "th {background-color:gray;}";
    style = style + "td {border: solid 1px #DDD; border-collapse: collapse; text-align:left;";
    style = style + "padding: 2px 3px;}";
    style = style + ".header { position:fixed; top:0; }";
    style = style + ".content { position:relative; top:20%; }";
    style = style + ".header-left { float:left; left:0; min-width:45%; border:1px solid #000;}";
    style = style + ".header-right { float:right; right:0; min-width:45%; }";
    style = style + "</style>";
    script = '<script type="text/javascript" src="assets/js/advancetoolbar.js"></script>';
    // CREATE A WINDOW OBJECT.
    var win = window.open('', '', 'height=auto,width=842px');
    win.document.write('<html><head>');
    win.document.write('<title> Facture </title>');   // <title> FOR PDF HEADER.
    win.document.write(style); 
    // ADD STYLE INSIDE THE HEAD TAG.
    win.document.write('</head>');
    win.document.write('<body>');
    
    
    /* 
    win.document.write('<div class="header">');
    win.document.write('Header');
    win.document.write('</div>');

    win.document.write('<div class="content">');
    
    win.document.write('<table>');
    for (var row = 1; row <= 40; row++) {
        win.document.write('<tr>');
        for (var col = 1; col <= 8; col++) {
            win.document.write('<td>');
            win.document.write('Row' + row + ' Col' + col);
            win.document.write('</td>');
        }
        win.document.write('</tr>');
    }
    win.document.write('</table>');
    
    win.document.write('</div>');
    */
    var totalPages = Math.ceil(win.document.body.scrollHeight / 1123);  //842px A4 pageheight for 72dpi, 1123px A4 pageheight for 96dpi, 
    for (var i = 1; i <= totalPages; i++) {
        /* 
        win.document.write('<div class="header">');
        win.document.write('Header');
        win.document.write('</div>');
        
        win.document.write('<div class="content">');
        
    win.document.write('<table>');
    for (var row = 1; row <= 40; row++) {
        win.document.write('<tr>');
        for (var col = 1; col <= 8; col++) {
            win.document.write('<td>');
            win.document.write('Row' + row + ' Col' + col);
            win.document.write('</td>');
        }
        win.document.write('</tr>');
    }
    win.document.write('</table>');
    
        win.document.write('</div>');
        */
        win.document.write('<div class="Section1">'); 
            win.document.write('<table>');
    for (var row = 1; row <= 40; row++) {
        win.document.write('<tr>');
        for (var col = 1; col <= 8; col++) {
            win.document.write('<td>');
            win.document.write('Row' + row + ' Col' + col);
            win.document.write('</td>');
        }
        win.document.write('</tr>');
    }
    win.document.write('</table>');
    
        win.document.write('</div>');
        
    }
    win.document.write('</body></html>');
    win.document.close(); 	// CLOSE THE CURRENT WINDOW.
    win.print();    // PRINT THE CONTENTS.
    
}

window.onload = addPageNumbers;

          function addPageNumbers() {
            var totalPages = Math.ceil(document.body.scrollHeight / 1123);  //842px A4 pageheight for 72dpi, 1123px A4 pageheight for 96dpi, 
            for (var i = 1; i <= totalPages; i++) {
              var pageNumberDiv = document.createElement("div");
              var pageNumber = document.createTextNode("Page: " + i + " de " + totalPages);
              pageNumberDiv.style.position = "absolute";
              pageNumberDiv.style.top = "calc((" + i + " * (297mm - 0.5px)) - 40px)"; //297mm A4 pageheight; 0,5px unknown needed necessary correction value; additional wanted 40px margin from bottom(own element height included)
              pageNumberDiv.style.height = "16px";
              pageNumberDiv.appendChild(pageNumber);
              document.body.insertBefore(pageNumberDiv, document.getElementById("content"));
              pageNumberDiv.style.left = "calc(100% - (" + pageNumberDiv.offsetWidth + "px + 20px))";
            }
          }