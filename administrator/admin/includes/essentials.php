<?php
  function adminLogin()
  {
      session_start();

      // Check if the user is logged in as an instructor or admin
      if (!(isset($_SESSION['instructor']) && $_SESSION['instructor'] == true) &&
          !(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
          // Redirect to the index.php or any other login page for instructors and admins
          echo "<script>
                  window.location.href='../index.php';
                </script>";
          exit;
      }
  }


  function redirect($url){
    echo"<script>
      window.location.href='$url';
    </script>";
    exit;
  }

?>