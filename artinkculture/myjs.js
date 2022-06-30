function openNav() {
  if (window.matchMedia("(max-width: 800px)").matches) {
    document.getElementById("mysidenav").style.width = "100%";
  }
  else {
    document.getElementById("mysidenav").style.width = "20%";
    document.getElementById("sided").style.marginLeft = "20%";
  }
}

function closeNav() {
  document.getElementById("mysidenav").style.width = "0";
  document.getElementById("sided").style.marginLeft = "0";
}

function myLoupe() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("loupe");
  filter = input.value.toUpperCase();
  table = document.getElementById("mytable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } 
      else {
        tr[i].style.display = "none";
      }
    }
  }
}

function Thankies(){
  alert("Thank you for your submission. See you soon !")
}

