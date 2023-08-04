<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-user"></i> Add Teacher</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="post" enctype="multipart/form-data">
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">First Name:</label>
                        <input type="text" name="fname" class = "form-control" >    
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Last Name:</label>
                        <div class="controls">
                            <input type="text" class = "form-control"  name="lname"   >
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Email:</label>
                        <div class="controls">
                            <input type="text" class = "form-control"  name="email">
                        </div>
                    </div>

                    <!-- <div class="control-group">
                        <label class="control-label" for="inputPassword">Password:</label>
                        <div class="controls">
                            <input type="text" class = "form-control"  name="pass" value="12345678" readonly>
                        </div>
                    </div> -->
                    
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Academic Rank:</label>
                        <div class="controls">
                            <input type="text" name="arank" class = "form-control" >
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Status:</label>
                        <div class="controls">
                            <input type="text" name="designation"  class = "form-control" >
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Department:</label>
                        <div class="controls">
                            <select name="department" class = "form-control">
                                <option value="">Select Department</option>
                                <option value="BSIT">BSIT</option>
                                <option value="BSBA">BSBA</option>
                                <option value="BIT">BIT</option>
                                <option value="BSE">BSE</option>
                                <option value="BEE">BEE</option>
                                <option value="BTLE">BTLE</option>
                            </select>
                        </div>
                    </div>
                    <div class = "modal-footer">
                        <button name = "go" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
			    </form>  
            </div>
                        <?php
                            if (isset($_POST['go'])) 
                            {
                                $fname=$_POST['fname'] ; 
                                $lname= $_POST['lname'] ;					
                                $arank=$_POST['arank'] ;
                                $email=$_POST['email'];
                                $designation=$_POST['designation'] ;
                                $department=$_POST['department'];
                                $password = '';

                                mysqli_query($con,"insert into teachers (teachid,fname,lname,email,password,arank,designation,department)
                            	values ('','$fname','$lname','$email','$password','$arank','$designation','$department')
                                ") or die("Cannot Connect to Database".mysqli_connect_error());
                                echo "<script type='text/javascript'>".
                                "location.replace('teachers.php?url=teachers.php');".
                                "</script>";
                            }
                        ?>
        </div>
    </div>
</div>