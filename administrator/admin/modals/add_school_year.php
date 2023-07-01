<div class="modal fade" id="addSy" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-graduation-cap"></i> School Year</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="post" enctype="multipart/form-data">
                    <div class="control-group">
                        <label class="control-label" for="sy">School Year (e.i 2xxx-2xxx)</label>
                        <input type="text" name="sy" class = "form-control" >    
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
                                $sy = $_POST['sy'];
                                


                                
                                mysqli_query($con,"insert into sy (sy)
                            	values ('$sy')
                                ") or die("Cannot Connect to Database".mysqli_connect_error());
                                echo "<script type='text/javascript'>".
                                "location.replace('school_year.php?url=school_year.php');".
                                "</script>";
                                
                            }
                        ?>
        </div>
    </div>
</div>