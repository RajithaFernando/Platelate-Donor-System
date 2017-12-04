
<!--validation -->
<?php echo validation_errors();?>
<?php echo form_open('users/update_other');?>
<!--<input type="hidden" name="employee_id" value="--><?php //echo $user['employee_id'];?><!--">-->
<!--<>-->
<div class="col-sm-offset-7">
    <br>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<legend><h3><b><?= $title; ?></b></h3></legend>

    <div class="form-group">
        <label>User id</label>
        <input type="text" class="form-control" name="employee_id" value="<?php echo $user['employee_id'];?>" readonly>
    </div>
    <div class="card-body">
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="employee_firstname" value="<?php echo $user['employee_firstname'];?>">
                </div>
                <div class="col-md-6">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="employee_lastname" value="<?php echo $user['employee_lastname'];?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
                    <label>Telephone No</label>
                    <input type="text" class="form-control" name="employee_teleNo" value="<?php echo $user['employee_teleNo'];?>">
                </div>
                <div class="col-md-6">
                    <label>Email</label>
                    <input type="text" class="form-control" name="employee_email"value="<?php echo $user['employee_email'];?>">
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary active" style="align-content: center;" name="">Submit</button>
    </div>
</div>
<?php form_close();?>
<div class="text-md-left">
    <a class="d-block" href="forgot-password.html">Forgot Password?</a>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
