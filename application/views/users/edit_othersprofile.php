<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/users/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url()?>/users/current_users">Employees</a>
    </li>
    <li class="breadcrumb-item active">Edit Profile</li>
</ol>

<!--validation -->
<?php echo validation_errors();?>
<div style="float: left;width: 65%;">
    <br>
    <br>
    <?php echo form_open('users/update_other');?>
        <div class="card col-sm-offset-7"  style="border: ridge; border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-right-radius: 30px; border-bottom-left-radius: 30px;" >
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<legend style="text-align: center;"><h3><b><?= $title; ?></b></h3></legend>
            <div class="form-group">
                <div class="col-md-5">
                    <label>User id</label>
                    <input type="text" class="form-control" name="employee2_id" value="<?php echo $user['employee_id'];?>" readonly>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="employee_firstname" value="<?php echo $user['employee_firstname'];?>" style="text-transform: capitalize;" required>
                        </div>
                        <div class="col-md-6">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="employee_lastname" value="<?php echo $user['employee_lastname'];?>" style="text-transform: capitalize;" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Telephone No</label>
                            <input type="text" class="form-control" name="employee_teleNo" value="<?php echo $user['employee_teleNo'];?>"required>
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="text" class="form-control" name="employee_email"value="<?php echo $user['employee_email'];?>"required>
                        </div>
                    </div>
                </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label>NIC</label>
                        <input type="text" class="form-control" name="employee_NIC" value="<?php echo $user['employee_NIC'];?>">
                    </div>
                    <div class="col-md-6">
                        <div class="col-xs-5 selectContainer">
                            <br>
                            <br>
                            <label>Occupation</label>
                            <select id="occupation" name="employee_occupation" required >
                                <option value="">Select Occupation</option>
                                <option value="Admin">Admin</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Nurse">Nurse</option>
                                <option value="PHI">PHI</option>
                                <option value="Machine_operator">Machine Operator</option>
                            </select>
                         </div>
                    </div>
                </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary btn-lg active" style=" border-radius: 15px; background: #336699;" name="">Submit</button>
            <button type="reset" class="btn btn-primary btn-lg" name="" style=" border-radius: 15px; background: #ff4d4d;">Cancle</button>
            <br>
            <br>
        </div>
        </div>
    <?php form_close();?>

    <div class="col-sm-10">
        <div class="text-md-left">
            <a class="d-block" href="" data-toggle="modal" data-target="#resetModal" id="reset_password_btn">Reset Password?</a>
        </div>
    </div>

</div>
<!--password reset form-->
<div id="rest_pass" style="float: right;width: 35%;">
    <br>
    <br>
    <br>
    <div class="card-body">

    <h4><legend>Reset password</legend></h4>
        <hr>
        <div id="reset_password">
        <?php echo form_open('/passwords/reset_password')?>
            <input type="text" class="form-control" name="employee_id" value="<?php echo $user['employee_id'];?>" hidden>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="password">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleConfirmPassword">Confirm password</label>
                        <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password" name="password2">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Reset</button>
            <?php form_close();?>
        </div>
    </div>
    <hr>
    <div class="col-md-5">
        <label>Username:  <?php echo $user['employee_username'];?></label>
        <br>
        <label>Join date:<?php echo $user['emp_registered_at'];?></label>
        <br>
        <label>Occupation  : <?php echo $user['employee_occupation'];?></label>
    </div>
</div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script>
    jQuery(document).ready(function(){
        $("#reset_password").hide();
        jQuery('#reset_password_btn').on('click', function(event) {
            jQuery('#reset_password').toggle('show');
        });
    });
</script>