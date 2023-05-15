function CreateTable(yy, mm, dd) {
            
            //if exists table entries for the div, delete them
            if (table = document.getElementById("empTable")) {
               //table.destroy();
               //Just clean data in the table  it enough 
               document.getElementById("empTable").innerHTML = "";
               //alert ("Table exists !");
               /*
               // CREATE DYNAMIC TABLE.
               var table = document.createElement('table');

               // SET THE TABLE ID. 
               // WE WOULD NEED THE ID TO TRAVERSE AND EXTRACT DATA FROM THE TABLE.
               table.setAttribute('id', 'empTable');
              */
            }else {
               // CREATE DYNAMIC TABLE.
               var table = document.createElement('table');

               // SET THE TABLE ID. 
               // WE WOULD NEED THE ID TO TRAVERSE AND EXTRACT DATA FROM THE TABLE.
               table.setAttribute('id', 'empTable');
            
           }

        var arrHead = new Array();
        arrHead = ['Dim','Lun', 'Mar', 'Mer','Jeu','Ven','Sam'];

        var arrValue = new Array();
        arrValue.push(['01', '02', '03','04','05','06','07']);
        arrValue.push(['08', '09', '10','11','12','13','14']);
        arrValue.push(['15', '16', '17','18','19','20','21']);
        arrValue.push(['22', '23', '24','25','26','27','28']);
        arrValue.push(['29', '30', '01','02','03','04','05']);


        var tr = table.insertRow(-1);
            var th = document.createElement('th');              // TABLE HEADER.
            th.innerHTML = "&#10094";
            var att = document.createAttribute("onclick");       // Create a "class" attribute
            att.value = "prev();";                           // Set the value of the class attribute
            th.setAttributeNode(att);
            th.classList.add("active");
            tr.appendChild(th);
            var th = document.createElement('th');
            var months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
            var monthIndex = mm-1;
            th.innerHTML = months[monthIndex] + '<br><span style="font-size:18px">' + yy + '</span>';
            th.classList.add("active");
            var att = document.createAttribute("colspan");       // Create a "class" attribute
            att.value = "5";                           // Set the value of the class attribute
            th.setAttributeNode(att);                          // Add the class attribute to <h1>
            tr.appendChild(th);
            var th = document.createElement('th');
            th.innerHTML = "&#10095";
            var att = document.createAttribute("onclick");       // Create a "class" attribute
            att.value = "next();";                           // Set the value of the class attribute
            th.setAttributeNode(att);
            th.classList.add("active");
            tr.appendChild(th);
 
        var tr = table.insertRow(-1);

        for (var h = 0; h < arrHead.length; h++) {
            var th = document.createElement('th');              // TABLE HEADER.
            th.innerHTML = arrHead[h];
            tr.appendChild(th);
        }

        var n = 1;
        var nbDays = getDaysInMonth(mm-1,yy) ;
        //alert ("number of days " + nbDays);
        var firstPos = (new Date(yy+"-"+mm+"-01")).getDay();
        var lastPos = (new Date(yy+"-"+mm+"-"+nbDays)).getDay();
        //alert ("First day " +firstPos + " / Last Day :" +lastPos );
        var row = 6 ;
        
        for (var c = 0; c < row; c++) {
            tr = table.insertRow(-1);

            for (var j = 0; j < 7; j++) {
                var td = document.createElement('td');          // TABLE DEFINITION.
                td = tr.insertCell(-1);
                var att = document.createAttribute("onclick");       // Create a "class" attribute
                att.value = "tdClick(this);";                           // Set the value of the class attribute
                td.setAttributeNode(att);
                //td.innerHTML = arrValue[c][j];                  // ADD VALUES TO EACH CELL.
                if (c == 0 ){
                   if(j < firstPos){
                     td.innerHTML = "";   
                     td.classList.add("blank");
                   }else {
                       if (n == dd){
                          td.classList.add("active");
                       }
                     td.innerHTML = n;
                     n += 1 ;
                   }
                }else {
                   if (n > nbDays){
                       //n = 1 ;
                       td.innerHTML ="";
                       td.classList.add("blank");
                       row = row - 1;
                   }else if (n == dd){
                       td.innerHTML = n;
                       td.classList.add("active");
                   }else if (n == nbDays && lastPos == j){
                       td.innerHTML = n;
                       row = row - 1;
                   }else {
                       // n += 1 ;
                       td.innerHTML = n;
                   }
                   
                   n += 1 ;
                }
                //td.innerHTML = n;
                
                //n += 1 ;
            }
        }

        // NOW CREATE AN INPUT BOX TYPE BUTTON USING createElement() METHOD.
        var button = document.createElement('input');

        // SET INPUT ATTRIBUTE 'type' AND 'value'.
        button.setAttribute('type', 'button');
        button.setAttribute('value', 'Read Table Data');

        // ADD THE BUTTON's 'onclick' EVENT.
        button.setAttribute('onclick', 'GetTableValues()');

        // FINALLY ADD THE NEWLY CREATED TABLE AND BUTTON TO THE BODY.
        //return table ;
        //document.body.appendChild(table);
        //document.body.appendChild(button);
                       
                      //Pass value to update dropdown 
                       var mLength = mm.toString().length;
                if (mLength < 2){
                    mm = "0" + mm.toString();
                }
                    var dLength = dd.toString().length;
                if (dLength < 2){
                    dd = "0" + dd.toString();
                }
                       document.getElementById("myDate").value = yy + "-"+mm+"-"+dd;
   var StrDate =  yy + "-"+mm+"-"+dd;
  
 
        return {table , StrDate}
    }


function getDaysInMonth(m, y)
    {
    // months in JavaScript start at 0 so decrement by 1 e.g. 11 = Dec--m;

    // if month is Sept, Apr, Jun, Nov return 30 days
    if( /8|3|5|10/.test( m ) ) return 30;

    // if month is not Feb return 31 days
    if( m != 1 ) return 31;

    // To get this far month must be Feb ( 1 )
    // if the year is a leap year then Feb has 29 days
    if( ( y % 4 == 0 && y % 100 != 0 ) || y % 400 == 0 ) return 29;

    // Not a leap year. Feb has 28 days.
    return 28;
}
            
