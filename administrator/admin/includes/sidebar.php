                <!-- begin app-nabar -->
                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                    <div class="sidebar-nav bg-gradient scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                            <?php 
                                if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)){
                            ?>
                            <?php
                                $query = mysqli_query($con,"SELECT * FROM users WHERE userid=".$_SESSION['adminId']) or die("Cannot Connect to Database".mysqli_connect_error());
                                $row = mysqli_fetch_array($query);
                            ?>
                            <li class="nav-static-title">
                                <h4 class="mb-1"  style="margin-top:-10px;color:#f2f2f2;"><?php echo $row['name']?></h4>
                                <p style="color:gold"><?php echo $row['department']?></p>
                            </li>
                            <li class="nav-static-title">Menu</li>
                            <li><a href="index.php" aria-expanded="false"><i class="fa fa-dashboard"></i><span class="nav-title">Dashboard</span></a> </li>
                            <li><a href="teachers.php" aria-expanded="false"><i class="fa fa-user"></i><span class="nav-title">Instructor</span></a> </li>
                            <li><a href="class.php" aria-expanded="false"><i class="fa fa-tasks"></i><span class="nav-title">Class</span></a> </li>
                            <li><a href="subject.php" aria-expanded="false"><i class="fa fa-tasks"></i><span class="nav-title">Subject</span></a> </li>
                            <li><a href="room.php" aria-expanded="false"><i class="fa fa-joomla"></i><span class="nav-title">Room</span></a> </li>
                            <li><a href="school_year.php" aria-expanded="false"><i class="fa fa-graduation-cap"></i><span class="nav-title">School Year</span></a> </li>
                            <li><a href="schedule.php" aria-expanded="false"><i class="fa fa-calendar"></i><span class="nav-title">Schedule</span></a> </li>
                            <li><a href="archive.php" aria-expanded="false"><i class="fa fa-archive"></i><span class="nav-title">Archive</span></a> </li>
                            <!-- <li><a href="virtual-tour.php" aria-expanded="false"><i class="fa fa-map-marker"></i><span class="nav-title">Virtual Tours</span></a> </li> -->
                        
                            <li><a href="settings.php" aria-expanded="false"><i class="fa fa-cogs"></i><span class="nav-title">Settings</span></a> </li>
                        
                            <!-- <li><a href="comment.php" aria-expanded="false"><i class="fa fa-comments"></i><span class="nav-title">Comment</span></a> </li> -->
                            <li><a href="profile.php" aria-expanded="false"><i class="fa fa-user"></i><span class="nav-title">Profile</span></a> </li>
                            <?php
                                $query = mysqli_query($con,"SELECT * FROM users WHERE userid=".$_SESSION['adminId']) or die("Cannot Connect to Database".mysqli_connect_error());
                                $row = mysqli_fetch_array($query);
                                if($row['name']=='Administrator'){
                            ?>          
                                <li><a href="user.php" aria-expanded="false"><i class="fa fa-users"></i><span class="nav-title">Users</span></a> </li>
                            <?php } ?>
                            
                            <li class="nav-static-title">Reports</li>
                            <li><a href="statistics-report.php" aria-expanded="false"><i class="fa fa-line-chart"></i><span class="nav-title">Visitor Statistics</span></a> </li>
                            <li><a href="tour-report.php" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="nav-title">Statistics by Tour</span></a> </li>
                            <li><a href="country-report.php" aria-expanded="false"><i class="fa fa-pie-chart"></i><span class="nav-title">Statistics by Course</span></a> </li>
                            <?php  
                                }else{
                            ?>
                                <li class="nav-static-title">
                                    <h4 class="mb-1"  style="margin-top:-10px;color:#f2f2f2;"><?php echo $row['name']?></h4>
                                <p style="color:gold"><?php echo $row['department']?></p>
                                </li>
                                <li><a href="ins_dash.php" aria-expanded="false"><i class="fa fa-dashboard"></i><span class="nav-title">Schedule Dashboard</span></a> </li>
                                <li><a href="ins_class.php" aria-expanded="false"><i class="fa fa-tasks"></i><span class="nav-title">Class/Subject</span></a> </li>
                                <li><a href="ins_profile.php" aria-expanded="false"><i class="fa fa-user"></i><span class="nav-title">Profile</span></a> </li>
                                <li><a href="ins_teachers.php" aria-expanded="false"><i class="fa fa-user"></i><span class="nav-title">Instructor</span></a> </li>
                            <?php 
                            }
                            ?>
                        </ul>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>
                <!-- end app-navbar -->