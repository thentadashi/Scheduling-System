<?php
  function adminLogin()
  {
    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
      echo"<script>
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