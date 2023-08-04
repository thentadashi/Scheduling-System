<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-users"></i> Add Users</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="post" enctype="multipart/form-data">
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Full Name:</label>
                        <input type="text" name="fname" class = "form-control" >    
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Username:</label>
                        <input type="text" name="username" class = "form-control" >    
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Email:</label>
                        <div class="controls">
                            <input type="text" class = "form-control"  name="email">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Password:</label>
                        <div class="controls">
                            <input type="text" class = "form-control"  name="pass" value="12345678" readonly>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Account Role:</label>
                        <div class="controls">
                            <select type="text" name="department" class="form-control" id="department">
                                <option value="">Select User Status</option>
                                <option value="MIS-Admin-Assistant">MIS Admin Assistant</option>
                                <option value="Dept-Chair">Department Chairperson</option>
                            </select>
                        </div>
                    </div>

                    <div id="courseDropdownWrapper" style="display:none;">
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Department:</label>
                            <div class="controls">
                                <select name="course" class="form-control" id="course">
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
                                $username= $_POST['username'] ;					
                                $email=$_POST['email'];
                                $department = $_POST['department'] . '-' . $_POST['course'];
                                $password = '12345678';

                                mysqli_query($con,"insert into users (userid,name,username,email,password,department)
                            	values ('','$fname','$username','$email','$password','$department')
                                ") or die("Cannot Connect to Database".mysqli_connect_error());
                                echo "<script type='text/javascript'>".
                                "location.replace('user.php?url=user.php');".
                                "</script>";
                            }
                        ?>
        </div>
    </div>
</div>

<script>
    const departmentDropdown = document.getElementById('department');
    const courseDropdownWrapper = document.getElementById('courseDropdownWrapper');

    departmentDropdown.addEventListener('change', function() {
        // Show the course dropdown only when the selected value is "Dept-Chair"
        if (departmentDropdown.value === 'Dept-Chair') {
            courseDropdownWrapper.style.display = 'block';
        } else {
            courseDropdownWrapper.style.display = 'none';
        }
    });
</script>