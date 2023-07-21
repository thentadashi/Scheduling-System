                               <!-- begin app-header -->
            <header class="app-header top-bar ">
                <!-- begin navbar -->
                <nav class="navbar navbar-expand-md ">

                    <!-- begin navbar-header -->
                    <div class="navbar-header d-flex align-items-center bg-gradient">
                        <a href="index.php" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
                        <a class="navbar-brand" href="index.php">
                        
                            <img src="../assets/img/Pangasinan_State_University_logo.png" style="height:40px; margin:2px;" alt="logo" /> 
                            <div style="position:absolute;left:77px;top:18px;">Sched System</div>
                            <!-- <img src="../assets/img/Pangasinan_State_University_logo.png" class="img-fluid logo-mobile" alt="logo" /> -->
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-align-left"></i>
                    </button>
                    <!-- end navbar-header -->
                   <!-- begin navigation -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navigation d-flex">
                            <ul class="navbar-nav nav-left">
                                <li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                                        <i class="ti ti-align-right"></i>
                                    </a>
                                </li>
                                <li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
                                    <a href="javascript:void(0)" class="nav-link expand">
                                        <i class="icon-size-fullscreen"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav nav-right ml-auto">
                                <li class="nav-item dropdown user-profile">
                                    <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="../assets/img/avtar/np.jpg" alt="avtar-img">
                                        <span class="bg-success user-status"></span>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                        <div class="bg-gradient px-4 py-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="mr-1">
                                                <?php 
                                                    if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)){
                                                ?>
                                                    <h4 class="text-white mb-0">Administrator</h4>
                                                    <small class="text-white">admin@gmail.com</small>
                                                <?php
                                                    }else{
                                                        $query = mysqli_query($con, "SELECT * FROM teachers WHERE teachid='" . $_SESSION['insId'] . "'") or die("Cannot Connect to Database".mysqli_connect_error());
                                                        while ($row = mysqli_fetch_array($query)) {
                                                            echo "<h4 class='text-white mb-0'>".$row['fname']." ".$row['lname']."</h4>";
                                                            echo "<small class='text-white'>".$row['email']."</small>";
                                                        }
                                                    }
                                                ?>
                                                </div>
                                                <a href="logout.php" class="text-white font-20 tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"> <i
                                                                class="zmdi zmdi-power"></i></a>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                        <?php 
                                            if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)){
                                        ?>
                                            <a class="dropdown-item d-flex nav-link" href="profile.php">
                                        <?php
                                            }else{
                                        ?>
                                            <a class="dropdown-item d-flex nav-link" href="ins_profile.php">
                                        <?php
                                            }
                                        ?>

                                                <i class="fa fa-user pr-2 text-success"></i> Profile</a>
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-envelope pr-2 text-primary"></i> Inbox
                                                <span class="badge badge-primary ml-auto">6</span>
                                            </a>
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class=" ti ti-settings pr-2 text-info"></i> Settings
                                            </a>
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-compass pr-2 text-warning"></i> Need help?</a>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <a class="bg-light p-3 text-center d-block" href="#">
                                                        <i class="fe fe-mail font-20 text-primary"></i>
                                                        <span class="d-block font-13 mt-2">My messages</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="bg-light p-3 text-center d-block" href="#">
                                                        <i class="fe fe-plus font-20 text-primary"></i>
                                                        <span class="d-block font-13 mt-2">Compose new</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end navigation -->
                </nav>
                <!-- end navbar -->
            </header>
            <!-- end app-header -->