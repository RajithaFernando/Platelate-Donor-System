
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
    <a class="d-block" href="" data-toggle="modal" data-target="#resetModal">Forgot Password?</a>
</div>

<!--reset password model-->
<div class="modal fade" id="resetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4><legend>Reset password</legend></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-login mx-auto mt-5">
                    <div class="card-header"><?php echo $user['employee_id'];?></div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleConfirmPassword">Confirm password</label>
                                        <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo base_url()?>/users/reset_password">Reset</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
