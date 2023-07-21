<?php require 'admin/includes/connect.php'?>
<?php require 'admin/includes/essentials.php';

session_start();
if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
  redirect('admin/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Schd System</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" type="image/x-icon" href="assets/img/Pangasinan_State_University_logo.png">
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body class="bg-white">
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <!-- <img src="assets/img/loader/loader.svg" alt="loader"> -->
                        <img src="assets/img/Pangasinan_State_University_logo.png" >
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->

            <!--start login contant-->
            <div class="app-contant">
                <div class="bg-white">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
                                <div class="d-flex align-items-center h-100-vh">
                                    <div class="login p-50">
                                        <h1 class="mb-2 text-center" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Sign in</h1>
                                        <form  method="POST" class="mt-3 mt-sm-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Username or Email*</label>
                                                        <input type="text" name="username" class="form-control" placeholder="Username/Email" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Password*</label>
                                                        <input type="password" name="password" class="form-control" placeholder="Password" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-block d-sm-flex  align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                                            <label class="form-check-label" for="gridCheck">
                                                                Remember Me
                                                            </label>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ml-auto">Forgot Password ?</a>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" name="login" class="btn btn-primary text-uppercase">Sign In</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-9 col-lg-1 bg-gradient o-hidden order-1 order-sm-2">
                                <div class="row align-items-center h-100">
                                    <div class="col-12" style="padding-left:130px;">
                                        <img class="col-7" src="assets/img/Pangasinan_State_University_logo.png "  style="padding-left:250px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end login contant-->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->
<?php

if(isset($_POST['login']))
{
  $frm_data = filteration($_POST);

  $query = "SELECT * FROM  `users` WHERE `username`=? AND `password`=?";
  $values = [$frm_data['username'],$frm_data['password']];

  $query2 = "SELECT * FROM  `teachers` WHERE `email`=? AND `password`=?";
  $values2 = [$frm_data['username'],$frm_data['password']];

  $res = select($query,$values,"ss");
  $res2 = select($query2,$values2,"ss");

  if($res->num_rows==1){
    $row = mysqli_fetch_assoc($res);
    $_SESSION['adminLogin'] = true;
    $_SESSION['adminId'] = $row['userid'];
    redirect('admin/index.php');

  }elseif($res2->num_rows==1){
    $row2 = mysqli_fetch_assoc($res2);
    $_SESSION['instructor'] = true;
    $_SESSION['insId'] = $row2['teachid'];
    redirect('admin/ins_dash.php');
  }

  else{
    echo "<script>alert('Incorrect username or password!');</script>";
    // redirect('admin/index.php?if=2');
  }
}

?>


    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>
</body>


</html>