/* declaration of the default data */
var gData = [];

/* Checked or unchecked Table 
 * Example to call this function 
 * <a href="javascript:sort(true, 'id', 'content-table');">asc</a>
 * <a href="javascript:sort(false, 'id', 'content-table');">des</a>              
 */
function sort(ascending, columnClassName, tableId) {
        var tbody = document.getElementById(tableId).getElementsByTagName("tbody")[0];
        var rows = tbody.getElementsByTagName("tr");

        var unsorted = true;

        while (unsorted) {
            unsorted = false

            for (var r = 0; r < rows.length - 1; r++) {
                var row = rows[r];
                var nextRow = rows[r + 1];

                var value = row.getElementsByClassName(columnClassName)[0].innerHTML;
                var nextValue = nextRow.getElementsByClassName(columnClassName)[0].innerHTML;

                value = value.replace(',', '.'); // in case a comma is used in float number
                nextValue = nextValue.replace(',', '.');

                if (!isNaN(value)) {
                    value = parseFloat(value);
                    nextValue = parseFloat(nextValue);
                }

                if (ascending ? value > nextValue : value < nextValue) {
                    tbody.insertBefore(nextRow, row);
                    unsorted = true;
                }
            }
        }
    };

/* Checked or unchecked Table */
function addRow(tableID="myTable") {

         var empTab = document.getElementById(tableID); 
         var rowCnt = empTab.rows.length; 
         var colCnt = empTab.rows[0].cells.length;
         // get the number of rows. 
         var tr = empTab.insertRow(rowCnt);
         //tr.setAttribute( "onclick", "trevent()" );
        
         // table row. 
         //tr = empTab.insertRow(rowCnt);
         
         for (var c = 0; c < colCnt; c++) { 
             var td = document.createElement('td'); 
             // TABLE DEFINITION. 
             td = tr.insertCell(c);
             td.setAttribute('class', 'col'+c); 
                
             if (c == 0) {
               var cell = row.insertCell(c);
               cell.setAttribute( "class", "col" +c );
               var chk = document.createElement("input");
               chk.type = "checkbox";
               chk.name="chkbox[]";
               chk.setAttribute( "onchange", "checkSelected()" );
               chk.setAttribute( "checked", "false" );
               cell.appendChild(chk);
          
               //cell.innerHTML = "Enter your data";
            } else {
               var cell = row.insertCell(c);
               cell.setAttribute( "class", "col" +c );
               cell.innerHTML = "Enter your data";
            }
        }
      }

      function deleteRow(tableID) {
          try {
            var oTable = document.getElementById(tableID);
            var rowCount = oTable.rows.length;

            for(var i=1; i<rowCount; i++) {
              var row = oTable.rows[i];
              var chkbox = row.cells[0].childNodes[0];
              if(null != chkbox && true == chkbox.checked) {
                 oTable.deleteRow(i);
                 rowCount--;
                 i--;
              }
           }
         }catch(e) {
           alert(e);
         }
      }

      function checkAll()
 {
     //alert("Checked All");
     var oTable = document.getElementById ('myTable');
     var checkboxes = oTable.querySelectorAll ('input[type=checkbox]');
     var val = checkboxes[0].checked;
     for (var i = 0; i < checkboxes.length; i++) {
         checkboxes[i].checked = val;
         checkSelected();
     }
 }
      function isAllChecked() {
        var oTable = document.getElementById ('myTable');
        var allCheckboxes = oTable.querySelectorAll ('input[type=checkbox]');
        var checked = oTable.querySelectorAll('input:checked');
        if ( allCheckboxes[0].checked === false && checked.length >= (allCheckboxes.length - 1) ) {
            // there are no checked checkboxes
            //alert('all checkboxes checked');
            return true;
        } else {
             // there are some checked checkboxes
             //alert( checked.length + ' checkboxes checked' + allCheckboxes[0].checked);
             return false;
        }
       
}
      function checkSelected() 
 { 
     try {
            
           //gets table
           var oTable = document.getElementById('myTable');
           //gets rows of table
           var rowLength = oTable.rows.length;
           var checkboxes = oTable.querySelectorAll ('input[type=checkbox]');
           if (isAllChecked()) {
               checkboxes[0].checked = true;      
           }else {
               checkboxes[0].checked = false;          
           }
           
           
           //loops through rows    
           for (i = 1; i < rowLength; i++){

           //gets cells of current row  
           var oCells = oTable.rows.item(i).cells;

           //gets amount of cells of current row
           var cellLength = oCells.length;

           //loops through each cell in current row
           for(var j = 0; j < cellLength; j++){

              // get your cell info here

              var cellVal = oCells.item(j).innerHTML;
              var oInputs = oTable.rows[i].getElementsByTagName("input");
              if ( checkboxes[i].checked ) {
                 //alert('checked ' + cellVal + ' Nb Input: ' + oInputs.length  );
                 if ( j > 0 && oInputs.length < cellLength ) {
                    oCells.item(j).innerHTML = '';
                    var ele = document.createElement('input'); 
                    ele.setAttribute('id', 'row'+i+'col'+j); 
                    ele.setAttribute('type', 'text'); 
                    ele.setAttribute('name', 'col' + j + '[]');
                    ele.setAttribute('value', cellVal ); 
                    ele.setAttribute( "onkeyup", "getValue(this.id,this.value)");
                    oCells.item(j).appendChild(ele); 
                    /* Create div for autocomplete */
                    var div = document.createElement('div');
                    div.setAttribute('class', 'row'+ i +'col'+j+' output');
                    oCells.item(j).appendChild(div);
                
                 } 
              } else {
                 //checkboxes[0].checked = "false";     
                 //alert( 'uncheck ' + oCells.item(j).firstChild.value + 'input' + oInputs.length );
                 if ( j > 0 && oInputs[j] != 'undefined' && oInputs.length > 1 ) {
                      //alert ( oCells.item(j).firstChild.value );
                      oCells.item(j).innerHTML = oCells.item(j).firstChild.value; 
                 }
                                                
              }
                } }
             
         }catch(e) {
           alert(e);
         }
}

function removeTBody(tableID = 'myTable') {
    var oTable = document.getElementById(tableID);
    //or use :  var table = document.all.tableid;

    for ( var i = oTable.rows.length - 1; i > 0; i--)
    {
         oTable.deleteRow(i);
    }
}


/* Filter Table */
function filterTable(event) {
    var filter = event.target.value.toUpperCase();
    var rows = document.querySelector("#myTable tbody").rows;
    
    for (var i = 0; i < rows.length; i++) {
        for (var j = 0; j <rows[i].cells.length; j++ ) {
            var td = rows[i].cells[j].textContent.toUpperCase();
            
            var firstCol = rows[i].cells[0].textContent.toUpperCase();
            var secondCol = rows[i].cells[1].textContent.toUpperCase();
            if (firstCol.indexOf(filter) > -1 || secondCol.indexOf(filter) > -1 || td.indexOf(filter) > -1 ) {
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }  //end if
            
        }//end for 
    }
}

document.querySelector('#myInput').addEventListener('keyup', filterTable, false);

