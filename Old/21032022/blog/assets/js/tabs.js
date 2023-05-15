function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function filter(el_id) {
   alert(el_id);
}

function filterDate(el_id) {
  // get the values and convert to date
  //default date
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
  var yyyy = today.getFullYear();

  today = yyyy + '/' + mm + '/' + dd;
  //document.write(today);
  
  var startDate = today;
  var stopDate = today;
  if ( el_id == "cboDay") {
    var startDate = document.getElementById("cboDay").value;
    var stopDate = document.getElementById("cboDay").value;
    
  }
  
  if ( el_id == "cboYearMonth") {
     var deg = (parseInt(document.getElementById("cboMonth").value,2)+ 1);
     var month = ('0' + deg).slice(-2);
     var startDate = document.getElementById("cboYearMonth").value+'-'+ month +'-01';
     var stopDate = document.getElementById("cboYearMonth").value+'-'+ month  +'-31'; 
  }
  if ( el_id == "cboMonth") {
     var deg = (parseInt(document.getElementById("cboMonth").value,2)+ 1);
     var month = ('0' + deg).slice(-2);
     var year = document.getElementById("cboYearMonth").value;
     var startDate = year +'-'+ month +'-01';
     var stopDate = year +'-'+ month  +'-31'; 
  }
  if ( el_id == "cboYear") {
     var year = document.getElementById("cboYear").value;
     var startDate = year +'-'+'01-01';
     var stopDate = year +'-'+'12-31'; 
  }
  alert(startDate + ' to ' + stopDate );
  const input_startDate = new Date(startDate);
  const input_stopDate = new Date(stopDate);

  // only process table body rows, ignoring footer/headers
  const tr = document.querySelectorAll("#myTable tbody tr")

  for (let i = 0; i < tr.length; i++) {
    // ensure we have a relevant td
    let td = tr[i].getElementsByTagName("td");
    if (!td || !td[0]) continue;

    // you need to get the text and convert to date
    let td_date = new Date(td[0].textContent);

    // now you can compare dates correctly
    if (td_date) {
      if (td_date >= input_startDate && td_date <= input_stopDate) {
        // show the row by setting the display property
        tr[i].style.display = '';
      } else {
        // hide the row by setting the display property
        tr[i].style.display = 'none';
      }
    }

  }
}