    <!-- plugins -->
    <script src="../assets/js/vendors.js"></script>
    
    <!-- custom app -->
    <script src="../assets/js/app.js"></script>
    
    <script>
        function myFunction() {
            // var input, filter, table, tr, td, i, ii;
            // input = document.getElementById("myInput");
            // filter = input.value.toUpperCase();
            // table = document.getElementById("datatable");
            // tr = table.querySelectorAll("tbody tr");
            // for (i = 0; i < tr.length; i++) {
            //     var tds = tr[i].getElementsByTagName("td");
            //     var found = false;
            //     for (ii = 0; ii < tds.length && !found; ii++) {
            //         if (tds[ii].textContent.toUpperCase().indexOf(filter) > -1) {
            //             found = true;
            //             break;
            //         }
            //     }
            //     tr[i].style.display = found?"":"none";
            // }
        };

    </script>

<script>
      function showHide() {
          let course = document.getElementById('course')
          if (course.value == "BSIT") {
              document.getElementById('hidden-panel').style.display = 'block'
              document.getElementById('BSIT1').style.display = 'block'
              document.getElementById('BIT1').style.display = 'none'
              document.getElementById('BIT2').style.display = 'none'
              document.getElementById('BIT3').style.display = 'none'
              document.getElementById('BIT4').style.display = 'none'
              document.getElementById('BIT5').style.display = 'none'
              document.getElementById('BEED').style.display = 'none'
              document.getElementById('BSED1').style.display = 'none'
              document.getElementById('BSED2').style.display = 'none'
              document.getElementById('BSED3').style.display = 'none'
              document.getElementById('BSBA1').style.display = 'none'
              document.getElementById('BSBA2').style.display = 'none'
              document.getElementById('BTLED').style.display = 'none'
              document.getElementById("department").value = "BSIT";
          } 

          else if (course.value == "BSBA") {
              document.getElementById('hidden-panel').style.display = 'block'
              document.getElementById('BSIT1').style.display = 'none'
              document.getElementById('BIT1').style.display = 'none'
              document.getElementById('BIT2').style.display = 'none'
              document.getElementById('BIT3').style.display = 'none'
              document.getElementById('BIT4').style.display = 'none'
              document.getElementById('BIT5').style.display = 'none'
              document.getElementById('BEED').style.display = 'none'
              document.getElementById('BSED1').style.display = 'none'
              document.getElementById('BSED2').style.display = 'none'
              document.getElementById('BSED3').style.display = 'none'
              document.getElementById('BSBA1').style.display = 'block'
              document.getElementById('BSBA2').style.display = 'block'
              document.getElementById('BTLED').style.display = 'none'
              document.getElementById("department").value = "BSBA";
          }

          else if (course.value == "BIT") {
              document.getElementById('hidden-panel').style.display = 'block'
              document.getElementById('BSIT1').style.display = 'none'
              document.getElementById('BIT1').style.display = 'block'
              document.getElementById('BIT2').style.display = 'block'
              document.getElementById('BIT3').style.display = 'block'
              document.getElementById('BIT4').style.display = 'block'
              document.getElementById('BIT5').style.display = 'block'
              document.getElementById('BEED').style.display = 'none'
              document.getElementById('BSED1').style.display = 'none'
              document.getElementById('BSED2').style.display = 'none'
              document.getElementById('BSED3').style.display = 'none'
              document.getElementById('BSBA1').style.display = 'none'
              document.getElementById('BSBA2').style.display = 'none'
              document.getElementById('BTLED').style.display = 'none'
              document.getElementById("department").value = "BIT";
          }
          
          else if (course.value == "BSED") {
              document.getElementById('hidden-panel').style.display = 'block'
              document.getElementById('BSIT1').style.display = 'none'
              document.getElementById('BIT1').style.display = 'none'
              document.getElementById('BIT2').style.display = 'none'
              document.getElementById('BIT3').style.display = 'none'
              document.getElementById('BIT4').style.display = 'none'
              document.getElementById('BIT5').style.display = 'none'
              document.getElementById('BEED').style.display = 'none'
              document.getElementById('BSED1').style.display = 'block'
              document.getElementById('BSED2').style.display = 'block'
              document.getElementById('BSED3').style.display = 'block'
              document.getElementById('BSBA1').style.display = 'none'
              document.getElementById('BSBA2').style.display = 'none'
              document.getElementById('BTLED').style.display = 'none'
              document.getElementById("department").value = "BSED";
          }
          else if (course.value == "BEED") {
              document.getElementById('hidden-panel').style.display = 'none'
              document.getElementById("department").value = "BEED";
          }
          else if (course.value == "BTLED") {
              document.getElementById('hidden-panel').style.display = 'none'
              document.getElementById("department").value = "BTLED";
          }

          else {
              document.getElementById('hidden-panel').style.display = 'none'
          }
      }
    </script>
    <script>
$('#datatable2').dataTable( {
    paging: true,
    searching: true
} );
    </script>